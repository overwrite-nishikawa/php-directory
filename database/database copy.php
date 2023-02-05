<?=// 自分で書いたコード
require_once "../DbManager.php";
try {
$db =getDb();
$stt = $db->prepare('INSERT INTO sample4 (
    name,
    things
    )VALUES (
    "おはよう",
    "何でないのよ")
    ');
$stt->execute();
} catch(PDOException $e) {
  die("エラーメッセージ : {$e->getMessage()}");
}
