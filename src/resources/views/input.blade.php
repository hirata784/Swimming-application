<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{  asset('css/input.css')}}">
    <title>入力画面</title>
</head>

<body>
    <header>
        <div class="header_inner">
            <a href="/" class="header_logo">●×スイミングスクール</a>
        </div>
    </header>

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
                    <?php
                    // 連想配列にデータを入れる
                    $gender_items = array(
                        'man' => '男性',
                        'woman' => '女性'
                    )
                    ?>
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
                    <?php
                    // 連想配列にデータを入れる
                    $week_items = array(
                        'sunday' => '日曜日',
                        'monday' => '月曜日',
                        'tuesday' => '火曜日',
                        'wednesday' => '水曜日',
                        'Thursday' => '木曜日',
                        'friday' => '金曜日',
                        'Saturday' => '土曜日'
                    )
                    ?>
                    @foreach($week_items as $itemKey => $itemValue)
                    <div>
                        <input type="checkbox" name="week[]" id="{{ $itemKey }}" value="{{ $itemValue }}"
                            @if(is_array(old("week")) && in_array($itemValue, old("week"))) checked @endif>
                        <label for="{{ $itemKey }}">{{ $itemValue }}</label>
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
                    <?php
                    // 連想配列にデータを入れる
                    $course_items = array(
                        'choose' => '',
                        'Beginner' => '初級コース',
                        'Intermediate' => '中級コース',
                        'advanced' => '上級コース'
                    )
                    ?>
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
</body>

</html>