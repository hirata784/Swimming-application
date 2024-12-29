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
                <div class="name">
                    <p>名前を入力して下さい。<span>必須</span></p>
                    <input type="text" name="" id="">
                </div>

                <div class="age">
                    <p>年齢を入力して下さい。<span>必須</span></p>
                    <input type="text" name="" id="">
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
                        <input type="radio" name="gender" id="{{ $itemKey }}" value="{{ $itemKey }}">
                        <label for="{{ $itemKey }}">{{ $itemValue }}</label>
                    </div>
                    @endforeach
                </div>

                <div class="tel">
                    <p>電話番号を入力して下さい。<span>必須</span></p>
                    <input type="text" name="" id="">
                </div>

                <div class="weeks">
                    <p>参加希望の曜日を選択して下さい。(最大３つ)<span>必須</span></p>
                    <?php
                    // 連想配列にデータを入れる
                    $week_items = array(
                        'sunday' => '日',
                        'monday' => '月',
                        'tuesday' => '火',
                        'wednesday' => '水',
                        'Thursday' => '木',
                        'friday' => '金',
                        'Saturday' => '土'
                    )
                    ?>
                    @foreach($week_items as $itemKey => $itemValue)
                    <div>
                        <input type="checkbox" name="week" id="{{ $itemKey }}" value="{{ $itemKey }}">
                        <label for="{{ $itemKey }}">{{ $itemValue }}</label>
                    </div>
                    @endforeach
                </div>

                <div class="courses">
                    <p>コースを選択して下さい。<span>必須</span></p>
                    <?php
                    // 連想配列にデータを入れる
                    $course_items = array(
                        'choose' => '選択して下さい',
                        'Beginner' => '初級コース',
                        'Intermediate' => '中級コース',
                        'advanced' => '上級コース'
                    )
                    ?>
                    <select name="course">
                        @foreach($course_items as $itemKey => $itemValue)
                        <option value="{{ $itemKey }}">{{ $itemValue }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="comment">
                    <p>その他コメントがあればを入力して下さい。</p>
                    <textarea type="textarea" rows="5" cols="65"></textarea>
                </div>

            </div>
        </div>
        <div>
            <button class="form_button" type="submit">送信</button>
        </div>
    </form>


</body>

</html>