<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestorPages extends Controller
{
    public function index()
    {
        return view('frontend.investor.index', [
            'pageTitle' => 'Investor',
            'pageDescription' => 'Investor',
            'pageScript' => 'investor',

        ]);
    }
}
