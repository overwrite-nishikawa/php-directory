<?php
require_once 'Triangle.php';
require_once 'Square.php';

// 自分で書いたコード
$tri = new Triangle(5, 10);
$squ = new Square(5, 10);
print "三角形の面積：{$tri->getArea()} <br />";
print "四角形の面積：{$squ->getArea()}";
