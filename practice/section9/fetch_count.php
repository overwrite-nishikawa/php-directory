<?php
// require_once '../DbManager.php';

// $db = getDb();
// $stt = $db->query('SELECT COUNT(*) FROM book');
// print "件数：{$stt->fetchColumn()}件";

// 自分で書いたコード
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT COUNT(*) FROM book2');
print "件数: {$stt->fetchColumn()}件"; 