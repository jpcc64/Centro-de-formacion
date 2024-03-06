<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function findCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('courses', compact('course'));
    
    }
    
}