<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class IndexController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(10);
        return view('index', ['courses' => $courses]);
    }
    public function search(Request $request){
        $text = trim($request->get('text'));
        $courses = Course::where('name','LIKE','%'.$text.'%')
                        ->orWhere('categoria','LIKE','%'.$text.'%')
                        ->orWhere('tutor','LIKE','%'.$text.'%')
                        ->paginate(10);

        return view('search', compact('courses','text'));
    }
}
