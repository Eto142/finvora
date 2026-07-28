<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KYCController extends Controller
{
    public function index()
    {
        return view('user.kyc');
    }
}
