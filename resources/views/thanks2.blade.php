<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\css\validationEngine.jquery.css">
  <script src=../common/js/jquery-1.12.4.min.js></script>
  <script src="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\jquery.validationEngine.min.js" charset="UTF-8"></script><!-- jQueryも忘れないでね -->
  <script src=jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\jquery.validationEngine.js></script>
  <script scr=jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\jquery-1.8.2.min.js></script>
  <script src=jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\jquery-3.4.1.min.js></script>
  <script src="jQuery-Validation-Engine-3.0.0\jQuery-Validation-Engine-3.0.0\js\languages\jquery.validationEngine-ja.js"></script>
  <script src="" charset="UTF-8"></script>
  
  <script type="text/javascript">
    $(function(){
        //<form>タグのidを指定
        $("#formCheck").validationEngine(
            'attach', {
                promptPosition: "topLeft"//エラーメッセージ位置の指定
            }
        );
    });
</script>
</head>


<body>
  <h2>申し込みフォーム</h2>
<div>
    <form action="" method="post" name="form" id="formCheck">
        <dl>
            <dt>お名前 ※必須</dt>
            <dd><input class="validate[required]" name="namae" type="text" value="" placeholder="例)電脳花子"></dd>
        </dl>
        <dl>
            <dt>郵便番号 ※必須</dt>
            <dd><input class="validate[required]" name="zipnumber" type="text" value="" placeholder="例)460-0002"></dd>
        </dl>
        <dl>
            <dt>都道府県 ※必須</dt>
            <dd><select class="validate[required]" name="pref">
            <option value="" selected="selected">選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <!-- 長いので省略 -->
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
            </select></dd>
        </dl>
        <dl>
            <dt>市区町村 ※必須</dt>
            <dd><input class="validate[required]" name="address1" type="text" value="" placeholder="例)名古屋市中区丸の内"></dd>
        </dl>
        <dl>
            <dt>番地・建物名 ※必須</dt>
            <dd><input class="validate[required]" name="address2" type="text" value="" placeholder="例)2-17-30 ie桜通伏見ビルディング8F"></dd>
        </dl>
        <p><input type="submit" value="確認画面へ進む"></p>
    </form>
</div>
</body>
</html>