<?php
// $data =[2, 4, 6, 8];
// $multi = array_reduce($data, function($result, $x) {
//   return $result * $x;
// }, 1);
// print $multi;

// 以下、自分で書いたコード
$data = [2,4,6,8];
$multi = array_reduce($data,function($result,$x) {
  return $result * $x;
},1);

print $multi;
