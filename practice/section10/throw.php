<?php
// class MyUtil {
//   public static function getContents(string $url): string {
//     if (!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|', $url)) {
//       throw new InvalidArgumentException('不正なURLの形式です。');
//     }
//     $data = @file_get_contents($url);
//     if (!$data) {
//       throw new RuntimeException('指定されたURLが見つかりません。');
//     }
//     return $data;
//   }
// }

// try {
//   print MyUtil::getContents('https://wings.msn.to/nothing/');
// } catch (RuntimeException | InvalidArgumentException $e) {
//   print "エラーメッセージ：{$e->getMessage()}";
// }

class MyUtil {
  public static function getContents(string $url):string {
    if(!preg_match('|http(s)?://([\w-]+\.)+(/[\w ./?%&=-]*)?|',$url)){
      throw new InvalidArgumentException('不正なURLの形式です。');
  }
  $data = @file_get_contents($url);
  if(!$data) {
    throw new RuntimeException('指定されたURLが見つかりません。');
  }
  return $data;
}
}

try {
  print MyUtil::getContents('https://wings.msn.to/nothing/');
}catch (RuntimeException | InvalidArgumentException $e) {
  print "エラーメッセージ: {$e->getMessage()}"; 
}

// $i = -10;
// print $i > 0 ? $i : throw new Exception('$iは正数でなければなりません。');

// $str = '山田';
// $str = null;
// print $str ?? throw new Exception('変数$strがnullです。');

// $hoge = fn() => throw new Exception('エラーです。');

$x === 10 || throw new Exception('エラーです。');