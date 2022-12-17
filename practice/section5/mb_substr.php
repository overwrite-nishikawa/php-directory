<?php
// 配布されたファイル
// $str = 'WINGSプロジェクト';
// print mb_substr($str, 5, 2);
// print '<br />';
// print mb_substr($str, 5);
// print '<br />';
// print mb_substr($str, 5, -4);
// print '<br />';
// print mb_substr($str, -6, 2);

// 以下、自分で書いたコード
$str = 'WINGSプロジェクト';

print mb_substr($str,5,2);
print '<br />';
print mb_substr($str,5);
print '<br />';
print mb_substr($str,5,-4);
print '<br />';
print mb_substr($str,-6,2);