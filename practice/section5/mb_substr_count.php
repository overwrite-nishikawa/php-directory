<?php
// $str = 'にわにはにわにわとりがいる';
// print mb_substr_count($str, 'にわ');
// print '<br />';
// $str = 'いちいちいちばにいち';
// print mb_substr_count($str, 'いちいち');

// 以下、自分で書いたコード
$str = 'にわにはにわにわとりがいる';
print mb_substr_count($str,'にわ');
print '<br />';
$str = 'いちいちいちばにいち';
print mb_substr_count($str,'いち');

