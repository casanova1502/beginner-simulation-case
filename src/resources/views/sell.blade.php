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
                <h1>商品の出品</h1>
                    <label class="label">商品画像</label>
                        <p>商品画像をここに挿入します</p>
                    <h2>商品の詳細</h2>
                    <label class="label">カテゴリー</label>
                        <p>ここにカテゴリーを選択式で選べるように表示します</p>
                    <label class="label">商品の状態</label>
                    <p>商品の状態を選べるようにします</p>
                    <h2>商品名と説明</h2>
                        <label class="label">商品名</label>
                            <input type="text" name="name"  value="" />
                        <label class="label">ブランド名</label>
                            <input type="text" name="brand"  value="" />
                        <label class="label">商品の詳細</label>
                            <input type="text" name="description"  value="" />
                        <label class="label">商品の詳細</label>
                            <input type="text" name="price" value="¥" />
                <button  type="submit" class="button-selling">出品する</button>
            </div>
        </div>
    </div>
</body>