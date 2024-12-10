<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Hash;

class SocialiteController extends Controller
{
    public function authProviderRedirect($provider)
    {
        /* dd($provider); */
        if ($provider) {
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
    }

    public function socialAuthentication($provider)
    {
        try {
            if ($provider) {
                $socialUser = Socialite::driver($provider)->user();

                /* dd($socialUser); */
                // Salvar o token na sessão ou no banco
                session([
                    'access_token' => $socialUser->token,
                    'auth_provider' => $provider,
                ]);

                $user = User::where('auth_provider_id', $socialUser->id)->first();

                if ($user) {
                    Auth::login($user);
                } else {
                    $user = User::updateOrCreate([
                        'auth_provider' => $provider,
                        'auth_provider_id' => $socialUser->id,
                    ], [
                        'name' => $socialUser->name,
                        'email' => $socialUser->email,
                        'avatar' => $socialUser->avatar,
                        'password' => Hash::make('defaultpassword'),
                    ]);
                    Auth::login($user);
                }
                return redirect()->route('dashboard');
            }
            abort(404);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
