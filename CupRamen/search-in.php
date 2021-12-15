<?php require 'header.php';?>

    <title>カップラーメン</title>

    <h1>検索</h1>
    <!-- キーワード検索[item_name] -->
    <p>キーワード検索</p>
    <form action="search-out.php" method="post">
        <input type="text" name="key" required>
        <button type="submit">検索</button>
    </form>

    <br>
    <br>

    <!-- カテゴリ検索[category_name] -->
    <p>味で絞り込み</p>
    <form action="search-category-out.php" method="post">
        <select name="category_id">
            <option value="1">豚骨</option>
            <option value="2">醤油</option>
            <option value="3">味噌</option>
            <option value="4">焼きそば</option>
            <option value="5">辛い</option>
            <option value="6">うどん</option>
            <option value="7">そば</option>
            <option value="8">カレー</option>
            <option value="9">塩</option>
            <option value="10">とんこつ醤油</option>
        </select>
        <button type="submit">検索</button>
    </form>

    <!-- 企業検索[company_name] -->
    <p>製造会社で絞り込み</p>
    <form action="search-company-out.php" method="post">
        <select name="company_id">
            <option value="1">日清食品</option>
            <option value="2">東洋食品</option>
            <option value="3">マルタイ</option>
            <option value="4">蒙古タンメン中本</option>
            <option value="5">エースコック</option>
            <option value="6">サンヨー食品</option>
            <option value="7">株式会社一蘭</option>
            <option value="8">明星食品</option>
            <option value="9">ヤマダイ</option>
        </select>
        <button type="submit">検索</button>
    </form>

<?php require 'footer.php';?>
