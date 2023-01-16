<?php
// $dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
// $usr = 'selfusr';
// $passwd = 'selfpass';

// try {
//   $db = new PDO($dsn, $usr, $passwd);
//   print '接続に成功しました。';
// } catch (PDOException $e) {
//   die("接続エラー：{$e->getMessage()}");
// } finally {
//   $db = null;
// }
$dsn = 'mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8';
$usr = "selfusr";
$passwd = "selfpass";

try {
  $db = new PDO($dsn, $usr, $passwd);
  print '接続に成功しました';
}catch(PDOException $e) {
 die("接続エラー : {$e->getMessage()}");
} finally {
  $db = null;
}
