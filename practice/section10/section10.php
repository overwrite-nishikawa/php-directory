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

    // p.554
  // [1]
  // 下位のエラーから書いていくこと。
  // [2]
  // ↓
  // ・具体的な例外の内容を識別できるよう、汎用的なException例外の発生は避ける。
  // ・標準的な例外があるのであれば、独自例外よりも標準例外を利用する。
  // ・その場で処理できない例外は握りつぶすのではなく、throw命令を使って現在の例外をそのまま呼び出し元に再スローする。


  // p.569
  // class yourClass {
    // try {
    // }catch(throwException $e) {
    //   print 'プロパティは存在しません'
    // }
// }

// ↓
  class yourClass {
    public function __get($name) {
      print "{$name}プロパティは存在しません。";
  }
}

  $cls = new yourClass();
  $str = $cls->nothing;

  // p.585
  // [1]
  // ファイルの自動読み込みになっているかどうか。(autoload)
  // httpd.confのAllOverrideディレクティブが「All」に設定されていること。
  // ・パラメーターアクセスレベルが6.7であること。
  // [2]
  function sql_autoloaded_register($name) : void{
    print "php_{$name}.class.php";
  }
  // ↓
  sql_autoloadadd_register(function($name) {
    require_once "php_{$name}.class.php";
  })

  // p.586
  // 理解度チェック
// [1]
// 1.アクセス修飾子
// 2.private
// 3.protected
// 4.コンストラクト→static修飾子
// 5.インターフェイス→静的メソッド
// 6.implements→::
// 7.abstract修飾子
// 8.抽象メソッド
// 9.インスタントクラス→抽象クラス
// 10.const
// 11.名前空間

// [2]
// ×,
// ◯,→×
// ◯,
// ◯,→×
// ◯→×

// [3]
// <?php
// abstract class Figure {
//   protected float $width;
//   protected float $height;
//   public function __construct(float $width, float $height) {
//     $this->width = $width;
//     $this->height = $height;
//   }
//   protected abstract function getArea() : float;
// }

// class Triangle extends Figure {
//   public final function getArea() : float {
//     return $this->width * $this->height / 2;
//   }
// }

// class Square extends Figure {
//   public final function getArea() : float {
//     return $this->width * $this->height;
//   }
// }

// $tri = new Triangle(10, 5);
// $sqr = new Square(10, 5);
// print "三角形の面積は{$tri->getArea()}です。<br />";
// print "四角形の面積は{$sqr->getArea()}です。";

// 間違っているところ
// ・__destructではなく、__construct
// ・抽象メソッドを含むクラスには、classキーワードの前にabstract修飾子を付与する日宇町があります。
// ・クラスを継承するには、implumentsキーワードではなく、extendsきーワードを使用します。
// ・インスタンスメソッドは「::」演算子「→」で呼び出します。

[4]
// private class Animal {
//   // public function implements;
// }

// class cat extends Animal {
//  function $cat;
// }
// ↓
// interface Animal {
//   function outputVoice() : string;
// }

// class Cat implements Animal {
//   public final function outputVoice(): string {
//     return 'ニャア';
//   }

// class Dog implements Anumal {
//   public final function outputVoice() : string {
//     return 'バゥ';
//   }
// }
// $cat = new Cat();
// print $cat->outputVoice() . '<br/>';
// $dog = new dog();
// print $dog->outputVoice();

// [5]
// 1.トラスト→オートローダー
// 2.→完全修飾子
// 3.call→__call
// 4.→メゾット名
// 5.→引数
// 6.get→__get
// 7.→プロパティ名
// 8.set→__set
// 9.→プロパティ名
// 10.→プロパティ値
// 11。→_toString
// 12.→_invoke
// 13.→debugInfo
;
?>