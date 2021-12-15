<?php require 'header.php';?>
<h1>カップ麺専門店</h1>
<p>キーワード検索</p>
<form action="../../../Downloads/CupRamen/CupRamen/search-out.php" method="post">
    <input type="text" name="key">
    <button type="submit">検索</button>
</form>
    <p class="recommendation">おすすめ商品</p>
<form action="ProductDetail.php" method="post">
    <div>
    <button type="submit" name="id" value="1">
        <img src="img/1.jpg" class="image">
    </button>
    <button type="submit" name="id" value="2">
        <img src="img/2.jpg" class="image">
    </button>
    <button type="submit" name="id" value="3">
        <img src="img/3.jpg" class="image">
    </button>
    <button type="submit" name="id" value="15">
        <img src="img/15.jpg" class="image">
    </button>
    <button type="submit" name="id" value="5">
        <img src="img/5.jpg" class="image">
    </button>
    <button type="submit" name="id" value="6">
        <img src="img/6.jpg" class="image">
    </button>
    <button type="submit" name="id" value="7">
        <img src="img/7.jpg" class="image">
    </button>
    <button type="submit" name="id" value="8">
        <img src="img/8.jpg" class="image">
    </button>
    <button type="submit" name="id" value="9">
        <img src="img/9.jpg" class="image">
    </button>
    <button type="submit" name="id" value="10">
        <img src="img/10.jpg" class="image">
    </button>
    </div>
</form>
<?php require 'footer.php'; ?>


