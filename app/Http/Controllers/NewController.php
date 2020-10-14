<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Buy;
use App\Contact;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewController extends Controller
{

    public function fixepage()
    {
        return view('layouts.fixe-page');
    }
    public function adminlayouts(Request $request)
    {
        $admin= Admin::find(1);

        return view('layouts.admin-layout',compact('admin'));
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
        $user = User::where('id',$id)->get();
        $user = $user->first();
        return view('utilisateurs.updateview',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $password = $request->get('password');

        if($password == null)
        {
            User::where('id',$id)->update([
                'name'=>$request->get('name'),
                'last_name'=>$request->get('last_name'),
                'email'=>$request->get('email'),
                'updated_at'=>Carbon::now(),
            ]);
            return redirect('/')->with('success','Your action is successful');
        }
        else {
            User::where('id', $id)->update([
                'name' => $request->get('name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'password' => Hash::make($password),
                'updated_at' => Carbon::now(),
            ]);
            return redirect('/')->with('success','Your action is successful');
        }
    }

    public function delete($id)
    {
        DB::table('users')->where('id','=',$id)->update([
            'deleted_at'=>Carbon::now(),
        ]);
        DB::table('buy')->where('created_by','=',$id)->update([
            'deleted_by'=> auth()->id(),
            'deleted_at'=>Carbon::now()
        ]);
        return redirect('/')->with('danger','Your account has been deleted successfully');
    }

    public function homepage(Request $request)
    {
        $buy = DB::table('buy')->orderBy('created_at');
        $buy = $buy->reorder('created_at', 'desc')->get();
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

    public function userOnlineStatus()
    {
        $users= User::all();
        if(Auth::check()){
            return view('users.online',compact('users'));
        }
    }

    public function contactUs(Request $request)
    {
        Contact::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'text'=>$request->get('text'),
        ]);
        return back()->with('success','Your Message is Successful');
    }



}
