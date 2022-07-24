<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>


<body>
  <h2 class="contact_ttl">お問い合わせ</h2>
  <form action="/contact/store" method="post">
    <table class="contact-form">
      <tr>
        <th>お名前<span class="form-item-label-required">*</span></th>
        <td>
          <input type="text" class="input-update" name="family-name" >
        </td>
        <td>
          <input type="text" class="input-update" name="last-name" />
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="example">例）山田</td>
        <td class="example">例）太郎</td>
      </tr>
      <tr>
        <th>性別<span class="form-item-label-required">*</span></th>
        <td><input type="radio" class="input-update" name="sex-man" />男性</td>
        <td><input type="radio" class="input-update" name="sex-woman" />女性</td>
      </tr>
      <tr>
        <th>メールアドレス<span class="form-item-label-required">*</span></th>
        <td><input type="email" class="input-update" name="email" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="example">例）test@example.com</td>
      </tr>
      <tr>
        <th>郵便番号<span class="form-item-label-required">*</span></th>
        <td>
        <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
        <form class="h-adr">
          <span class="p-country-name" style="display:none;">Japan</span>
          〒<input type="text" class="p-postal-code" size="8" maxlength="8" name=postcode >
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="example">123-4567</td>
      </tr>
      <tr>
        <th>住所<span class="form-item-label-required">*</span></th>
        <td>
        <input type="text" class="p-region p-locality p-street-address p-extended-address" name="address"/>
        </form>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="example">例）東京都渋谷区千駄ヶ谷1-2-3</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td><input type="text" class="input-update" name="building_name" /></td>
      </tr>
      <tr>
        <th>ご意見<span class="form-item-label-required">*</span></th>
        <td><textarea name="opinion" cols="60" rows="10"></textarea></td>
      </tr>
    </table>
  </form>
  <a href="/contact/check" class=check_btn>確認</a>
</body>
</html>