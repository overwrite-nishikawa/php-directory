<?php
// require_once '../DbManager.php';
// require_once 'Book.php';

// $db = getDb();
// $stt = $db->query("SELECT * FROM book WHERE isbn='978-4-7981-4102-2'");
// if ($row = $stt->fetchObject('Book', [0.1])) {
//   print "{$row->title}：{$row->discount()}円";
// }

// 自分で書いたコード
require_once '../DbManager.php';
require_once 'Book.php';

// 変数名 $sttは、PDOStatementオブジェクトで使う。
$db = getDb();
$stt = $db->query("SELECT * FROM book2 WHERE isbn='978-4-7981-4102-2'");
if($row = $stt->fetchObject('Book',[0.1])) {
  print "{$row->title} : {$row->discount()}円";
}