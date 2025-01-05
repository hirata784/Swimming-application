<?php

namespace App\Http\Controllers;

use App\Http\Requests\SwimmingRequest;
use App\Models\Swimming;

class SwimmingController extends Controller
{
    public function index()
    {
        // 連想配列にデータを入れる
        // 性別
        $gender_items = array(
            'man' => '男性',
            'woman' => '女性'
        );

        // 曜日
        $week_items = array(
            'sunday' => '日曜日',
            'monday' => '月曜日',
            'tuesday' => '火曜日',
            'wednesday' => '水曜日',
            'Thursday' => '木曜日',
            'friday' => '金曜日',
            'Saturday' => '土曜日'
        );

        // コース
        $course_items = array(
            'choose' => '',
            'Beginner' => '初級コース',
            'Intermediate' => '中級コース',
            'advanced' => '上級コース'
        );

        return view('input', compact('gender_items', 'week_items', 'course_items'));
    }

    public function confirm(SwimmingRequest $request)
    {
        $entry = $request->only(['name', 'age', 'gender', 'tel', 'week', 'course', 'comment']);

        return view('confirm', compact('entry'));
    }

    public function add(SwimmingRequest $request)
    {
        $week = $request->only('week');

        // 参加希望日の選択数が2以下の時、要素追加(空白)
        if (count($week['week']) <= 2) {
            for ($i = 0; $i <= 3 - count($week['week']); $i++) {
                array_push($week['week'], '');
            }
        }

        // week1, week2, week3を追加
        for ($i = 0; $i <= 2; $i++) {
            $request->merge(['week' . ($i + 1) => $week['week'][$i]]);
        }

        $swim = $request->only(['name', 'age', 'gender', 'tel', 'week1', 'week2', 'week3', 'course', 'comment']);
        Swimming::create($swim);

        return view('completion');
    }
}
