<?php
// require_once 'Figure.php';

// class Triangle extends Figure {
//   public function getArea(): float {
//     return $this->width * $this->height / 2;
//   }
// }

// 自分で書いたコード
require_once 'Figure.php';

class Triangle extends Figure {
  public function getArea(): float {
    return $this->width * $this->height / 2;
  }
} 