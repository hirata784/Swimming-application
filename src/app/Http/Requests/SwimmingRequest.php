<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SwimmingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:20'],
            'age' => ['required', 'integer', 'between:10,90'],
            'gender' => ['required'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'week' => ['required', 'max:3'],
            'course' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'name.max' => '名前を20文字以下で入力して下さい。',
            'age.required' => '年齢を入力して下さい。',
            'age.integer' => '年齢を数値で入力して下さい。',
            'age.between' => '年齢を10歳から90歳の間で入力して下さい。',
            'gender.required' => '性別を選択して下さい。',
            'tel.required' => '電話番号を入力して下さい。',
            'tel.integer' => '電話番号を数値で入力して下さい。',
            'tel.digits_between' => '電話番号を10桁から11桁の間で入力して下さい。',
            'week.required' => '参加希望日を選択して下さい。',
            'week.max' => '参加希望日を3つ以下で選択して下さい。',
            'course.required' => 'コースを選択して下さい。',
        ];
    }
}
