<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usersorder;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function order() {
        return view('booking');
    }

    public function addorder(Request $data) {
        $data = $data->toArray();
//             try {
//                $validator = Validator::make($data, [
//                    'mobile_number' => 'required',
//                    'email'         => 'required',
//                    'address'      => 'required',
//                    'vehicle_make' => 'required',
//                    'vehicle_model' => 'required',
//                    'booking_date' => 'required',	
//                ]);
//                if ($validator->fails()) {
//                        $errors = $validator->errors()->all();                    
//                }
        $user = User::select()
                        ->where('email', '=', $data['booking-form-email'])->get()->toArray();
        
        $query = DB::table('users_order')->insert([
                    'user_id' => $user[0]['id'],
                    'vehicle_type' => $data['cartype'],
                    'package' => $data['radio-group'],
                    'mobile_number' => $data['booking-form-phone'],
                    'services' => 'demo',
                    'address' => $data['booking-form-address'],
                    'vehicle_make' => $data['booking-form-vehicle-make'],
                    'vehicle_model' => $data['booking-form-vehicle-model'],
                    'booking_date' => $data['booking-form-date'],
                    'vehicle_registration_number' => $data['booking-form-vehicle-registration-number'],
                    'vehicle_color' => $data['booking-form-vehicle-color'],
                    'booking_time' => $data['booking-form-time'],
                    'message' => $data['booking-form-message'],
        ]);
//            } catch (\Exception $e) {
//                $errors = $data;
//            }

        return view('booking');
    }

}
