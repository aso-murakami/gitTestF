<?php session_start();?>
<?php require 'header.php';?>
<h1>まだ注文は確定してません!</h1>
<p>以下の個人情報にお間違えないでしょうか?</p>

<?php
//セッションから取得
$id = $_SESSION['ab'];
$pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1291596-katougumi;charset=utf8',
    'LAA1291596',
    'katougumi');

//print_r($_SESSION);

$sql = $pdo->prepare('SELECT * from customer WHERE mail=?');
$sql->execute([$_SESSION['ab']['mail']]);
$resultList = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultList as $data) {
    echo 'メールアドレス', '<input type="text" name="mail" value="', $data['mail'], '">';
    echo '<br>';
    echo '名前', '<input type="text" name="name" value="', $data['name'], '">';
    echo '<br>';
    echo '住所', '<input type="text" name="address" value="', $data['address'], '">';
    echo '<br>';
    echo '電話番号', '<input type="text" name="tel" value="', $data['tel'], '">';
    echo '<br>';
}
?>

<input type="button" onclick="location.href='END.php'" value="はい">
<input type="button" onclick="location.href='home.php'" value="いいえ">
</form>

<?php require 'footer.php'; ?>


