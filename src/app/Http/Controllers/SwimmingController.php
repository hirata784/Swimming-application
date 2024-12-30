<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwimmingController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function confirm(Request $request)
    {
        $entry = $request->only(['name', 'age', 'gender', 'tel', 'week', 'course', 'comment']);
        return view('confirm', compact('entry'));
    }

    public function completion()
    {
        return view('completion');
    }
}
