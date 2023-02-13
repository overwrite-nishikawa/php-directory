<?=
require_once '../DbManager.php';

$db = getDb();

$fp = fopen('../csv/student_table_number.csv','r');
while($line = fgetcsv($fp)) {
    var_dump($line);
    $data2 = $db->prepare("INSERT INTO student_table_number(
        student_number,
        subject,
        point)VALUES(
            $line[0],'".$line[1]."',$line[2]
        )");

$data2->execute();
}

fclose($fp);
