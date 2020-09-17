<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profilView()
    {
        $user = User::find(1);
        return view('profile.profil',compact('user'));
    }
}
