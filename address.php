<?php

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
    echo '<hr>';
    echo '<p>送信データ</p>';
    echo '<p>',$_POST['zipcode'],'</p>';
    echo '<p>',$_POST['address1'],'</p>';
    echo '<p>',$_POST['address2'],'</p>';
    echo '<p>',$_POST['address3'],'</p>';
    echo '<p>',$_POST['address_detail'],'</p>';
    echo '<hr>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>住所検索</h2>
<title>住所</title>
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