<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewController extends Controller
{

    public function fixepage()
    {
        return view('layouts.fixe-page');
    }

    public function login()
    {
        return view('utilisateurs.login');
    }

    public function createcompte()
    {
        return view('utilisateurs.create-compte');
    }

    public function create(Request $request)
    {
        $data =$request->all();
        $password = $request->get('password');
        DB::table('users')->insert([
            'name'=>$request->get('name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($password)
        ]);
        return view('utilisateurs.successful-page');
    }

    public function liste()
    {
        $users = User::where('deleted_at','=',null)->get();
        return view('utilisateurs.list',compact('users'));
    }

    public function updateView($id)
    {
        $users = User::where('id',$id)->get();
        $users = $users->first();
        return view('utilisateurs.updateview',compact('users'));
    }
    public function update(Request $request, $id)
    {
        $users = User::where('id',$id)->update([
            'name'=>$request->get('name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'updated_at'=>Carbon::now(),
        ]);
        return view('utilisateurs.successful-page');
    }

    public function delete($id)
    {
        DB::table('users')->where('id','=',$id)->update([
            'deleted_at'=>Carbon::now(),
        ]);
        return view('utilisateurs.successful-page');
    }

    public function admin()
    {
        return view('users.admin-panel');
    }

    public function adminlist()
    {
        $users = User::where('deleted_at','=',null)->get();
        return view('users.adminlist',compact('users'));
    }

    public function adminadd()
    {
       return view('users.adminadd');
    }
}
