<?php
// require_once '../DbManager.php';

// $db = getDb();
// $stt = $db->query("SELECT title AS name, publish AS name FROM book WHERE isbn='978-4-7981-4102-2'");
// print_r($stt->fetch(PDO::FETCH_NAMED));

// 自分で書いたコード
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query("SELECT title AS name, publish AS name FROM book2 WHERE isbn='978-4-7891-6382+2'");
print_r($stt->fetch(PDO::FETCH_NAMED));