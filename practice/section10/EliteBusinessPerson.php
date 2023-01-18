<?php
// require_once 'BusinessPerson.php';

// class EliteBusinessPerson extends BusinessPerson {
//   public function work() : void {
//     print "<p>{$this->lastName}{$this->firstName}はバリバリ働いています。</p>";
//   }
// }

// 自分で書いたコード
require_once 'BusinessPerson.php';
class EliteBusinessPerson extends BusinessPerson {
  public function work() :void {
    print "<p>{$this->lastName}{$this->firstName}はバリバリ働いています。</p>";
  }
}

