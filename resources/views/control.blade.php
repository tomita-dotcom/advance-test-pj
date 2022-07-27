<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>管理システム</h2>
  <div class="kensaku">
    <form action="search" method="POST">
      @csrf
        <table>
          <tr>
            <th>お名前</th>
            <td>
              <input name="family_name_keyword" type="text" value="{{$family_name_keyword}}">
            </td>
            <td>
              <input name="last_name_keyword" type="text" value="{{$last_name_keyword}}">
            </td>
            <th>性別</th>
            <td><input type="radio" class="input-update" name="gender_keyword" value="全て"  />全て</td>
            <td><input type="radio" class="input-update" name="gender_keyword" value="男性"  />男性</td>
            <td><input type="radio" class="input-update" name="gender_keyword" value="女性" />女性</td>
          </tr>
          <tr>
            <th>登録日</th>
            <td><input type="date" name="date_keyword1">~<input type="date" name="date_keyword2"></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><input type="email" class="input-update" name="email_keyword" value="{{$email_keyword}}"></td>
          </tr>
        </table>
      <button type="submit">検索</button><br>
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
      @foreach
      <tr>
        <td>{{$query->id}}</td>
        <td>{{$query->family_name}}</td>
        <td>{{$query->last_name}}</td>
        <td>{{$query->email}}</td>
        <td>{{$query->opinion}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>