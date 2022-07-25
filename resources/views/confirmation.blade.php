<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/confirmation.css') }}">
</head>
<body>
  <h2 class="contact_ttl">内容確認</h2>
  <form action="/contact/store" method=POST>
    <table class="contact-form">
      <th>お名前</th>
      <td>{{ $input->family_name }}</td>
      <td>{{ $input["last_name"] }}</td>
      <th>性別</th> 
      <td>{{ $input["gender"] }}</td>
      <th>メールアドレス</th>
      <td>{{ $input["email"] }}</td>
      <th>郵便番号</th>
      <td>{{ $input["postcode"] }}</td>
      <th>住所</th>
      <td>{{ $input["address"] }}</td>
      <th>建物名</th>
      <td>{{ $input["building_name"] }}</td>
      <th>ご意見</th>
      <td>{{ $input["opinion"] }}</td>
    </table>
    <input type="submit" value="送信">
    <a href="/" >修正する</a>
  </form>
</body>
</html>
