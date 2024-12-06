<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use App\Http\Controllers\Controller;
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

            // Salvar o token na sessão ou no banco
            session(['google_access_token' => $googleUser->token]);

            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {
                Auth::login($user);
            } else {
                $user = User::updateOrCreate([
                    'google_id' => $googleUser->id,
                ], [
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'avatar' => $googleUser->avatar,
                    'password' => Hash::make('defaultpassword'),
                ]);
                Auth::login($user);
            }

            return redirect()->route('home');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
