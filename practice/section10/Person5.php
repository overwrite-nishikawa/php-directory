<?php
class Person {
  public string $firstName;
  public string $lastName;

  public function __construct($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  // public function __destruct () {
  //   print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
  // }

// 自分で書いたコード
// class Person {
//   public function __destruct() {
//     print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>'
//   }
// } 

  public function __destruct() {
    print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
  }
  
// 自分で書いたコード終わり

  public function show() : void {
    print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
  }
}
