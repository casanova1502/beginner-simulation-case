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
            <h1>商品購入画面</h1>
            @if (Auth::check())
            <form action="/item/search" method="POST">
            @csrf
                <input type="text" name="keyword" class="keyword" placeholder="なにをお探しですか？">
            </form>
            <a href="/login">ログアウト</a>
            <a href="/mypage">マイページ</a>
            <button type="submit" class="submit-button">出品</button>
            @endif
        </div>
            <div class="main-content">
                <h1>商品の変更</h1>
                    <label class="label">郵便番号</label>
                        <input type="text" name="post_code"  value="" />
                    <label class="label">住所</label>
                        <input type="text" name="address"  value="" />
                    <label class="label">建物名</label>
                        <input type="text" name="building"  value="" />
                <button  type="submit" class="button-update">更新する</button>
            </div>
        </div>
    </div>
</body>