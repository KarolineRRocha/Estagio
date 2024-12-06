<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.index');
    }

    public function someProtectedAction()
    {
        if (session('login_method') === 'google') {
            $googleToken = session('google_token');
            // Realizar lógica para quem fez login pelo Google, como usar o token em APIs.
            return view('dashboard.google', compact('googleToken'));
        } elseif (session('login_method') === 'form') {
            // Realizar lógica para quem fez login pelo formulário.
            return view('dashboard.form');
        } else {
            return redirect()->route('login')->with('error', 'Acesso negado.');
        }
    }

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
