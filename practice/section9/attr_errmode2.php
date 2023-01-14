<?php
// require_once '../DbManager.php';

// try {
//   $db = getDb();
//   $db->exec('MECHA KUCHA');
// } catch (PDOException $e) {
//   print "エラーコード：{$e->getCode()} <br />";
//   print "エラーメッセージ：{$e->getMessage()}";
// }

require_once '../DbManager.php';
// 自分で書いたコード
try {
  $db = getDb();
  $db->exec('MECHA KUCHA');
} catch (PDOException $e) {
  print "エラーコード : {$e->getCode()} <br />";
  print "エラーメッセージ : {$e->getMessage()} <br />"; 
}