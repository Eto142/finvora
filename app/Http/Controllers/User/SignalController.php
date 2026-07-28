<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignalController extends Controller
{
    //
         public function signals() {
        return view('user.signals');
    }

     public function signalplans() {
        return view('user.signal-plans');
    }

    public function mysubscriptions() {
        return view('user.my-subscriptions');
    }
}
