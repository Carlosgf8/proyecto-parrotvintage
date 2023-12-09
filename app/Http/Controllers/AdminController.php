<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Mostrar el formulario de login del administrador
    public function showLoginForm()
    {
        return view('admin.login');
    }

    //Inicio de sesion con las credenciales de administrador
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

       
        if ($email === 'Admin' && $password === 'Admin') {
            
            return redirect()->route('admin.dashboard');
        }

        
        return redirect()->route('admin.login.form')->with('error', 'Credenciales incorrectas para el administrador.');
    }
}