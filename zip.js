// https://techacademy.jp/magazine/19615
// これで良さそう。書き換えてみる予定

var btn = document.getElementById('btn');

//「検索ボタン」クリック時にJSONデータ読み込み
btn.addEventListener('click', function() {
    var zipcode = document.getElementById('zipcode');
    var address1 = document.getElementById('address1');
    var address2 = document.getElementById('address2');
    var address3 = document.getElementById('address3');
    var script = document.createElement('script');

    //テキストボックスに入力された郵便番号をURLに追加
    script.src = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" + zipcode.value + "&callback=jsonData";
    document.body.appendChild(script);
    document.body.removeChild(script);
})

//コールバックされたJSONデータ取得
function jsonData(data) {

    //取得したデータを各HTML要素に代入
    address1.value = data.results[0].address1;
    address2.value = data.results[0].address2;
    address3.value = data.results[0].address3;
}