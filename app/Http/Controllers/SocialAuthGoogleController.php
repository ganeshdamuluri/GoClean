<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Auth;
use Exception;
use App\Models\Roles;

class SocialAuthGoogleController extends Controller {

    public function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user(); 
            $existUser = User::where('email', $googleUser->email)->first();
            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $role = Roles::select('id')->where('name','user')->first();
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = bcrypt(rand(1, 10000));
                $user->role_id = $role->id;
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        } catch (Exception $e) {
            return 'error';
        }
    }

}
