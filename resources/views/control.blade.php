<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/control.css') }}">
</head>
<body>
  <h2 class=contact_ttl>管理システム</h2>
  <div class="kensaku">
    <form action="search" method="POST">
      @csrf
        <table class="kensaku_table">
          <tr>
            <th>お名前</th>
            <td>
              <input name="family_name" type="text" class=name_form>
            </td>
            <td>
              <input name="last_name" type="text" class=name_form>
            </td>
              <th>性別</th>
              <td><input type="radio" class="input-update" name="gender" value="全て" checked />全て</td>
              <td><input type="radio" class="input-update" name="gender" value="男性"  />男性</td>
              <td><input type="radio" class="input-update" name="gender" value="女性" />女性</td>
          </tr>
          <tr>
            <th>登録日</th>
            <td colspan="2"><input type="date" name="date1">~<input type="date" name="date2"></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><input type="email" class="input-update" name="email" ></td>
          </tr>
        </table>
      <button type="submit" class=kensaku_btn>検索</button><br>
      <a href="/contact/control">リセット</a>
    </from>
  </div>

  <div class="result">
    <table>
      <tr>
        <th>ID</th>
        <th>お名前（姓）</th>
        <th>お名前（名）</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
        <th></th>
      </tr>
      @if (@isset($query))
      @foreach($querys as $query)
      <tr>
        <td>{{$query->id}}</td>
        <td>{{$query->family_name}}</td>
        <td>{{$query->last_name}}</td>
        <td>{{$query->email}}</td>
        <td>{{$query->opinion}}</td>
      </tr>
      @endforeach
      @endif
    </table>
  </div>
</body>
</html>