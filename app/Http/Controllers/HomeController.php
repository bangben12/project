<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\history;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function history()
    {
        $history = history::all();
        return view('history.index', compact('history'));
    }
    public function print()
    {
        $history = history::all();
        $pdf=PDF::loadview('history.print',['history'=>$history]);
        return $pdf->download('history.pdf');
    }
}
