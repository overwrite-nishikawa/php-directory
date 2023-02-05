<?php 
$dsn = 'mysql:dbname=selfphp;host=127.0.0.1;port=3308';
$usr= 'selfusr';
$pwd = 'selfpass';

try {
    $db = new PDO($dsn,$usr,$pwd);
    print '接続に成功しました。';
}catch(PDOException $e) {
    die("接続エラー : {$e->getMessage()}");
}finally {
    $db = null;
}

