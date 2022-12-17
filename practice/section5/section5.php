<?php
$str = '住所は〒184-0000 鎌ヶ谷市梶野町0-0-0';
// print preg_match($str,'/^[0-9]{3}-[0-9]{4}/');
// →
if(preg_match('/[0-9]{3}-[0-9]{4}/',$str,$data)){
    print $data[0];
}

// $mail = 'お問い合わせはCQW15204@niffy.com';
// // ptint preg_replace($mail,'/[a-z0-9\.\-]+@([a-z0-9\-]+\-)+[a-z0-9\-]+/i','<a href="meilto: ~">');
// ->
$str = 'お問い合わせはCQW15204@nifty.comまで';
print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i', '<a href="mailto:$0">$0</a>', $str);

// 対象の文字列は、最後に書く！

// 理解度チェック
// [1]
// (1)
$str2 = 'PHPはPHP:Hypertext Preprocessorの略です';

// print mb_strrpos('PHP',$str2);
// ->
print mb_strrpos($str2,'PHP').'文字目';

// (2)
// print mb_strlen("{$area}の気温は{$temp}℃です",'弘前',15.156,2);
// ->
// mb_strlen()は文字列の長さを取得する
printf('%sの気温は%.1f℃です','弘前',15.156,2);

// (3)小文字から大文字に変換
// print mb_convert_case('wings kowledge','/K');
// 別解
print strtoupper('wings kowledge');
print strtoupper('ｗｉｎｇｓ　ｋｎｏｗｌｅｄｇ');
// 全角のアルファベットを半角に出来るのかを試す = 結果:出来ない。そのまま出力。
// ->
print mb_convert_case('wings kowledge','MB_CASE_TITLE');
// MB_CASE_TITLEは、先頭文字を大文字に変換

// (4)
$str3 = '僕の名前はリオです';
// preg_replace($str3,'ボク','リオ','私','凛生');
// ->
print str_replace(['ボク','リオ'],['私','凛生'],$str3);

// (5)
// preg_match('https://wings.msn.to/','http://');
// ->
$str = 'https://wings.msn.to/';
var_dump(str_starts_with($str,'http://'));
// str_starts_withは特定の文字列が含まれるかを調べる

// // [2]
// $data = ['高江','青木','片渕'];
// array_push($data,'山田','日尾');
// array_shift($data,'掛谷','土井');ー>array_unshift($data,'掛谷','土井')
// array_slice($data,2,3);
// ー>
print_r(array_slice($data,3,3));
// 　スライスされた結果は、戻り値として取得されるだけで出力されないからprint_rがいる

// print $data;
// // [3]
// $file = fopen('sample.dat','a') or die('Cannot file open!');
// flock($file,'f');
// // if($line = array_search($file,1024)) {
// //     if(preg_match('|http(s)?://([/w-]+\.)+[/[\w ./?%&=-]*)?|
// //         x',$line,$data])
// //         print $data[0]. '<br/>';
// // }
// flock($file,[]);
// fclose($file);
// ->
// $file = fopen('sample.dat','r') or die('Cannot file open!');
// flock($file,'LOCK_SH');
// // while($line = fgets($file,1024)) {
// //     if(preg_match('|http(s)?://([/w-]+\.)+[/[\w ./?%&=-]*)?|
// //         i',,$data])
// //         print $data[0]. '<br/>';
// // }
// flock($file,LOCK_UN);
// fclose($file);

// // [4]
// // (1)
// is_float(12.2)
// ->print ceil(12.2);
// (2)
// is_string(-12);
// ->print abs(-12);
// (3)
unset($x);
