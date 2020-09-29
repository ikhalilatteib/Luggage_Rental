<?php

namespace App\Http\Controllers;

use App\buy;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BuyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function buyView()
    {
        return view('utilisateurs.buy');
    }

    public function buy(Request $request)
    {
        $buy = $request->user()->buy()->create([
            'vol' => $request->get('vol'),
            'date' => $request->get('date'),
            'depart' => $request->get('depart'),
            'arrived' => $request->get('arrived'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            'kg' => $request->get('kg'),
            'note' => $request->get('note'),
        ]);

        return view('utilisateurs.successful-page');
    }
    public function details($id)
    {
        $buys=Buy::where('created_by',$id)->get();
        $buys=$buys->first();
        $user=User::where('id',$id)->get();
        $user = $user->first();
        return view('utilisateurs.detail',compact(['user','buys']));
    }

    public function Waiting()
    {
        $buy = DB::table('buy')->orderBy('created_date');
        $buy = $buy->reorder('created_date', 'desc')->get();
        $buy = DB::table('buy')->where('is_approve','=',9)->get();
        return view('users.waiting',compact('buy'));
    }
    public function adminUpdate(Request $request, $id)
    {
        $buy =Buy::where('id',$id)->update([
            'is_approve'=>$request->get('is_approve'),
            'approved_date'=>Carbon::now(),
            ]);
        return view('users.now-sale');
    }
}
