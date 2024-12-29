<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{  asset('css/confirm.css')}}">
    <title>確認画面</title>
</head>

<body>
    <header>
        <div class="header_inner">
            <a href="/" class="header_logo">●×スイミングスクール</a>
        </div>
    </header>

    <h2>以下の内容で申し込みます。</h2>
    <form action="">
        @csrf
        <div class="confirm_inner">
            <div class="name">
                <p>名前</p>
                <div>サンプル太郎</div>
            </div>

            <div class="age">
                <p>年齢</p>
                <div>20</div>
            </div>

            <div class="genders">
                <p>性別</p>
                <div>男性</div>
            </div>

            <div class="tel">
                <p>電話番号</p>
                <div>0001112345</div>
            </div>

            <div class="weeks">
                <p>参加曜日</p>
                <div>月,水,金</div>
            </div>

            <div class="courses">
                <p>コース</p>
                <div>中級コース</div>
            </div>

            <div class="comment">
                <p>コメント</p>
                <div>よろしくお願いします。</div>
            </div>

            <div>
                <button class="form_button" type="submit">申し込む</button>
            </div>
        </div>
    </form>
    </div>

</body>

</html>