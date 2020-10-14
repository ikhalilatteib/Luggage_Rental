<?php

namespace App\Http\Controllers;

use App\Message;
use App\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function Chatview($id)
    {
//        $ip = auth()->id();
////         $chats = DB::table('messages')->where('receiver','=',$id)->get();
////        dd($chats);
//        if (Message::where('sender','=',$ip) && Message::where('receiver','=',$id))
//        {
//
//            $chats = Message::all();
//            //where('deleted_at','=',null)->get();
//            return view('chat.chat-users',compact('chats'));
//        }
//        return 'htat';

    }

    public function Chat(Request $request, $id)
    {
//        $buy = Buy::where('id',$id)->get();
//
//       Message::create([
//            'content'=>$request->get('content'),
//            'sender'=>auth()->id(),
//            'receiver'=>$buy->first()->created_by,
//            'buy_id'=>$buy->first()->id,
//
//        ]);
//        $id = auth()->id();
//        $chats = Buy::where('sender','=',$id)->where('deleted_at','=',null)->get();
//        return view('chat.chat-users',compact('chats'));
    }
}
