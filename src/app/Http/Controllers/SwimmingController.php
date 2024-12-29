<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwimmingController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function confirm()
    {
        return view('confirm');
    }
}
