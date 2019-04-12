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
    {
        return view('booking');
    }
	public function addorder(Request $data)
    {$data = $data->toArray();
            print_r($data);die;
        return view('booking');
    }
}
