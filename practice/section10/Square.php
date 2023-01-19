<?php
// require_once 'Figure.php';

// class Square extends Figure {
//   public function getArea(): float {
//     return $this->width * $this->height;
//   }
// }

// 自分で書いたコード
require_once 'Figure.php';

class Square extends Figure {
  public function getArea(): float {
    return $this->width * $this->height;
  }
}
