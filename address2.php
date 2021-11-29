<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>住所</title>
</head>
<body>

<h2>住所新規登録</h2>
<h3>JS使用ver</h3>
<form action="address_out.php" method="POST">
<dl>
    <dt>郵便番号</dt>
    <dd><input type="text" name="zipcode" id="zipcode">
        <button type="button" id="btn">住所検索</button></dd>
    <dt>住所1</dt>
    <dd><input type="text" name="address1" id="address1"></dd>
    <dt>住所2</dt>
    <dd><input type="text" name="address2" id="address2"></dd>
    <dt>住所3</dt>
    <dd><input type="text" name="address3" id="address3"></dd>
    <dt>番地、マンション名など</dt>
    <dd><input type="text" name="address_detail"></dd>
</dl>
<button type="submit" name="send">送信</button>
</form>

<script type="text/javascript" src="zip.js"></script>

</body>
</html>