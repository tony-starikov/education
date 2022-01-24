<?php

namespace App\Http\Controllers\User;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return  view('user.courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::where('id', $id)->first();
        return  view('user.courses.show', compact('course'));
    }
}
