<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;


class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('program')->where('cart_id', '=', App::make('cart.id'))->get();

        return view('front.cart', [
            'cart' => $cart,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
        ]);

        $cart_id = App::make('cart.id');
        $program_id = $request->post('program_id');
        $program = Program::findOrFail($request->post('program_id'));

        $cart = Cart::where([
            'cart_id' => $cart_id,
            'program_id' => $program_id,
        ])->first();

        if ($cart) {
            return redirect()->back()->with('status', "انت مشترك في برنامج {$program->name} سابقا !");
        } else {

            $cart = Cart::create([
                'user_id' => Auth::id(),
                'cart_id' => $cart_id,
                'program_id' => $program_id,
            ]);
        }

        return redirect()->back()->with('status', "تم الاشتراك في برنامج {$program->name} بنجاح !");
    }

    //  يستخدم لاضافة العناصر الى الكوكي وارجاعها من الكوكي عند الحاجة اليها ولكن تم نقل هذه الميثود الى ال سيرفس بروفايدر
    protected function getCartId()
    {
        $id = Cookie::get('cart_id');
        if (!$id) {
            $id = Str::uuid();
            Cookie::queue('cart_id', $id, 60 * 24 * 30);
        }
        return $id;
    }
}
