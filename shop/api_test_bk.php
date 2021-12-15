<?php ////require 'header.php';?>
<?php
//mb_language("Japanese");//文字コードの設定
//mb_internal_encoding("UTF-8");
//
//$address = $_POST['address'];
//
//$apikey = "dj00aiZpPXNocVVTTnNTRWI5UyZzPWNvbnN1bWVyc2VjcmV0Jng9Mzc-";
//$address = urlencode($address);
//
//$url = "https://map.yahooapis.jp/geocode/V1/geoCoder?output=json&recursive=true&appid=" . $apikey . "&query=" . $address;
//$contents = file_get_contents($url);
//$contents = json_decode($contents);
//
//$Coordinates = $contents->Feature[0]->Geometry->Coordinates;
//$geo = explode(",", $Coordinates);
//
//$lon = $geo[0];
//$lat = $geo[1];
//
//echo "緯度：",$lat," 経度：",$lon;
//
////try {
////    require_once 'DBManager.php';
////    $pdo = getDB();
//
////DB接続
//    $pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;
//dbname=LAA1276433-school;charset=utf8',
//        'LAA1276433',
//        'passmurakami');
//
////    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    $sql = $pdo->prepare('select id,name,longitude,latitude,telephone,
//       (6371 * acos(cos(radians(?))
//        * cos(radians(latitude))
//        * cos(radians(longitude) – radians(?))
//        + sin(radians(?))
//        * sin(radians(latitude))))
//    as distance from Marklist
//    having distance<=5');
//
//    $sql->bindValue(1,$lon,PDO::PARAM_STR);
//    $sql->bindValue(2,$lat,PDO::PARAM_STR);
//    $sql->bindValue(3,$lon,PDO::PARAM_STR);
//
//   $result = $sql->execute();
//    print_r($result);
//
//    foreach ($sql as $row) {
//        echo '<form action="category.php" method="post"><h2>', $row['name'], '</h2><input name="marketid" hidden="hidden" value="', $row['id'], '"><input name="marketname" hidden="hidden" value="', $row['name'], '"><input name="marketimg" hidden="hidden" value="', $row['image'], '">
//    <input type="image" name="marketimg" height="200" width="300" src="Marketimg/', $row['image'], '" onclick="this.form.submit()">';
//// }
////}catch (PDOException $e){
////    echo "err<br>";
////    echo $e->getMessage();
////}
//?>
<?php ////require 'footer.php';?>