<?php
$address = $_POST['address'];

$apikey = "dj00aiZpPXNocVVTTnNTRWI5UyZzPWNvbnN1bWVyc2VjcmV0Jng9Mzc-";
$address = urlencode($address);

$url = "https://map.yahooapis.jp/geocode/V1/geoCoder?output=json&recursive=true&appid=" . $apikey . "&query=" . $address;
$contents = file_get_contents($url);
$contents = json_decode($contents);

$Coordinates = $contents->Feature[0]->Geometry->Coordinates;
$geo = explode(",", $Coordinates);

//緯度経度
$lon = $geo[0];
$lat = $geo[1];

echo '<hr>';
echo "緯度：",$lat," 経度：",$lon;
echo '<hr>';

//DB接続
$pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1276433-school;charset=utf8',
    'LAA1276433',
    'passmurakami');

//全件表示
echo '<p>全件表示</p>';
echo '<table>';
echo '<tr><th>id</th><th>name</th><th>longitude</th><th>latitude</th><th>telephone</th></tr>';
foreach ($pdo->query('SELECT * FROM Marklist') as $row){
    echo '<tr>';
    echo '<td>',$row['id'], '</td>';
    echo '<td>',$row['name'], '</td>';
    echo '<td>',$row['longitude'], '</td>';
    echo '<td>',$row['latitude'], '</td>';
    echo '<td>',$row['telephone'], '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<hr>';

//現在地からの距離を取得するＳＱＬ
$sql = $pdo->prepare('select id,name,longitude,latitude,telephone,
(6371 * acos(cos(radians(?))
                 *cos(radians(latitude))
                 *cos(radians(longitude)-radians(?))
                 +sin(radians(?))
                      * sin(radians(latitude)))) as distance
from Marklist');

//緯度経度を設定
$sql->bindValue(1,$lon,PDO::PARAM_STR);
$sql->bindValue(2,$lat,PDO::PARAM_STR);
$sql->bindValue(3,$lon,PDO::PARAM_STR);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

//現在地からの距離表示
echo '<p>地点からの距離表示</p>';
echo '<table>';
echo '<tr><th>id</th><th>name</th><th>longitude</th><th>latitude</th><th>telephone</th><th>distance</th></tr>';
foreach ($result as $row){
    echo '<tr>';
    echo '<td>',$row['id'], '</td>';
    echo '<td>',$row['name'], '</td>';
    echo '<td>',$row['longitude'], '</td>';
    echo '<td>',$row['latitude'], '</td>';
    echo '<td>',$row['telephone'], '</td>';
    echo '<td>',$row['distance'], '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<hr>';

//5km以内の店舗を表示する
$sql = $pdo->prepare('select id,name,longitude,latitude,telephone,
(6371 * acos(cos(radians(?))
                 *cos(radians(latitude))
                 *cos(radians(longitude)-radians(?))
                 +sin(radians(?))
                      * sin(radians(latitude)))) as distance
from Marklist where distance<=5');

//緯度経度を設定
$sql->bindValue(1,$lon,PDO::PARAM_STR);
$sql->bindValue(2,$lat,PDO::PARAM_STR);
$sql->bindValue(3,$lon,PDO::PARAM_STR);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

//現在地からの距離表示
echo '<p>5km以内の店舗</p>';
echo '<table>';
echo '<tr><th>id</th><th>name</th><th>longitude</th><th>latitude</th><th>telephone</th><th>distance</th></tr>';
foreach ($result as $row){
    echo '<tr>';
    echo '<td>',$row['id'], '</td>';
    echo '<td>',$row['name'], '</td>';
    echo '<td>',$row['longitude'], '</td>';
    echo '<td>',$row['latitude'], '</td>';
    echo '<td>',$row['telephone'], '</td>';
    echo '<td>',$row['distance'], '</td>';
    echo '</tr>';
}
echo '</table>';

//echo '<table>';
//echo '<tr><th>id</th><th>name</th><th>longitude</th><th>latitude</th><th>telephone</th><th>distance</th></tr>';
//foreach ($pdo->query('SELECT * FROM Marklist') as $row){
//    echo '<tr>';
//    echo '<td>',$row['id'], '</td>';
//    echo '<td>',$row['name'], '</td>';
//    echo '<td>',$row['longitude'], '</td>';
//    echo '<td>',$row['latitude'], '</td>';
//    echo '<td>',$row['telephone'], '</td>';
//    echo '</tr>';
//}
//echo '</table>';

//SQL発行
////現在地点からの距離が5km以下の店舗情報を取得
//$sql = $pdo->prepare('select id,name,longitude,latitude,telephone,
//   (6371 * acos(cos(radians(?))
//    * cos(radians(latitude))
//    * cos(radians(longitude) – radians(?))
//    + sin(radians(?))
//    * sin(radians(latitude))))
//as distance
//from Marklist
//having distance<=5');

//緯度経度を設定
//$sql->bindValue(1,$lon,PDO::PARAM_STR);
//$sql->bindValue(2,$lat,PDO::PARAM_STR);
//$sql->bindValue(3,$lon,PDO::PARAM_STR);
//$sql->execute();
//
//$result = $sql->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

?>