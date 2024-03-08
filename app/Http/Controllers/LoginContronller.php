<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;

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
        }
         throw ValidationException::withMessages([
        'email' => ['Las credenciales proporcionadas no coinciden con nuestros registros.'],
    ]);
    }

    public function registro(Request $request)
    {
        //Validar los datos del formulario
         $request->validate([
            'name' => 'string',
            'email'=> ['required','email',   Rule::unique('users')->ignore(Auth::id())],
            'password'=> ['required','string','min:8','regex:/[0-9]/'],
        ]);
             // Crear un nuevo usuario en la tabla users
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        
        $usuario->save();
        Auth::login($usuario);
        return redirect(route('login'));

        throw ValidationException::withMessages([
        'email' => ['Las credenciales proporcionadas no coinciden con nuestros registros.']
    ]);
   
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
