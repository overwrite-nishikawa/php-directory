<?=// 自分で書いたコード
require_once "../DbManager.php";

try {
  $db = getDb();
  $fp = fopen("../csv/question_choices_import.csv",'r');
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

// $db = getDb();

// try {
//   $fp = fopen("../csv/questions_import.csv",'r');
//   while($line = fgetcsv($fp)) {
//     $stt = $db->prepare("INSERT INTO sample3 (
//       charcter,
//       jender
//     )values(
//       '".$line[0]."',
//       '".$line[1]."'
//     )");

//     $stt->execute();
//     }

//     fclose($fp);
// } catch(PDOException $e) {
//   $e->getMessage();
// }


  // $db =getDb();
  // $fp = fopen('../csv/sample2.csv','r');
  // while($line = fgetcsv($fp)) {
  //     $stt = $db->prepare("INSERT INTO sample3 (
  //       charcter,
  //       jender
  //       )
  //       VALUES (
  // 1,2)
  //       ");
  //     $stt->execute();
  // }

  // fclose($fp);

// $db =getDb();
// $stt = $db->prepare('INSERT INTO sample (
//   charcter,
//   jender
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
