<?php
// class MyClass {
//   public string $pub = 'public';
//   protected string $pro = 'protected';
//   private string $pri = 'private';

//   public function showProperty() : void {
//     foreach ($this as $key => $value) {
//       print "{$key}：{$value} <br />";
//     }
//   }
// }

// 自分で描いたコード
class MyClass {
  public string $pub = 'public';
  protected string $pri = 'pivate';

  public function showproperty(): void {
    foreach ($this as $key => $value) {
      print "{$key} : {$value} <br/>";    
    }
  }
}