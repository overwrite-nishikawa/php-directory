<?=// 自分で書いたコード
require_once "../DbManager.php";
  $db =getDb();
  $fp = fopen('../csv/sample2.csv','r');
  while($line = fgetcsv($fp)) {
      $stt = $db->prepare("INSERT INTO sample3 (
        charcter,
        jender
        )
        VALUES (
        '".$line[0]."',
        '".$line[1]."')
        ");
      $stt->execute();
  }

  fclose($fp);

// $db =getDb();
// $stt = $db->prepare('INSERT INTO sample4 (
//     name,3
//     things
//     )VALUES (
//     "おはよう",
//     "何でないのよ")
//     ');
// $stt->execute();
// } catch(PDOException $e) {
//   die("エラーメッセージ : {$e->getMessage()}");
// }

// require_once "../DbManager.php";
// try {
// $db =getDb();
// $stt = $db->prepare('INSERT INTO sample4 (
//     name,
//     things
//     )VALUES (
//     "おはよう",
//     "何でないのよ")
//     ');
// $stt->execute();
// } catch(PDOException $e) {
//   die("エラーメッセージ : {$e->getMessage()}");
// }
