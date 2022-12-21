<?php
// $today = '2021-05-14';
// $result = preg_split('|[/.\-]|', $today);
// print "{$result[0]}年{$result[1]}月{$result[2]}日";

// 以下、自分が書いたコード
$today = '2021/05/14';
$result = preg_split('|[/.\-]|',$today);
print "{$result[0]}年{$result[1]}月{$result[2]}日";
