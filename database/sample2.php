<?=// 自分で書いたコード
require_once "../DbManager.php";

try {
  $db = getDb();
  $fp = fopen("../csv/sample2.csv",'r');
  while($line = fgetcsv($fp)) {
    $stt = $db->prepare("INSERT INTO sample3(
      charcter,
      jender
    )values(
      '".$line[0]."',
      uuid()
    )");
    $stt->execute();

    }

  fclose($fp);
} catch(PDOException $e) {
  $e->getMessage();
}
