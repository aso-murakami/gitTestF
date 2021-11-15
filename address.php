<?php

$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=8120016&collback=test";
$json = file_get_contents($url);

//true⇒連想配列／false（なし）⇒オブジェクト型
$data = json_decode($json,true);

$address1 = $data['results'][0]['address1'];
$address2 = $data['results'][0]['address2'];
$address3 = $data['results'][0]['address3'];

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
    <dd><input type="text" name="address" value="">
        <button onclick="address()">住所検索</button></dd>
    <dt>住所1</dt>
    <dd><input type="text" value="<?=$address1 ?>"></dd>
    <dt>住所2</dt>
    <dd><input type="text" value="<?=$address2 ?>"></dd>
    <dt>住所3</dt>
    <dd><input type="text" value="<?=$address3 ?>"></dd>
    <dt>番地、マンション名など</dt>
    <dd><input type="text" value=""></dd>
</dl>
<button type="submit">送信</button>
</form>
<script>
    function address(){
        alert("address");
    }
</script>
</body>
</html>