<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    public function buyView()
    {
        return view('utilisateurs.buy');
    }

    public function buy(Request $request)
    {
        $dtat=$request->all();
        DB::table('buy')->insert([
            'vol'=>$request->get('vol'),
            'date'=>$request->get('date'),
            'depart'=>$request->get('depart'),
            'arrived'=>$request->get('arrived'),
            'from'=>$request->get('from'),
            'to'=>$request->get('to'),
            'note'=>$request->get('note')
        ]);
        return view('utilisateurs.successful-page');
    }
}
