<?php
// 配布されたファイル
// $data1 = 'Wings project';
// $data2 = 'ＷＩＮＧＳプロジェクト';
// $data3 = 'Fußball';

// print mb_convert_case($data1, MB_CASE_UPPER);
// print '<br />';
// print mb_convert_case($data1, MB_CASE_LOWER);
// print '<br />';
// print mb_convert_case($data1, MB_CASE_TITLE);
// print '<br />';
// print mb_convert_case($data2, MB_CASE_LOWER);
// print '<br />';
// print mb_convert_case($data3, MB_CASE_UPPER);
// print '<br />';
// print mb_convert_case($data3, MB_CASE_UPPER_SIMPLE);

// 以下、自分で書いたコード
$data1 = 'Wings project';
$data2 = 'WINGSプロジェクト';
$data3 = 'Fußball';

// 小文字から大文字に変換
print mb_convert_case($data1,MB_CASE_UPPER);
print '<br />';
// 大文字から小文字に変換
print mb_convert_case($data1,MB_CASE_LOWER);
print '<br />';
// 先頭文字だけ大文字に変換
print mb_convert_case($data1,MB_CASE_TITLE);
print '<br />';
print mb_convert_case($data2,MB_CASE_LOWER);
print '<br />';
print mb_convert_case($data3,MB_CASE_UPPER);
print '<br />';
// 文字列の長さを変えずに変換
print mb_convert_case($data3,MB_CASE_UPPER_SIMPLE);



