<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request);

        // Para acceder a los datos del formulario uno especifico
        dd($request->get('username'));
    }
}
