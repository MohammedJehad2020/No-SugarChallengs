<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetermineUserRole extends Controller
{

     //   function for determine role for users
     public function determineUserRole()
     {
         $users = User::all();
         $roles = Role::paginate();
 
         return view('admin.roles.userRole', [
             'roles' => $roles,
             'users' => $users,
         ]);
     }

     public function storeUserRole(Request $request){

        $request->validate([
             'user_id' => 'required',
             'role_id' => 'required',
        ]);

        $role_id = $request->post('role_id');
        $user_id = $request->post('user_id');

        DB::insert('insert into role_user (role_id, user_id) values (?, ?)', [$role_id, $user_id]);

        return redirect()->route('admin.roles.userRole')->with('succes', 'added User Role Successfully');
     }
     
}
