<?php
// function increment (int $num): int {
// // function increment(&$num): int {
//   $num++;
//   return $num;
// }

// $value = 10;
// print increment($value);
// print '<br />';
// print $value;

// 自分で書いたコード
function increament(int $num) :int {
  $num++;
  return $num;
}

$value = 10;
print increament($value);
print $value;