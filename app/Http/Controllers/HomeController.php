<?php

namespace App\Http\Controllers;

use App\Buy;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $buys = Buy::where('deleted_at', '=', null)->where('is_approve', '=', '1')->orderBy('created_at', 'DESC')->get();
        return view('home', compact('buys'));
    }
}
