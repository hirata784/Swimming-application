<?php

namespace App\Http\Controllers;

use App\Http\Requests\SwimmingRequest;
use App\Models\Swimming;

class SwimmingController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function confirm(SwimmingRequest $request)
    {
        $entry = $request->only(['name', 'age', 'gender', 'tel', 'week', 'course', 'comment']);

        return view('confirm', compact('entry'));
    }

    public function add(SwimmingRequest $request)
    {
        $week = $request->only('week');

        //     dd($week);

        // $i = 0;
        // foreach ($week as $key => $value) {
        //     $i++;
        // $request->merge(['week' . $i => $value]);
        // }

        // week1, week2, week3を追加
        $request->merge(['week1' => '日曜日']);
        $request->merge(['week2' => '月曜日']);
        $request->merge(['week3' => '火曜日']);

        $swim = $request->only(['name', 'age', 'gender', 'tel', 'week1', 'week2', 'week3', 'course', 'comment']);
        Swimming::create($swim);

        return view('completion');
    }
}
