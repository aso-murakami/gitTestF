<?php

$zipcode = "";
$address1 = "";
$address2 = "";
$address3 = "";

if(isset($_POST['zip'])){
    $zipcode = $_POST['zipcode'];
    $url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=".$zipcode;
    $json = file_get_contents($url);

    $data = json_decode($json,true);
    $address1 = $data['results'][0]['address1'];
    $address2 = $data['results'][0]['address2'];
    $address3 = $data['results'][0]['address3'];
}

if(isset($_POST['send'])){
//    POSTでリダイレクト⇒POSTデータの引継ぎができる
//    header関数の第3引数で、コード307を指定
//    参考URL：https://qumeru.com/magazine/129
    header('Location: address_out.php', true, 307);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>住所</title>
</head>
<body>
<h2>住所新規登録</h2>
<h3>PHPのみver</h3>
<form action="" method="POST">
<dl>
    <dt>郵便番号</dt>
    <dd><input type="text" name="zipcode" value="<?=$zipcode ?>">
        <button type="submit" name="zip">住所検索</button></dd>
    <dt>住所1</dt>
    <dd><input type="text" name="address1" value="<?=$address1 ?>"></dd>
    <dt>住所2</dt>
    <dd><input type="text" name="address2" value="<?=$address2 ?>"></dd>
    <dt>住所3</dt>
    <dd><input type="text" name="address3" value="<?=$address3 ?>"></dd>
    <dt>番地、マンション名など</dt>
    <dd><input type="text" name="address_detail" value=""></dd>
</dl>
<button type="submit" name="send">送信</button>
</form>
</body>
</html>