<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("registro");
    }
    public function registrar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Crear un nuevo usuario en la tabla users
        $usuario = User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => bcrypt($request->password), // cifrar la contraseña
        ]);

        return redirect()->route('login')->with(
            'success',
            'Usuario registrado correctamente. Por favor, inicia sesión.'
        );
    }
}
