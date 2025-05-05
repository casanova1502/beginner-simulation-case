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
            <h1>プロフィール設定</h1>
            <form class="" action="{{ route('mypage_profile_store') }}" method="post">
            @csrf
                <button>画像を選択する</button>
                <label class="label">ユーザー名</label>
                <input type="text" name="name" class="mypage_profile_contents" value="{{ old('name')}}" />
                <!-- @error('') -->
                    <!-- <span class="input_error">
                        <p class="input_error_message"></p>
                    </span> -->
                <!-- @enderror         -->
                <label class="label">郵便番号</label>
                <input type="text" name="post_code" class="mypage_profile_contents" value="{{ old('post_code') }}" />
                <label class="label">住所</label>
                <input type="text" name="address" class="mypage_profile_contents" value="{{ old('address')}}" />
                <label class="label">建物名</label>
                <input type="text" name="building" class="mypage_profile_contents" />
                <button  type="submit" class="button-register">更新する</button>
            </form>
        </div>    
    </div>
</body>