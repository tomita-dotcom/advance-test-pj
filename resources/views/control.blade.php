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
    <table>
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" class="validate[required]" name="family_name">
        </td>
        <td>
          <input type="text" class="input-update" name="last_name" />
        </td>
        <th>性別</th>
        <td><input type="radio" class="input-update" name="gender" value="全て"  />全て</td>
        <td><input type="radio" class="input-update" name="gender" value="男性"  />男性</td>
        <td><input type="radio" class="input-update" name="gender" value="女性" />女性</td>
      </tr>
      <tr>
        <th>登録日</th>
        <td><input type="date"><p>~</p><input type="date"></td>
      </tr>
      <tr>
        <th>メールアドレス/th>
        <td><input type="email" class="input-update" name="email" /></td>
      </tr>
    </table>
  </div>
</body>
</html>