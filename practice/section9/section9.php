<?php
// p。411
// [1]オブジェクト指向データベース,ネットワーク型データベース,リレーショナルデータベース
// [2]MySQL,MriaDB→SQLサーバー

// p.438 1/14実施
try {
    // $db = new Attribute('mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8;','selfusr','selfpass');
        // →
        $db = new PDO('mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8;','selfusr','selfpass');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    print 'データベースへの接続を確立しました。';
} catch (PDOException $e){
    die("エラーメッセージ : {$e->getMessage()}");
}



?>