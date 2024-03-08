<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FavoritosModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function showProfile(Request $request)
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            // Obtener los cursos favoritos del usuario
            $favoritos = FavoritosModel::where('user_id', $userId)
                ->join('courses', 'favoritos_models.curso_id', '=', 'courses.id')
                ->select('courses.*')
                ->get();

            // Pasar los cursos favoritos a la vista
            return view('profile', ['favoritos' => $favoritos]);
        }else {
            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Debes iniciar sesión para ver un curso a favoritos.'
                );
        }
    }
}
