<!-- p.485 -->
<!-- [1] -->
コンストラクターは、クラスを定義した時点で関数を実行できるもの。
↓
コンストラクターは。クラスをインスタンス化するタイミングで実行される特殊なメゾットです。

<!-- [2] -->
<?php
// class Book {
//     function __construct(string $title, int $price)  {
//         $title;
//         $price;
//     }[]
// }

class Book {
    public function __construct(
        public string $title,
        public int $price
    ){}
}

// p.489
// class MyClass {
//     static function squire($width,$height){
//         return $width * $height;
//     }
// }

// print(Myclass::squire(4,12));

// ↓型指定が抜けている
class MyClass {
    static function squire(float $width,float $height){
        return $width * $height;
    }
}


print(Myclass::squire(4,12));

// p496
// [1] アクセス修飾子は、参照の範囲を著したもの。→クラス内のメンバーに対するアクセスの可否を表すためのキーワードのことを言い、プロパティ、メソッド宣言の先頭に付加できます。
// [2] 書き込み専用や読み込み専用といった形でアクセスを制御できる。


// p.510
// [1]
// (1)childClass
// (2)extends
// (3)parentClass

// [2]

// require_once 'p_inherit.php';
// ↓
// require_once 'p_inherit.php';

// class MySubClass extends MyClass {
//     public function getData(): string {
//         return '['.parent::getData().']';
//     }
// }

// $obj = new MySubClass('composer');
// print $obj->getData();

// p.522
// [1]
// (1)instance
// (2)implements
// (3) 抽象化メゾット→実装クラス
// [2]
  abstract class Animal {
    public abstract function outputVoice(): string;
  }

  class Cat extends Animal {
    // public function outputVoice(): string {
        // ↓
   public final function outputVoice(): string {

        return 'ニャア';
    }
  }

  class Dog extends Animal {
    // public function outputVoice(): string {
                // ↓
   public final function outputVoice(): string {
        return 'バゥ';
    }
  }

  $cat = new Cat();
  print $cat->outputVoice() . '<br />';
  $dog = new Dog();
  print $dog->outputVoice() . '<br />';



 

