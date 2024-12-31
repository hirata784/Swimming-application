<?php

namespace App\Http\Controllers;

use App\Http\Requests\SwimmingRequest as RequestsSwimmingRequest;
use Illuminate\Http\Requests\SwimmingRequest;

class SwimmingController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function confirm(RequestsSwimmingRequest $request)
    {
        $entry = $request->only(['name', 'age', 'gender', 'tel', 'week', 'course', 'comment']);
        return view('confirm', compact('entry'));
    }

    public function completion()
    {
        return view('completion');
    }
}
