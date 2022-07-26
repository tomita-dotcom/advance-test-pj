<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/form.css') }}">

  <link rel="stylesheet" href="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\css\validationEngine.jquery.css">
  <script src="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\jquery-1.8.2.min.js"></script><!-- jQueryも忘れないでね -->
  <script src="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\jquery.validationEngine.js"></script>
  <script src="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\languages\jquery.validationEngine-ja.js" charset="UTF-8"></script>
  <script type="text/javascript">
    $(function(){
        //<form>タグのidを指定
        $("#formCheck").validationEngine(
            'attach', {
                promptPosition: "down"//エラーメッセージ位置の指定
            }
        );
    });
</script>

</head>


<body>
  <h2 class="contact_ttl">お問い合わせ</h2>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <form action="/" method="post" id="formCheck" class="h-adr">
    @csrf
    <table class="contact-form">
      <tr>
        <th>お名前<span class="form-item-label-required">*</span></th>
        <td>
          <input type="text" class="validate[required]" name="family_name">
        </td>
        <td>
          <input type="text" class="input-update" name="last_name" />
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="example">例）山田</td>
        <td class="example">例）太郎</td>
      </tr>
      <tr>
        <th>性別<span class="form-item-label-required">*</span></th>
        <td><input type="radio" class="input-update" name="gender" value="男性"  />男性</td>
        <td><input type="radio" class="input-update" name="gender" value="女性" />女性</td>
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
          <span class="p-country-name" style="display:none;">Japan</span>
          〒<input type="text" class="p-postal-code" size="8" maxlength="8" name="postcode" >
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
    <input type="submit" class=confirmation_btn value="確認">
  </form>
  



</body>
</html>