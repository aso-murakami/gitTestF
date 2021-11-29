<?php
//    echo $_SERVER["REQUEST_METHOD"] . '<br>'; //メソッド方式確認用
//    var_dump($_POST); //POSTデータ確認用
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>住所</title>
</head>
<body>
<h2>登録する住所</h2>
<form action="" method="POST">
    <dl>
        <dt>郵便番号</dt>
        <dd><?= $_POST['zipcode'] ?></dd>
        <dt>住所1</dt>
        <dd><?= $_POST['address1'] ?></dd>
        <dt>住所2</dt>
        <dd><?= $_POST['address2'] ?></dd>
        <dt>住所3</dt>
        <dd><?= $_POST['address3'] ?></dd>
        <dt>番地、マンション名など</dt>
        <dd><?= $_POST['address_detail'] ?></dd>
    </dl>
</body>
</html>