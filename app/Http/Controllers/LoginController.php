<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request){
        /*use a dd() to show email and password of request*/
    

        $credentials= $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        $credentials=$request->only('email', 'password');
        //dd($credentials);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if (auth()->user()->hasRole("Admin")) {
                return redirect()->intended('CuentaAdmin');
            } elseif (auth()->user()->hasRole("Empleado")) {
                return redirect()->intended('CuentaEmpleado');

            } elseif (auth()->user()->hasRole("Cliente")) {
                return redirect()->intended('CuentaCliente');   } 
            else{
                echo("error");
                // return redirect()->intended('CuentaCliente');
            }

        }

        return back()->withErrors([
            'email' => 'Las credenciales ingresadas son incorrectas.',
        ])->onlyInput('email');

    }

    public function logout()
    {
        Auth::logout(); // Cerrar la sesión del usuario
        return redirect()->route('index'); // Redirigir a la página principal después de cerrar sesión
    }

}
