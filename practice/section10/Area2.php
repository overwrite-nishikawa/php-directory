<?php
// class Area {
//   public static float $pi = 3.14;

//   public static function circle(float $radius): float {
//     return pow($radius, 2) * self::$pi;
//   }
// }

// 自分で書いたコード
class Area {
  public static float $pi = 3.14;
  public static function circle(float $radius): float {
    return pow($radius,2) * self::$pi;
  }
}