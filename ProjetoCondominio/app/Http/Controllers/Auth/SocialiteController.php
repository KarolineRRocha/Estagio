<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /*
    Function: googleLogin
    Description: This function will redirect to Google
    @param NA
    @return void
    */
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    /*
    Function: googleAuthentication
    Description: This function will authenticate the user through the Google Account
    @param NA
    @return void
     */
    public function googleAuthentication()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {
                Auth::login($user);
                return redirect()->route('home');
            } else {
                $userData = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('Password@1234'),
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar
                ]);

                if ($userData) {
                    Auth::login($userData);
                    return redirect()->route('home');
                }
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
