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
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

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
            'photo' => $filePhotoUrl,
        ]);
        return view('utilisateurs.successful-page');
    }
    /* End Add Admin


    /* Admin Panel */
    public function admin(Request $request)
    {
        $admins = Admin::find(3);
        return view('users.admin-panel',compact('admins'));
    }
    /* End Admin Panel*/

    /* Admin Users List*/
    public function adminlist()
    {
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
        $buy = DB::table('buy')->orderBy('created_date');
        $buy = $buy->reorder('created_date', 'desc')->get();
        $buy = Buy::with('user')->get();
        return view('users.now-sale',compact('buy'));
    }

    public function approveSales()
    {
        $buy = DB::table('buy')->orderBy('created_date');
        $buy = $buy->reorder('created_date', 'desc')->get();
        $buy = Buy::with('user')->where('is_approve','=',1)->get();
        return view('users.approve',compact('buy'));
    }

    public function Unapprove()
    {
        $buy = DB::table('buy')->orderBy('created_date');
        $buy = $buy->reorder('created_date', 'desc')->get();
        $buy = Buy::with('user')->where('is_approve','=',0)->get();
        return view('users.approve',compact('buy'));
    }

}
