<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profilView( $id)
    {
        $user=User::where('id',$id)->get();
        $user = $user->first();

            return view('profile.profil',compact('user'));
    }
}
