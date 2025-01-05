@extends('layouts.app')

@section('css_title')
<link rel="stylesheet" href="{{  asset('css/input.css')}}">
<title>入力画面</title>
@endsection

@section('content')
<h2>入力画面</h2>

<form action="/confirm" method="post">
    @csrf
    <!-- 入力内容 -->
    <div class="Registration">
        <div class="Registration_inner">
            <div class="names">
                <p>名前を入力して下さい。<span>必須</span></p>
                <input type="text" name="name" value="{{ old('name') }}">
                <div class="form_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="ages">
                <p>年齢を入力して下さい。<span>必須</span></p>
                <input type="text" name="age" value="{{ old('age') }}">
                <div class="form_error">
                    @error('age')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="genders">
                <p>性別を選択して下さい。<span>必須</span></p>
                @foreach($gender_items as $itemKey => $itemValue)
                <div>
                    <input type="radio" name="gender" id="{{ $itemKey }}" value="{{ $itemValue }}" {{(old("gender") == $itemValue) ? 'checked' :""}}>
                    <label for="{{ $itemKey }}">{{ $itemValue }}</label>
                </div>
                @endforeach
                <div class="form_error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="tels">
                <p>電話番号を入力して下さい。<span>必須</span></p>
                <input type="tel" name="tel" value="{{ old('tel') }}">
                <div class="form_error">
                    @error('tel')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="weeks">
                <p>参加希望日を選択して下さい。(最大３つ)<span>必須</span></p>
                @foreach($week_items as $itemKey => $itemValue)
                <div>
                    <input type="checkbox" name="week[]" id="{{ $itemKey }}" value="{{ $itemValue }}"
                        @if(is_array(old('week')) && in_array($itemValue, old('week'))) checked @endif> <label for="{{ $itemKey }}">{{ $itemValue }}</label>
                </div>
                @endforeach
                <div class="form_error">
                    @error('week')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="courses">
                <p>コースを選択して下さい。<span>必須</span></p>
                <select name="course">
                    @foreach($course_items as $itemKey => $itemValue)
                    <option value="{{ $itemValue }}" @if($itemValue==old("course")) selected @endif>{{ $itemValue }}</option>
                    @endforeach
                </select>
                <div class="form_error">
                    @error('course')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="comments">
                <p>その他コメントがあればを入力して下さい。</p>
                <textarea type="textarea" name="comment" rows="5" cols="65">{{ old('comment') }}</textarea>
            </div>

        </div>
    </div>
    <div>
        <button class="form_button" type="submit">送信</button>
    </div>
</form>
@endsection