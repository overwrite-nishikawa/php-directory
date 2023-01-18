<?php
// require_once 'BusinessPerson.php';

// class HetareBusinessPerson extends BusinessPerson {
//   public function work() : void {
//     parent::work();
//     print 'ただし、ボチボチと…';
//   }
// }

// 自分で書いたコード
require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
  public function work() :void {
    parent::work();
    print 'ただし、ボチボチと・・・';
  }
} 