<?php
namespace App\Http\Controllers;

use App\Buy;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\AbstractList;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profilView( $id)
    {

        $id= auth()->id();
        $user=User::where('id',$id)->get();
        $user = $user->first();

            return view('profile.profil',compact('user'));
    }

    public function mysale($id)
    {
        $id = auth()->id();
        $buys = Buy::where('created_by','=',$id)->where('deleted_at','=',null)->where('is_approve','=','1')->get();

        return view('profile.mysalls',compact('buys'));
    }
}
