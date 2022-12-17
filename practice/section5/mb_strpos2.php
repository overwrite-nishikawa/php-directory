<?php
// $str = 'にわにはにわにわとりがいる';
// if (mb_strpos($str, 'にわ') != false) {
// //if (mb_strpos($str, 'にわ') !== false) {
//   print '文字列が見つかりました。';
// }


// 以下、自分で書いたコード
$str = 'hにわにはにわにわとりがいるh';
if(mb_strpos($str,'にわ') !== false) {
  print '文字列が見つかりました';
}

print '<br />';
print_r(mb_stripos($str,'H'));
print '<br />';
print_r(mb_strripos($str,'H'));