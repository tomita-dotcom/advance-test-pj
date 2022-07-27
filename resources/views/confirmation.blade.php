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
  <form action="/contact/check" method=post>
    @csrf
    <table class="contact-form">
      <tr>
      <th>お名前</th>
      <td>{{ $input["family_name"] }}</td>
      <td>{{ $input["last_name"] }}</td>
      </tr>
      <tr>
      <th>性別</th> 
      <td>{{ $input["gender"] }}</td>
      </tr>
      <tr>
      <th>メールアドレス</th>
      <td>{{ $input["email"] }}</td>
      </tr>
      <tr>
      <th>郵便番号</th>
      <td>{{ $input["postcode"] }}</td>
      </tr>
      <tr>
      <th>住所</th>
      <td>{{ $input["address"] }}</td>
      </tr>
      <tr>
      <th>建物名</th>
      <td>{{ $input["building_name"] }}</td>
      </tr>
      <tr>
      <th>ご意見</th>
      <td>{{ $input["opinion"] }}</td>
      </tr>
    </table>
    <input type="submit" class=send_btn value="送信">
    <input name="back" type="submit" value="修正" />
  </form>
</body>
</html>
