<!DOCTYPE html>
<html lang="en">

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

    <h2>登録画面</h2>

    <form action="">
        <!-- 入力内容 -->
        <div class="Registration">
            <div class="Registration_inner">
                <p>名前を入力して下さい。</p>
                <input type="text" name="" id="">

                <p>年齢を入力して下さい。</p>
                <input type="text" name="" id="">

                <p>性別を選択して下さい。</p>
                <div>
                    <input type="radio" name="gender" id="genderChoice1" value="man">
                    <label for="genderChoice1">男性</label>
                    <input type="radio" name="gender" id="genderChoice2" value="woman">
                    <label for="genderChoice2">女性</label>
                </div>


                <p>電話番号を入力して下さい。</p>
                <input type="text" name="" id="">

                <p>参加希望の曜日を選択して下さい。(最大３つ)</p>
                <div>
                    <input type="checkbox" name="week" id="sunday" value="sunday">
                    <label for="sunday">日</label>

                    <input type="checkbox" name="week" id="monday" value="monday">
                    <label for="monday">月</label>

                    <input type="checkbox" name="week" id="tuesday" value="tuesday">
                    <label for="tuesday">火</label>

                    <input type="checkbox" name="week" id="wednesday" value="wednesday">
                    <label for="wednesday">水</label>

                    <input type="checkbox" name="week" id="Thursday" value="Thursday">
                    <label for="Thursday">木</label>

                    <input type="checkbox" name="week" id="friday" value="friday">
                    <label for="friday">金</label>

                    <input type="checkbox" name="week" id="Saturday" value="Saturday">
                    <label for="Saturday">土</label>
                </div>

                <p>コースを選択して下さい。</p>
                <select name="course">
                    <option value="">選択して下さい</option>
                    <option value="Beginner">初級コース</option>
                    <option value="Intermediate">中級コース</option>
                    <option value="advanced">上級コース</option>
                </select>

                <p>その他コメントがあればを入力して下さい。</p>
                <textarea type="textarea" rows="5" cols="33"></textarea>
            </div>
        </div>
        <input type="submit" name="" id="" value="送信">
    </form>


</body>

</html>