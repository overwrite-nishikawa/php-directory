<?php
// class MyParent {
//   public static function show() {
//     print __CLASS__;
//   }

//   public static function staticTest() {
//     // self::show();
//     static::show();
//   }
// }

// class MyChild extends MyParent {
//   public static function show() {
//     print __CLASS__;
//  }
// }

// MyChild::staticTest();

// 自分で書いたコード
class Myparent {
  public static function show() {
    print __CLASS__;
  }

  public static function staticTest() {
    static::show();
  }
}

class Mychild extends MyParent {
  public static function show() {
    print __CLASS__;
  }
}

MyChild::staticTest();