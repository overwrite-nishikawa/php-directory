<?php
// require_once 'MyClass.php';

// $cls = new MyClass();
// foreach ($cls as $key => $value) {
//   print "{$key}:{$value} <br />";
// }
// print '<hr />';
// $cls->showProperty();

// 自分で描いたコード
require_once 'MyClass.php';

$cls = new MyClass();

foreach ($cls as $key=>$value) {
  print "{$key} : {$value} <br/>";
}

print '<hr/>';
$cls->showProperty();