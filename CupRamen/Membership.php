<?php require 'header.php';?>

<div class="container">

    <header>
        <h1>新規会員登録</h1>
    </header>

    <form action="Membership2.php" method="post">
        <p>メールアドレス</p>
        <input type="text" name="mail" required>

        <p>パスワード</p>
        <input type="password" name="pass" required>

        <p>名前</p>
        <input type="text" name="name" required>

        <p>郵便番号</p>
        <input type="text" name="postcode" required>

        <p>住所</p>
        <input type="text" name="address" required>

        <p>電話番号</p>
        <input type="text" name="tel" required>

        <a href="login-in.php"><h3>すでにアカウントをお持ちの方はこちら</h3></a>

        <p><button type="submit">登録</button></p><br>
    </form>
</div>
<?php require 'footer.php'; ?>

