<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCoursesController extends Controller
{
    public function my_courses() {
        return view('my-courses');
    }
}
