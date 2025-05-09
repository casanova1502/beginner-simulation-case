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
            <h1>商品詳細画面</h1>
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
        <div class="left-content">
            <img src="{{ asset( $item->item_photo) }}" alt="商品画像" class="img-content" />
        <div class="right-content">
            <h1>{{ $item->name }}</h1>
            <p>{{ $item->brand_name }}</p>
            <h2>{{ $item->price }}</h2>
            <p>like mark</p>
            <a href="/purchase/{{ $item->id }}">購入手続きへ</a>
            <h2>商品説明</h2>
            <p>{{ $item->description }}</p>
            <h2>商品の情報</h2>
                <h3>カテゴリー</h3>
                    <p>{{ $item->category_id }}</p>
                <h3>商品の状態</h3>
                    <p>{{ $item->condition_id }}</p>
            <form action="/item/{{ $item->id }}" method="post">
            @csrf    
                <h2>コメント</h2>
                @foreach ($comments as $comment)
                <img src="" alt="ユーザーフォト" class="image-user" />
                <li>
                @if($comment->user)
                    {{ $comment->user->name }}: {{ $comment->description }}
                @else
                    匿名ユーザー: {{ $comment->description }}
                @endif
                </li>
                @endforeach
                <h3>商品へのコメントは作成中</h3>
                <textarea name="description" required></textarea>
                <button type="submit" class="right-content-comment">コメントを送信する</button>
            </form>  
        </div>
    </div>
</body>