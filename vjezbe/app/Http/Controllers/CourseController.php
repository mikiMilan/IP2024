<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all('id', 'naziv');
        return view('course', ['naziv' => "Predmeti", 'predmeti'=>$courses]);
    }

    public function show(string $podatak){
        $course = Course::where('id', $podatak)->get();
        ddd($course);
        return $course;
    }
}
