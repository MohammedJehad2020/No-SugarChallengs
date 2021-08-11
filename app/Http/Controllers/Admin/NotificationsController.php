<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index(){
        $user = Auth::user();
        // foreach($user->unreadNotifications as $notification){
        //     echo $notification->data['body'];
        // }
        // $notifications = $user->unreadNotifications;

        return view('admin.includes.header', [
            // 'user' => $user,
         ]);
    }
}
