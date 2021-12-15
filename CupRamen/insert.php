<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>カップ麺販売サイト</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
if(isset($_SESSION['ab']['mail'])){
$id=$_POST['item_id'];
if(!isset($_SESSION['product'])){
    $_SESSION['product']=[];
}
$count=0;
if(isset($_SESSION['product'][$id])){
    $count=$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=[
    'item_name'=>$_POST['item_name'],
    'price'=>$_POST['price'],
    'count'=>$count+$_POST['count']
];
echo '<hr>';
require 'cart.php';
}
else{
echo '<body><form><div class="form">';
echo '<h1>ログイン確認</h1>';
    echo 'ログインしてください<br>';
    echo '<a href=login-in.php>ログイン画面へ</a>';
echo '</div></form></body>';
}
?>

