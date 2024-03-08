<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\FavoritosModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function findCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('courses', compact('course'));
    }

    public function createFavouriteCourse(Request $request)
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Obtener el ID del usuario autenticado
            $userId = Auth::id();

            // Obtener el ID del curso desde la solicitud
            $courseId = $request->id;

            $courseExist = DB::table('favoritos_models')
                ->select('id', 'curso_id', 'user_id')
                ->where('user_id', $userId)
                ->where('curso_id', $courseId)
                ->first();
            if ($courseExist) {
                return redirect()
                    ->back()
                    ->with('error', 'Ya esta en tus favoritos');
            } else {
                // Insertar el nuevo registro en la tabla favoritos_models
                DB::table('favoritos_models')->insert([
                    'user_id' => $userId,
                    'curso_id' => $courseId,
                ]); 

                // Redireccionar de vuelta a la página anterior
                return redirect()->back()->with('success-favorite','Has añadido este curso a favoritos');
            }
        }else{
            return redirect()->back()->with('error-login','You must be loged to add favorites');
        }
    }

    public function deleteFavouriteCourse($id)
    {
        $course = Course::findOrFail($id);

        if (Auth::check()) {
            $userId = Auth::user()->id;
            $courseId = $course->id;

            // Buscar la entrada en la tabla de favoritos
            $favorito = FavoritosModel::where('user_id', $userId)
                ->where('curso_id', $courseId)
                ->first();

            // Verificar si se encontró el favorito
            if ($favorito) {
                // Eliminar la entrada de la tabla de favoritos
                $favorito->delete();
                return redirect()
                    ->back()
                    ->with(
                        'success-delete',
                        'Curso eliminado de la lista de favoritos.'
                    );
            }
        }
    }
}
