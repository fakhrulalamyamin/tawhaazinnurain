<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function profile() {
        return view('my-profile');
    }
}
