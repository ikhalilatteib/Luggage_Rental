<?php

namespace App\Http\Controllers;

use App\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $buy = DB::table('buy')->orderBy('created_date');
        $buy = $buy->reorder('created_date', 'desc')->get();
        return view('home',compact('buy'));
    }
}
