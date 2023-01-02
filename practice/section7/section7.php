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
$dir = new DirectoryIterator('./');
foreach($dir as $file) {
    if($file->isFile()){
        print "{$file->getFileName()} : {$file->getSize()} <br/>";
    }
}
?>