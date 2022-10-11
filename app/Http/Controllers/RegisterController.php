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
        // dd($request->get('username'));

        // Validaciones
        $this->validate($request, [
            'name' => 'required | min:3 | max:30',
            'username' => 'required | unique:users | min:3 | max:20',
            'email' => 'required | unique:users | email | max:60',
            'password' => 'required | min:8 | max:20',
            'password_confirmation' => 'required | same:password'
        ]);
    }
}
