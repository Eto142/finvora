<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index()
    {
        return view('user.trade');
    }

    public function markets()
    {
        return view('user.markets');
    }

    public function marketsnews()
    {
        return view('user.market-news');
    }



    public function copyTrading()
    {
        return view('user.copy-trading');
    }

    public function history()
    {
        return view('user.trading-history');
    }
}
