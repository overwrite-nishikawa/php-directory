<?php
// [1]
// ①× ②× ③◯ ④◯ ⑤◯
// [2]
// インスタンス化

// p.323
// $dt = DateTime::createFromFormat('%Y/%M/%D','2021年12月04日');

// print $dt->format('YYYY/MM/DD');
// →
// $dt = DateTime::createFromFormat('Y年m月d日','2021年12月04日');

// print $dt->format('Y/m/d(D)');
// p327
// $dir = new DirectoryIterator('./');
// foreach($dir as $file) {
//     if($file->isFile()){
//         print "{$file->getFileName()} : {$file->getSize()} <br/>";
//     }
// }
// p.345
// [1]
// ×,◯,×,×,◯
// [2]

$day = new DateTime();
$fmt =  'Y年m月d日';
print $day->format($fmt);

// $res = new DateTime(getFullMonth(),0);
// →
print $day->format('Y年m月t日');
$day->add(new DateInterval('P1M10D'));
print $day->format('Y年m月d日');
?>
<?php
// [3]
require '../vendor/autoloaded.php';
$cli = new GuzzleHttp\Client([
    'base_url'=>'https://wings.msn.to/',
]);

// $res = $cli->decode_json('/tmp/boooks.json');
// ->
$res = $cli->get('/tmp/boooks.json');

// $obj = ($res->getBody()); 
// ->
$obj = json_decode($res->getBody()); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Guzzle</title>
</head>
<body>
    <ul>
        <?php 
        foreach($obj->boooks as $b) {
            print"<li>{$b
                // ->
                ->$title}({$b->published} ・{$b->price}円)</li>";
        }
        ?>
    </ul>
</body>
</html>