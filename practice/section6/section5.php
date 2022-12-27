<?php

// [1]
$str = 'サーバーサイド技術';
print(mb_substr($str,4,3));
print '<br />';
// [2]
print(mb_convert_kana('ｻｰﾊﾞｰｻｲﾄﾞ技術','KV'));

$str = "鈴木\t太郎\t男\t50歳\t広島県";
print_r(explode('\t',$str));
// ->
$str = '鈴木¥t太郎¥t男¥t50歳¥t広島県';
print_r(explode('¥t',$str));


// 12/20 ここから

// p.213
// [1]
// スタック:配列をに値を加えていき、最後に加えた値から取り出すこと.
// pushとpop

// キュー:配列を値を加えていき、最初に加えたものから取り出していくこと
// pushとunshift

// [2]
$data1 = [10,15,30];
$data2 = [60,90]; 
$data1[] = 50;
print_r($data); 
// →array_shift($data);
array_splice($data1,0,0,20); 
// →　array_splice($data1,1,0,20);

print_r(array_merge($data1,$data2));

// 12/20ここまで

// 12/23ここから
// p.237
// [1]
$str = '住所は〒184-0000 鎌ヶ谷梶野町0-0-0です';
preg_match('/([0-9]{3})-([0-9]{4})/',$str,$data);

print $data[0];

// [2]
$str = 'お問い合わせはCQW15204@niffty.comまで';
print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\-)+[a-z-0-9\-]+/i','<a href="mailto: $0 ">$0</a>',$str);

// 12/23ここまで

// 12/24ここから
// p.251
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$file = fopen('access.csv','r') or die('ファイルを開けませんでした! '); 
// ー>rではなくa
flock($file,LOCK_EX);
// fwrite($file,fgetcsv("w",$data) . );
// ー>
fwrite($file,implode(".",$data) . "\n" );
flock($file,LOCK_UN);
fclose($file);

// 12/24ここまで

// 12/24 理解度チェックここから(2回目)
// [1]
// (1)検索対象の文字列が先
$str = 'PHPはphp:Hypertext Preprocessorの略です';
// print mb_strrpos('PHP',$str);
// →
print mb_strrpos($str,'PHP') . '文字目';

// (2)小数点以下1桁までにするという問題文を読み飛ばしている。
// printf('%sの気温は%s.3f℃です','弘前','15.156');
// →
printf('%sの気温は%s.1f℃です','弘前','15.156');

// (3)
$str = 'wings knowledge';
print mb_convert_case($str,MB_CASE_TITLE);

// (4)
// print str_replace('ボクの名前はリオです',['私','凛生'],['ボク','リオ']);
// →
$str = 'ボクの名前はリオです';
print str_replace(['ボク','リオ'],['私','凛生'],$str);

// (5)
$str = 'https://wings.msn.to/';
// print str_starts_with('http://',$str);
// →
var_dump(str_starts_with($str,'http://'));

// (6)
$data = ['高江', '青木', '片渕'];
array_push($data,'山田','日尾');
array_unshift($data,'掛谷','土井');
print_r(array_slice($data,3,3));

// [3]
$file = fopen('sample.dat','r') or die('Cannot open file');
flock($file,LOCK_SH);
// fwrite($line = explode($file,1024)) {
    // →
    while($line = fgets($file,1024)) {
    // if(preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|/s',$file,$data)) {
    // →
        if(preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|/i',$line,$data)) {
        print $data[0] . '<br/>';
    }
}


flock($file,LOCK_UN);
fclose($file);

// [3]数値を出力するだけなのでprintを使う
// (1)
var_dump(is_float(12.2));
    // →
print ceil(12.2);
// (2)
var_dump(abs(-12));
    // →
    print abs(-12);
// (3)
$x = 0;
unset($x);
print($x);

