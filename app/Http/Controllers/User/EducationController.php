<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return view('user.courses');
    }

    public function myCourses()
    {
        return view('user.my-courses');
    }
}
