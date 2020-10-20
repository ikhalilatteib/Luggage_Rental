<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Buy;
use App\Helpers\UploadPaths;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    /* Add Admin */

    public function CreateView()
    {
        return view('users.admin-create');
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $password = $request->get('password');

        $name = $request->get('name');
        $last_name = $request->get('last_name');
        $brith = $request->get('brith');
        $country = $request->get('country');
        $city = $request->get('city');
        $adress = $request->get('adress');
        $tel = $request->get('tel');
        $email = $request->get('email');
        $password = Hash::make($password);
        $filePhotoUrl = $request->file('photo');
        if (isset($filePhotoUrl)) {
            $adminPhotoName = uniqid('admin_') . '.' . $filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('admin_photos'), $adminPhotoName);
        }
        Admin::create([
            'name' => $name,
            'last_name' => $last_name,
            'brith' => $brith,
            'country' => $country,
            'city' => $city,
            'adress' => $adress,
            'tel' => $tel,
            'email' => $email,
            'password' => $password,
            'photo' => $adminPhotoName,
        ]);
        return view('utilisateurs.successful-page');
    }
    /* End Add Admin


    /* Admin Panel */
    public function Dashbord()
    {
        return view('users.dashbord');
    }
    /* End Admin Panel*/

    /* Admin Users List*/
    public function adminlist()
    {
        $a = 1;
        $users = User::where('deleted_at','=',null)->get();
        return view('users.adminlist',compact('users'));
    }
    /* End Admin Users List*/

    /* Admin Add Users */
    public function adminadd()
    {
        return view('users.adminadd');
    }
    /* End Admin Add Users */

    /* Admin Now sale */
    public function now()
    {
        $admin= Admin::find(1);
        $buys = Buy::where('deleted_at','=',null)->orderBy('created_at','desc')->get();
        return view('users.now-sale',compact('buys'));
    }

    public function approveSales()
    {

        $buys = Buy::with(['user'])->where('is_approve','=',1)->where('deleted_at','=',null)->orderBy('created_at','desc')->get();
        return view('users.approve',compact('buys'));
    }

    public function Unapprove()
    {

        $buys = Buy::with('user')->where('is_approve','=',0)->where('deleted_at','=',null)->orderBy('created_at','desc')->get();
        return view('users.non-approve',compact('buys'));
    }

    public function DeleteSale()
    {
        $buys = Buy::with('user')->where('deleted_at','!=',null)->orderBy('created_at','desc')->get();
        return view('users.delete-buy',compact('buys'));
    }

    public function deletedAcount()
    {
        $users = DB::table('users')->where('deleted_at','!=',null)->get();
        return view('users.deleted-account',compact('users'));
    }

}
