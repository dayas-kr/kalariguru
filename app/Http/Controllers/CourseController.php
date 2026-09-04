<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function show(Course $course)
    {
        $skills = $course->skills()->orderBy('order')->get();
        return view('courses.show', compact('course', 'skills'));
    }
}
