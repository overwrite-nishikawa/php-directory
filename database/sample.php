<?=// 自分で書いたコード
require_once "../DbManager.php";


try {

  $db =getDb();
  $fp = fopen("../csv/sample4.csv",'r');
  while($line = fgetcsv($fp)) {
    var_dump($line);
    $line[2] = intval($line[2]); 
    $data = $db->prepare("INSERT INTO sample4 (
      name,
      things,
      number
      )
      VALUES(
      '".$line[0]."',
      '".$line[1]."',
      $line[2],
      )
      ");
      $option = $db->prepare("LOAD DATA INFILE 'sample4.csv' INTO TABLE sample4 LINES TERMINATED BY '\r'IGNORE 1 LINES");
      $data->execute();
      $option->execute();
  }

  fclose($fp);
} catch(PDOException $e) {
  "エラーメッセージ : {$e->getMessage()}";
}

