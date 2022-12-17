<?php
// $str = 'にわにはにわにわとりがいる';
// print mb_strpos($str, 'にわ');
// print '<br />';
// print mb_strpos($str, 'にわ', 2);
// print '<br />';
// print mb_strpos($str, 'にわ', -10);
// print '<br />';
// print mb_strpos($str, 'かに');
// print '<br />';
// print mb_strrpos($str, 'にわ');
// print '<br />';
// print mb_strrpos($str, 'にわ', -8);

// 以下、自分で書いたコード
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str,'にわ');
print '<br />';
print mb_strpos($str,'にわ',2);
print '<br />';
print mb_strpos($str,'にわ',-10);
print '<br />';
print mb_strpos($str,'かに');
print '<br />';
print mb_strrpos($str,'にわ');
print '<br />';
print mb_strrpos($str,'にわ',-8);



