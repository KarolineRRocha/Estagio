<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    /**
     * Handle the user logout.
     *
     * @return RedirectResponse
     */
    public function logout()
    {
        // Realiza o logout
        Auth::logout();

        // Redireciona o usuário para a página inicial ou outra página após o logout
        return redirect()->route('login')->with('success', 'Você foi desconectado com sucesso!');
    }
}
