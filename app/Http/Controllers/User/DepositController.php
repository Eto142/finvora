<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DepositController extends Controller
{
    /**
     * Display the user deposit page.
     */
    public function index()
    {
        return view('user.deposit');
    }
}
