<pre>
<?php
// $data = ['Tennis', 'Swimming', 'Soccer', 'Baseball'];
// sort($data, SORT_STRING);
// print_r($data);
// rsort($data, SORT_STRING);
// print_r($data);
// $data2 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11 , 'Baseball' => 9];
// sort($data2, SORT_NUMERIC);
// print_r($data2);
// $data3 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11 , 'Baseball' => 9];
// asort($data3, SORT_NUMERIC);
// print_r($data3);
// ksort($data3, SORT_STRING);
// print_r($data3);

// 以下、自分で書いたコード
$data = ['Tennis','Swimming','Soccer','BaseBall'];

// 文字列としてsort
sort($data,SORT_STRING);
print_r($data);
rsort($data,SORT_STRING);
print_r($data);
// 数値としてソート
$data2 = ['Tennis' => 1,'Swimming' => 1,'Soccer'=>11,'Baseball'=>9];
sort($data2,SORT_NUMERIC);
print_r($data2);
$data3 = ['Tennis' => 1,'Swimming'=>1,'Soccer'=>11,'Baseball' => 9];
asort($data3,SORT_NUMERIC);
print_r($data3);
ksort($data3,SORT_STRING);
print_r($data3);

