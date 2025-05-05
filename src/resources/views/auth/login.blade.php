<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coachtechフリマ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
</head>

<body>
    <div class="all-contents">
        <div class="header-contents">
            <img src="storage/logo.svg" alt="COACHTECHロゴ">
            <h1>COACHTECH</h1>
        </div>
        <div class="main-contents">
            <h1>ログイン</h1>
            <form class="form" action="/login" method="post">
                @csrf
                <label class="label">メールアドレス</label>
                <input type="email" name="email" class="login_contents" value="{{ old('email') }}" />
                <label class="label">パスワード</label>
                <input type="password" name="password" class="login_contents" />
                <button type="submit" class="button-login">ログインする</button>
            </form>
            <a href="/register">会員登録はこちら</a>
        </div>    
    </div>
</body>