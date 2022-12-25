<?php
// function checkStatic(): int {
//   $x = 0;
//   return ++$x;
// }

// print checkStatic();
// print '<br />';
// print checkStatic();

// 自分で書いたコード
function checkStatic() : int {
  $x = 0;
  return ++$x;
}

print checkStatic();
print checkStatic();

