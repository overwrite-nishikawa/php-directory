<?php
// require_once './wings/selfphp/chap10/MyClass.php';
// require_once './wings/selfphp/chap10/sub/MyClass.php';

// use wings\selfphp\chap10\MyClass;
// use wings\selfphp\chap10\sub\MyClass as SubClass;

// print MyClass::showClass();
// print '<br />';
// print SubClass::showClass();

// 自分で書いたコード
require_once './wings/selfphp/chap10/MyClass.php';
require_once './wings/selfphp/chap10/sub/MyClass.php';

use wings\selfphp\chap10\MyClass;
use wings\selfphp\chap10\sub\MyClass as SubClass;

print Myclass::showClass();
print '<br/>';
print SubClass::showClass();