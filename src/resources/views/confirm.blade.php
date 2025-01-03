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
    <form action="/completion" method="post">
        @csrf
        <div class="confirm_inner">
            <div class="names">
                <p>名前</p>
                <input type="text" class="name" name="name" value="{{ $entry['name'] }}" readonly>
            </div>

            <div class="ages">
                <p>年齢</p>
                <input type="text" class="age" name="age" value="{{ $entry['age'] }}" readonly>
            </div>

            <div class="genders">
                <p>性別</p>
                <input type="text" class="gender" name="gender" value="{{ $entry['gender'] }}" readonly>
            </div>

            <div class="tels">
                <p>電話番号</p>
                <input type="text" class="tel" name="tel" value="{{ $entry['tel'] }}" readonly>
            </div>

            <div class="weeks">
                <p>参加希望日</p>
                @foreach($entry['week'] as $itemKey => $itemValue)
                <div>
                    <input type="text" class="week" name="week[]" value="{{ $itemValue }}" readonly>
                </div>
                @endforeach
            </div>

            <div class="courses">
                <p>コース</p>
                <input type="text" class="course" name="course" value="{{ $entry['course'] }}" readonly>
            </div>

            <div class="comments">
                <p>コメント</p>
                <input type="text" class="comment" name="comment" value="{{ $entry['comment'] }}" readonly>
            </div>

            <div>
                <button class="form_button" type="submit">申し込む</button>
            </div>
        </div>
    </form>
    </div>

</body>

</html>