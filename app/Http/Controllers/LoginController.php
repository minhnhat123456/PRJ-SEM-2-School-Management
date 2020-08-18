<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|min:6|regex:/[a-zA-z0-9]*/',
            'password' => 'required|min:6|regex:/[a-zA-z0-9]*/'
        ]);
        $user_name = $request->input('user_name');
        $password = $request->input('password');

        $user = User::where('user_id', $user_name)->first();

        if ($user->password == $password) {
            session_start();
            session([
                'user' => $user->user_id,
                'role' => $user->user_role,
                'user-name' => $user->user_name,
                'user-image' => $user->user_image
            ]);
            return redirect('/');
        }
    }
}
