<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    /**
     * Display the user dashboard.
     */
    public function index()
    {
        return view('user.home');
    }

    public function profile()
    {
        return view('user.profile');
    }

}
