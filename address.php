<?php

$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=7830060&collback=test";
$json = file_get_contents($url);

$data = json_decode($json);

$address1 = $data->results[0]->address1;
$address2 = $data->results[0]->address2;
$address3 = $data->results[0]->address3;
$kana1 = $data->results[0]->kana1;
$kana2 = $data->results[0]->kana2;
$kana3 = $data->results[0]->kana3;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>住所</title>
    <link rel="stylesheet" href="css/style.css">
    <input type="text" name="address" value="">
    <a href="address.php"> <button>住所検索</button></a><br>
    <input type="text" value="<?=$address1 ?>"><br>
    <input type="text" value="<?=$address2 ?>"><br>
    <input type="text" value="<?=$address3 ?>"><br>
    <input type="text" value="<?=$kana1 ?>"><br>
    <input type="text" value="<?=$kana2 ?>"><br>
    <input type="text" value="<?=$kana3 ?>"><br>

</head>
<body>

</body>
</html>