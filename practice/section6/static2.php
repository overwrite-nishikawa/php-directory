<?php
// function checkStatic(): int {
//   static $x = 0;
//   return ++$x;
// }

// print checkStatic();
// print '<br />';
// print checkStatic();
// print '<br />';
// print $x;

// 自分で書いたコード
function checkStatic() :int {
  static $x = 0;
  return ++$x;
}

print checkStatic();
print '<br />';
print checkStatic();
print '<br />';
print $x;