<?=
require_once '../DbManager.php';

$db = getDb();

$fp = fopen('../csv/student_table.csv','r');

while($line = fgetcsv($fp)) {
  var_dump($line);
  $data = $db->prepare("INSERT INTO student_table(
    student_number,
    name,
    jender
  )VALUES
  (
    $line[0],
    '".$line[1]."',
    '".$line[2]."'
  )");

  $data->execute();
};

fclose($fp);