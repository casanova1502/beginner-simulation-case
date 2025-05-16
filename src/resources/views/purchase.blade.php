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
            <div class="left-content">
                <form action="{{ route('purchase.store', ['id' => $item->id]) }}" method="POST">
                @csrf
                    <img src="{{ asset( $item->item_photo) }}" alt="商品画像" class="img-content" />
                    <h1>商品名</h1>
                        <h2>{{ $item->name }}</h2>
                    <h2>支払い方法</h2>
                        <select name="payway" id="payway-select" >
                        @foreach ($payways as $payway)
                            <option value="{{ $payway->id }}">{{ $payway->name }}</option>
                        @endforeach
                        </select>
                    <h2>配達先</h2>
                    <a href="/purchase/address/{{ $item->id }}">変更する</a>
                    <h3>{{ $user->post_code }}</h3>
                    <h3>{{ $user->address }}{{ $user->building }}</h3>
                <div class="right-content">
                    <table>
                        <tr>
                            <td>商品代金</td>
                            <td>¥{{ $item->price }}</td>
                        </tr>
                        <tr>
                            <td>支払い方法</td>
                            <td id="selected-payway">選択してください</td>
                        </tr>
                    </table>
                    <button type="submit" name="submit" value="">購入する</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    const paywaySelect = document.getElementById('payway-select');
    const selectedPayway = document.getElementById('selected-payway');

    paywaySelect.addEventListener('change', () => {
        const selectedOption = paywaySelect.options[paywaySelect.selectedIndex];
        selectedPayway.textContent = selectedOption.text;
    });
    
    // const targetPaywayselect = document.getElementById('payway-select');
    // const selectedPayway = document.getElementById('selected-payway');
    // targetPaywayselect.addEventListener('change', () => {
    //     const optionPs = targetPaywayselect.options[targetPaywayselect.selectedIndex];
    //     selectedPayway.textContent = targetPaywayselect.text;
    //     // const optionPa = optionPs.getAttribute('name');
    //     // english.textContent = optionEn;
    // });
    
    // function updatePaywayName() {
    //     const selected = document.getElementById('payway-select').value;
    //     document.getElementById('selected-payway').innerText = selected;
    // }
</script>