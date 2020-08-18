<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function add()
    {
        return view('pages.user-pages.account-add');
    }

    public function update($user_id)
    {
        $user = User::where('user_id', $user_id)->first();
        return view('pages.user-pages.account-add', ['user' => $user]);
    }

    public function submit(Request $request)
    {
        if (!empty($user = User::where('user_id', $request->user_id)->first())) {

            $user->user_name = $request->user_name;
            $user->day_of_birth = $request->day_of_birth;
            $user->user_email = $request->user_email;
            $user->user_phone = $request->user_phone;
            $user->user_address = $request->user_address;

            $user->save();
            if (session()->get('user') == $user->user_id) {
                session(['user-name' => $user->user_name]);
            }
        } else {
            $user = new User();
            $user->user_id = $request->user_id;
            $user->user_name = $request->user_name;
            $user->password = $request->password;
            $user->day_of_birth = $request->day_of_birth;
            $user->user_email = $request->user_email;
            $user->user_phone = $request->user_phone;
            $user->user_address = $request->user_address;
            $user->user_role = $request->user_role;
            $user->save();
        }


        return redirect('/');
    }
}
