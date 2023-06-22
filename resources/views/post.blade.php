<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>newsite</title>
<!-- Styles -->
<style>
table { 
    width: 500px;
    margin-left: 300px;
    margin-top:80px;
    border: solid 3px;

}

.modoru{
    padding-top: 25px;
    padding-left: 5px;
}

</style>
</head>
<body>
<h1>アドレス登録編集画面</h1>
@foreach ($errors->all() as $error)  <!-- エラーメッセージ !-->
      <p>{{$error}}</p>
@endforeach

    <form action="{{ route('address.newpost') }}" method="post">
    <table>
        @csrf
        <tr>
            <td><p>氏名 :</p></td>
            <td><input type="text" name="userName" placeholder="氏名は必須です" value="{{ old( 'userName' ) }}"></td>
        </tr>
        <tr>
            <td><p>電話番号 :</p></td>
            <td><input type="tel" name="tel" placeholder="ハイフンなし" value="{{ old( 'tel' ) }}"></td>
        </tr>
        <tr>
            <td><p>メールアドレス :</p></td>
            <td><input type="email" name="email" value="{{ old( 'email' ) }}"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">更新する</button></td>  
            <td class="modoru"><a href="{{route('address.index')}}">戻る</a></td>
        </tr>    
    </table>    
    </form>
</body>
</html> 