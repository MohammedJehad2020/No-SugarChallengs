<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Patient;
use App\Models\User;
use App\Notifications\NewOrderCreatedNotification;
use App\Rules\CheckAge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Throwable;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::with('program')->where('cart_id', App::make('cart.id'))->get();

        return view('front.checkout', [
            'cart' => $cart,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => [
                'required',
                Rule::unique('orders', 'email'),
            ],
            'gender' => 'required|in:male,female',
            'DOB' => [
                'required',
                new CheckAge(),
            ],
            'phone' => 'required',
            'weight' => 'required|numeric|max:255|min:35',
            'height' => 'required|numeric',
            'country' => 'required',
            'sugar_level' => 'required',
        ]);

        $cart = Cart::with('program')->where('cart_id', App::make('cart.id'))->get();

        if ($cart->count() == 0) {
            return redirect('/');
        }

        Cart::where('cart_id', App::make('cart.id'))->delete();

        DB::beginTransaction();

        try {

            if ($request->post('register')) {
                $user = $this->createUser($request);
                $patient = $this->createPatient($request);               
            }

            $request->merge([
                'user_id' => Auth::id(),
            ]);

            $order = Order::create([
                'name' => $request->name,
                'email' => $request->input('email'),
                'gender' => $request->gender,
                'DOB' => $request->post('DOB'),
                'phone' => $request->phone,
                'weight' => $request->post('weight'),
                'height' => $request->post('height'),
                'sugar_level' => $request->post('sugar_level'),
                'country_code' => $request->post('country'),

            ]);

            // بترجع البرامج التي اشترك فيها المستخدم
            foreach ($cart as $item) {
                $order->items()->create([
                    'program_id' => $item->program_id,
                ]);
            }

            DB::commit();

            $user = User::where('type', '=', 'super-admin')->first();
            $user->notify(new NewOrderCreatedNotification($order));


            return redirect('/')->with('status', 'تم ارسال طلبك بنجاح !');
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', $e->getMessage())->withInput();
        }
    }

    protected function createUser(Request $request)
    {
        $user = User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Str::random(8),
        ]);

        Auth::login($user);

        return $user;
    }

    protected function createPatient(Request $request)
    {
        // create patient account in patient table
        $patient = Patient::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'program_id' => $request->post('program_id'),
            'gender' => $request->post('gender'),
            'DOB' => $request->post('DOB'),
            'phone' => $request->phone,
            'weight' => $request->post('weight'),
            'height' => $request->post('height'),
            'sugar_level' => $request->post('sugar_level'),
            'country' => $request->post('country'),
        ]);
        return $patient;
    }
}
