<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Exibe o formulário de login.
     *
     * @return \Illuminate\View\View
     */

    public function showLoginForm()
    {
        return view('auth.login');  // Retorna a view de login
    }

    /**
     * Processa o login do usuário.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    /*     public function login(Request $request)
    {
        // Valida os dados de login (email e senha)
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            session(['login_method' => 'form']); // Define o método de login como "form"
            return redirect()->intended('home');
        }

        // Se falhar, redireciona de volta para o formulário de login com erro
        throw ValidationException::withMessages([
            'email' => ['As credenciais fornecidas não são válidas.'],
        ]);
    } */

    public function login(Request $request)
    {
        // Valida os dados de login
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Define o método de login na sessão
            session(['login_method' => 'form']);

            // Redireciona para a página inicial com feedback
            return redirect()->intended('home')->with('success', 'Login realizado com sucesso!');
        }

        // Lança exceção com mensagem de erro
        throw ValidationException::withMessages([
            'email' => ['As credenciais fornecidas não são válidas.'],
        ]);
    }

    /**
     * Desfaz a autenticação do usuário (faz o logout).
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    /*     public function logout()
    {
        // Realiza o logout do usuário
        Auth::logout();

        // Redireciona para a página de login ou home
        return redirect()->route('login');
    } */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
