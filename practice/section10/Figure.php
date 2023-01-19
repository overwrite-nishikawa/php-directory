<?php
// // class Figure {
// abstract class Figure {
//   protected float $width;
//   protected float $height;

//   public function __construct(float $width, float $height) {
//     $this->width = $width;
//     $this->height = $height;
//   }

//   // public function getArea(): float {
//   //   return 0;
//   // }

//   protected abstract function getArea(): float;

//   // protected abstract function getArea(): float {}
// }


// 自分で書いたコード
abstract class Figure {
  protected float $width;
  protected float $weight;

  public function __construct(float $width,float $height) {
    $this->width = $width;
    $this->height = $height;
  }
  protected abstract function getArea(): float;
}