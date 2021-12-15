<?php //session_start();?>
<?php require 'header.php';?>
<?php
echo '<h1>カート</h1>';
if (!empty($_SESSION['product'])) {
?>
    <p>以下の商品でお間違えないですか？</p>
    <input type="button" onclick="location.href='Finalconfirmation.php'" value="はい">
    <input type="button"　class="text1" onclick="history.back()" value="いいえ">
    <br>
<?php
    echo '<table>';
    echo '<th>商品番号</th><th>商品名</th>';
    echo '<th>価格</th><th>個数</th><th>小計</th>';
    $total = 0;
    foreach ($_SESSION['product'] as $id => $product) {
        echo '<tr>';
        echo '<td>', $id, '</td>';

        echo '<td><a href="../../../Downloads/CupRamen/CupRamen/search-in.php?id=', $id, '">',

        $product['item_name'], '</a></td>';
        echo '<td>', $product['price'], '円</td>';
        echo '<td>', $product['count'], '個</td>';
        $subtotal = $product['price'] * $product['count'];
        $total += $subtotal;
        echo '<td>', $subtotal, '円</td>';
        echo '<form method="post" name="item_id" action="delete.php">';
        echo '<td><a href="delete.php?id=', $id, '">削除</a></td>';
        echo '</tr>';
        echo '</form>';
    }
    echo '<tr><td>合計</td><td></td><td></td><td><td><td>', $total,
    '円</td><td></td></tr>';
    echo '</table>';

} else {
    echo 'カートに商品がありません。';
}

?>

<?php require 'footer.php'; ?>
