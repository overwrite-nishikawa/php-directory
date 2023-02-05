<?php 
// $fp = fopen("../csv/sample2.csv",'r');
// while($line = fgetcsv($fp)) {
//     var_dump($line);
//     echo "insert.into";
// }

// fclose($fp);

// $fp = fopen("../csv/sample.csv",'r');
// while($line = fgetcsv($fp)) {
//     var_dump($line);
//     echo "insert.into";
// }

// fclose($fp);
$fp = fopen("../csv/sample.csv",'r');
while($line = fgetcsv($fp)) {
    var_dump($line);
    echo "insert.into";
}

fclose($fp);