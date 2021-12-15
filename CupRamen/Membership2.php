<?php session_start() ?>

<?php require 'header.php';?>

<?php
unset($_SESSION['ab']);
// DB接続
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1291596-katougumi;charset=utf8',
    'LAA1291596',
    'katougumi');

$sql = $pdo->prepare('SELECT * FROM customer WHERE mail=?');
$sql->execute([$_POST['mail']]);
$resultList = $sql->fetch(PDO::PARAM_STR);

if($resultList){
    echo 'このメールアドレスは登録されているため登録できません';
}else{
    echo '<h1>登録完了</h1>';
    // DB入力式(情報が正しく入力されていたら登録完了のメッセージ)
        $sql = $pdo->prepare('INSERT INTO customer VALUES(null,?,?,?,?,?)');
        $sql->execute([$_POST['pass'], $_POST['mail'], $_POST['name'], $_POST['address'], $_POST['tel']]);
        echo '以下の情報で登録が完了いたしました。<br>';
            $_SESSION['ab']=[
                'mail'=>$_POST['mail'],
                'pass'=>$_POST['pass'],
                'name'=>$_POST['name'],
                'address'=>$_POST['address'],
                'tel'=>$_POST['tel']
            ];
        //print_r($_SESSION);
        echo '<br><p>メールアドレス：';
        echo $_SESSION['ab']['mail'];
        echo '</p><br><p>パスワード：';
        echo $_SESSION['ab']['pass'];
        echo '</p><br><p>お名前：';
        echo $_SESSION['ab']['name'];
        echo '</p><br><p>住所：';
        echo $_SESSION['ab']['address'];
        echo '</p><br><p>電話番号：';
        echo $_SESSION['ab']['tel'];
        echo '</p>';

}
?>
<?php require 'footer.php'; ?>

