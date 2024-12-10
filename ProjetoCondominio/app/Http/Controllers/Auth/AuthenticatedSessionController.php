<?php

namespace App\Http\Controllers\Auth;

use Exception;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    /*     public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    } */

    public function destroy(Request $request): RedirectResponse
    {
        try {
            // Recuperar o token salvo
            $accessToken = session('access_token');

            if ($accessToken) {
                // Revogar o token usando a API do Google
                $response = Http::asForm()->post('https://oauth2.googleapis.com/revoke', [
                    'token' => $accessToken,
                ]);

                if ($response->ok()) {
                    // Token revogado com sucesso
                    session()->forget('access_token');
                } else {
                    // Log de erro (opcional)
                    Log::error('Erro ao revogar token do Google', ['response' => $response->body()]);
                }
            }

            // Logout padrão do Laravel
            Auth::logout();

            // Invalida a sessão e regenera o token CSRF
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        } catch (Exception $e) {
            // Tratamento de erro
            return redirect()->route('login')->with('error', 'Erro ao realizar logout: ' . $e->getMessage());
        }
    }
}
