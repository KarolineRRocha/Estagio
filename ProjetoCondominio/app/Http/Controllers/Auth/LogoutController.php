<?php

namespace App\Http\Controllers\Auth;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    /**
     * Handle the user logout.
     *
     * @return RedirectResponse
     */
    /*     public function logout()
    {
        // Realiza o logout
        Auth::logout();

        // Redireciona o usuário para a página inicial ou outra página após o logout
        return redirect()->route('login')->with('success', 'Você foi desconectado com sucesso!');
    } */

    public function logout(Request $request): RedirectResponse
    {
        try {
            // Recuperar o token salvo
            $googleAccessToken = session('google_access_token');

            if ($googleAccessToken) {
                // Revogar o token usando a API do Google
                $response = Http::asForm()->post('https://oauth2.googleapis.com/revoke', [
                    'token' => $googleAccessToken,
                ]);

                if ($response->ok()) {
                    // Token revogado com sucesso
                    session()->forget('google_access_token');
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
