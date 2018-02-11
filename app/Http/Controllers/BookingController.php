<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {//echo"<pre>";dd($data);exit;
        return view('booking');
    }
	public function addorder(Request $data)
    {echo"<pre>";print_r($data);exit;
        return view('booking');
    }
}
