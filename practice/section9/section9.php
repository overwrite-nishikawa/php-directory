<?php
// p。411
// [1]オブジェクト指向データベース,ネットワーク型データベース,リレーショナルデータベース
// [2]MySQL,MriaDB→SQLサーバー
// p.438
try {
    // $db = new Attribute('mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8;','selfusr','selfpass');
        // →
        $db = new PDO('mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8;','selfusr','selfpass');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    print 'データベースへの接続を確立しました。';
} catch (PDOException $e){
    die("エラーメッセージ : {$e->getMessage()}");
}

// 練習問題
// p.458
require_once '../DbManager.php';
require_once '../Encode.php';

try {
    $db = getDb();

    // $stt = $db->query('SELECT * FROM book2　AS published DESC');
// ↓
    $stt = $db->query('SELECT * FROM book2 ORDER BY published DESC');
    print '<ul>';
    // while($row = $stt->fetchAll(PDO::FETCH_OBJ)) {
        // ↓
   while($row = $stt->fetch(PDO::FETCH_OBJ)) {
    ?>
    <li>
        <!-- ↓ -->
        <?=e($row->title)?>
        (<?=e($row->published)?>)
    </li>
    <?php
}
print '</ul>';
}
catch(PDOException $e) {
    die("エラーメッセージ : {$e->getMessage()}");
}
?>
<?php
// p.468
// 理解度チェック
// [1]
// 1.オブジェクト型データベース→オブジェクト指向データベース
// 2.PDO→データベース抽象化レイヤー。データベース抽象化レイヤーの中の１つがPDOである。
// 3.ロールバック
// 4.Apacha→SQLite。PHP5から標準で導入された軽量データベースエンジン。
// 5.コンテナ→結果セット。データから取りだしたレコードを保持するために、メモリ上に用意された仮想的空間。

// [2]
// ×,×,◯，○,×
// SELECT ,UPDATE,INSERTは、全て DML(データ操作言語)」
// DDLは、データ定義言語

// [3]
// 1.UPDATE book SET price = price*0.9;

// 2.DELETE FROM book WHERE price >= 2500 AND published < 2021.4;
// ↓
// 2.DELETE FROM book WHERE price >= 2500 AND published < '2021-04-01';

// 3.SELECT title,price,publish,published FROM book WHERE ORDER BY ASSOC;
// ↓
// 3.SELECT title,price,publish,published FROM book WHERE publish='翔泳社' ORDER BY price,published ASSOC;

// 4.SELECT uid,unam FROM usr WHERE unam='山田';
// ↓
// 4.SELECT uid,unam FROM usr WHERE unam=LIKE '山田%;

// 山田〇〇さん、という形で山田さんを抽出するためにLIKE句を使っている。前方一致

// 5.SELECT publish,price FROM book(price avg)
// ↓
// SELECT publish AVG(price) FROM book GROUP BY publish;
?>
<!-- // [4] -->
<form method="POST" action="prac4.php">
<label for="title">書名 : </label>
      <input id="title"type="text" name="title" size="20"/>
    <input type="submit" value="検索"/>
</form>
<?php
    if(isset($_POST['title'])) {
        require_once '../DbManager.php';
        require_once '../Encode.php';

        try {
            $db = getDb();
            // $stt = $db->prepare('SELECT * FROM book2 ORDER BY');
            // ↓
             $stt = $db->prepare('SELECT * FROM book2 WHERE title LIKE?');

             $stt->bindValue(1,'%'.$_POST['title'] . '%');
            // 書き忘れ

            //  $stt->fopen();
            // ↓
            // $stt->excuse();
            print '<ul>';

                // while($row = $stt->fetch()) {
                //    ↓
                    while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <li><?=e($row['title'])?></li>
                (<?=e($row['price']) ?>円)</li>
                <?php
            }print '</ul>';
        }catch (PDOException $e) {
            die("エラーメッセージ : {$e->getMessage()}");
        }
            }
