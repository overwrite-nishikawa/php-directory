<pre>
<?php
// require_once '../DbManager.php';

// $db = getDb();
// $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
// print_r($stt->fetchAll(PDO::FETCH_ASSOC));

// 自分で書いたコード
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT * FROM book2 ORDER BY published DESC');
print_r($stt->fetchAll(PDO::FETCH_ASSOC));