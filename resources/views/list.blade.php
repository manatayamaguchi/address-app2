<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
</head>

<body>
<h1>アドレス一覧画面</h1>

    <table border="1">
        <tr>
            <th>氏名</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th></th>
            <th></th>
        </tr>
    @php
        dump($data);
    @endphp
    
    @foreach($data as $datas)
        <tr>
            <td>{{$datas->userName}}</td>
            <td>{{$datas->tel}}</td>
            <td>{{$datas->email}}</td>
            <td class='gray'><a href="{{ route('address.edit', ['id' => $datas->id]) }}">編集</a></td><!-- 編集ボタンを押したら、そのデータ専用の編集画面（edit.blade.php）に移る!-->
            <td class='gray'>
                <form action="{{ route('address.delete', ['id' => $datas->id]) }}" method="POST">
                <!-- 削除ボタンを押したら、そのデータを削除する !-->
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

<p class="add"><a href="{{ route('address.post') }}">新規</a></p> <!-- アドレス登録画面に移る !-->

</body>
</html>