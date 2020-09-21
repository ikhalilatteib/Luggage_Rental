<?php

namespace App\Http\Controllers;

use App\buy;
use App\User;
use Illuminate\Http\Request;


class BuyController extends Controller
{
    public function buyView()
    {
        return view('utilisateurs.buy');
    }

    public function buy(Request $request)
    {
            $vol= $request->get('vol');
            $date= $request->get('date');
            $depart = $request->get('depart');
            $arrived= $request->get('arrived');
            $from = $request->get('from');
            $to = $request->get('to');
            $note = $request->get('note');
            $user = User::find(1);

          Buy::create([
                        'vol'=>$vol,
                        'date'=>$date,
                        'depart'=>$depart,
                        'arrived'=>$arrived,
                        'from'=>$from,
                        'to'=>$to,
                        'note'=>$note,
                        'is_approve' => false,
                        'created_by' => $user->id,
                        'updated_by' => $user->id
          ]);
        return view('utilisateurs.successful-page');
    }
}
