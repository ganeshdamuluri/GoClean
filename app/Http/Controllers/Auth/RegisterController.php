<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\Roles;
use Auth;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data) {
        $register_user = User::where('email', $data->email)->orWhere('mobile_number', $data->mobile)->first();
        $role = Roles::select('id')->where('name', 'user')->first();
        if (!($register_user)) {
            $user = new User();
            $user->name = $data->first_name . " " . $data->last_name;
            $user->email = $data->email;
            if ($data->password == $data->confirm_password) {
                $user->password = $data->password;
            } else {
                return "password and confirm password should be equal";
            }
            $user->role_id = $role->id;
            $user->mobile_number = $data->mobile;
            $user->save();
            Auth::login($user);
            return redirect()->to('/home');
        } else {
            return "this email or password is already registered";
        }
    }

}
