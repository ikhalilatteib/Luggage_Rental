<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Buy;
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

    public function homepage(Request $request)
    {
        $buy = DB::table('buy')->orderBy('created_date');
        $buy = $buy->reorder('created_date', 'desc')->get();
        return view('users.index', compact('buy'));
    }

    public function mail(){
        return view('email.registre-mail');
    }
    public function getUser()
    {
        $user= User::all();
        return $user;
    }
}
