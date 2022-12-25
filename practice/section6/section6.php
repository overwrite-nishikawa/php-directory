<?php 

// p.273
function diamond($diamond1,$diamond2) {
    return $diamond1 * $diamond2 / 2;
}

// p.279
// [1] グローバル変数 : スクリプト内で参照できる変数　→　トップレベルで宣言された変数
// ローカル変数 : 関数のブロック内でしか参照できない変数　　→　ユーザー定義関数内の配下で宣言された変数

// [2]変数名の前にglobalをつける。

// p.289
// 4function product(float $base,float $height) :float {
//     return $base * $height;
// }

// product(2,4);

// ー＞
function product(float ...$args) :float{
 $result = 1;
 foreach($args as $arg) {
    $result *= $arg;
}
    return $result;
 }

 print product(-1,5,10);

//  p.299
// [1]
$data = [3,7,9];
// function ($data) {
//     $newData = array_map(sqrt($data));
//     print $newData;
// }
//  ー>
$result = array_map(function($v) {
    return sqrt($v);
},$data);
print_r($result);
// [2]
//  ー>
$result = array_map(fn($v) => sqrt($v),$data);

?>