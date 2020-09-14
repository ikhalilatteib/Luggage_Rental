<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('utilisateurs.login');
    }

    public function login(Request $request)
    {

        $users = User::all();
        $email = $request->get('email');
        $password = $request->get('password');
        //  $hashpassword = Hash::make($password);
        $user = User::where('email',$email)->where('password',$password)->first();

        if (isset($user))
        {
            return view('utilisateurs.successful-page',compact('users'));
        }

    }
}
