<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
<!-- Styles -->
<style>

    table { 
        width: 500px;
        margin-left: 300px;
        margin-top: 10px;
        border: solid 3px;

    }

    .modoru{
        padding-top: 25px;
        padding-left: 5px;
    }
</style>
<!-- Styles -->

</head>

<body>

<h1>アドレス登録編集画面</h1>
    @php
        dump($data);
    @endphp
    
    <form action="{{ route('address.updata', ['id' => $data->id]) }}" method="post">
    @csrf
    <table>
        
        <tr>
            <td><p>氏名 :</p></td>
            <td><input type="text" name="userName" value="{{ old('userName', $data->userName) }}"></td>
        </tr>

        <tr>
            <td><p>電話番号 :</p></td>
            <td><input type="tel" name="tel" placeholder="ハイフンなし" value="{{ old('tel', $data->tel) }}"></td>
        </tr>

        <tr>
            <td><p>メールアドレス :</p></td>
            <td><input type="email" name="email" value="{{ old('email', $data->email) }}"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">更新する</button></td>
            <td class="modoru"><a href="{{route('address.index', ['id' => $data->id]) }}">戻る</a></p> <!--アドレス一覧画面に戻る!--></td>
        </tr>
        
    </table>
    </form>

</body>
</html> 
