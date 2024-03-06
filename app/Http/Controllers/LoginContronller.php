<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginContronller extends Controller
{
    public function login(Request $request)
    {
     // Validación de datos de entrada
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Intenta autenticar al usuario
    $credentials = $request->only('email', 'password');
    $remember = $request->has('remember');
  
    if (Auth::attempt($credentials, $remember)) {
        // Autenticación exitosa, redirigir al usuario a la ruta deseada
        return redirect('privada');
    } else {
        // Autenticación fallida, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
       // return redirect()->back()->withInput()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros.']);
        return redirect('/');
    }
    }

    public function registro(Request $request)
    {
         //Validar los datos del formulario
          $request->validate([
              'nombre' => 'required|string|max:255',
              'email' => 'required|email|unique:users,email',
               'password' => 'required|string|min:8',
          ]);

        // Crear un nuevo usuario en la tabla users
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);

        $usuario->save();

        Auth::login($usuario);

        return redirect(route('login'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}