<?php
function getTriangleArea(float $base = 5, float $height = 1): float {
  return $base * $height / 2;
}

// print getTriangleArea(height: 10);
// print '<br />';
// print getTriangleArea(height: 10, base: 50);
// print '<br />';

// 自分で書いたコード
print getTriangleArea(height: 10);
print '<br />';
print getTriangleArea(height: 10,base: 50);