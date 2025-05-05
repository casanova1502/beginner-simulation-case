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
            @if (Auth::check())
            <input type="text" name="keyword" class="keyword" placeholder="なにをお探しですか？">
            <form action="/logout" method="POST" class="logout">
                @csrf
                <button class="header-nav__button">ログアウト</button>
            </form>
            <a href="/mypage">マイページ</a>
            <button type="submit" class="submit-button">出品</button>
            @endif
        </div>
        <div class="main-contents">
            <a href="/">おすすめ</a>
            <a href="/?tab=mylist">マイリスト</a>
            <div class="product-contents">
                @foreach ($items as $item)
                <div class="item-content">
                    <div class="detail-content">
                        <a href="/item/{{ $item->id }}" class="item-link">
                            <img src="{{ asset( $item->item_photo) }}" alt="商品画像" class="img-content" />    
                            <p>{{$item->name}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>    
        </div>
</body>
