<?php

namespace App\Http\Controllers;

use App\buy;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class BuyController extends Controller
{
    
    public function buyView()
    {
        return view('utilisateurs.buy');
    }

    public function buy(Request $request)
    {


        $buy = $request->user()->buy()->create([
            'vol' => $request->get('vol'),
            'date' => $request->get('date'),
            'arrival' => $request->get('arrival'),
            'depart' => $request->get('depart'),
            'arrived' => $request->get('arrived'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            'kg' => $request->get('kg'),
            'note' => $request->get('note'),
        ]);
        $buy = $request->user()->buy()->get();
        $to_name = 'Luggage Rental';
        $to_mail = $buy->first()->user[0]->email;
        $username = $buy->first()->user[0]->name;
        $body = [];
        $mailData = array('body'=>$body,'username'=>$username);
        Mail::send('email.sale-waiting',$mailData,function ($message) use($to_name,$to_mail){
            $message->to($to_mail,$to_name)->subject('Notification');
            $message->from(env('MAIL_USERNAME'),'Luggage Rental');
        });

        $to_name = 'Luggage Rental';
        $to_mail = env('MAIL_USERNAME');
        $username = 'Admin';
        $body = [];
        $mailData = array('body'=>$body,'username'=>$username);
        Mail::send('email.waiting-mail',$mailData,function ($message) use($to_name,$to_mail){
            $message->to($to_mail,$to_name)->subject('Approval Notification');
            $message->from(env('MAIL_USERNAME'),'Luggage Rental');
        });


        return view('utilisateurs.successful-page');
    }
    public function details($id)
    {
       $buys=Buy::where('created_by',$id)->first();
        $user=User::where('id',$id)->first();
        return view('utilisateurs.detail',compact(['user','buys']));
    }

    public function Waiting()
    {
        $buys = Buy::with('user')->where('is_approve','=',9)->orderBy('created_at','desc')->get();
        return view('users.waiting',compact('buys'));
    }
    public function adminUpdate(Request $request, $id)
    {
       $buys = Buy::with(['user'])->where('id',$id);


       Buy::where('id',$id)->update([

            'is_approve'=>$request->get('is_approve'),
            'approved_date'=>Carbon::now(),
            ]);
        $to_name = 'Luggage Rental';
        $to_mail = $buys->first()->user[0]->email;
        $username = $buys->first()->user[0]->name;
        $body = [];
        $mailData = array('body'=>$body,'username'=>$username);
        Mail::send('email.approve-email',$mailData,function ($message) use($to_name,$to_mail){
            $message->to($to_mail,$to_name)->subject('Notification');
            $message->from(env('MAIL_USERNAME'),'Luggage Rental');
        });


       return back()->with('success','Your action Successful');
    }

    public function updatebuyView($id)
    {
        $buy = Buy::where('id',$id)->get();
        $buy = $buy->first();
        return view('utilisateurs.update-sale',compact('buy'));

    }


    public function updateBuy(Request $request, $id)
    {

        $buys = Buy::where('id',$id)->update([
            'vol' => $request->get('vol'),
            'date' => $request->get('date'),
            'arrival' => $request->get('arrival'),
            'depart' => $request->get('depart'),
            'arrived' => $request->get('arrived'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            'kg' => $request->get('kg'),
            'note' => $request->get('note'),
            'is_approve' => '9',
            'updated_by'=> auth()->id(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect()->route('home')->with('success','Your action Successful');
    }
    public function deleteBuy($id)
    {

        DB::table('buy')->where('id','=',$id)->update([
            'deleted_by'=> auth()->id(),
            'deleted_at'=>Carbon::now()
        ]);
        return back()->with('danger','Your action Successful');
    }

}
