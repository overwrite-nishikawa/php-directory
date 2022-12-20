<?php
// $msg = <<<EOD
// サンプルは、サポートサイト「サーバーサイド技術の学び舎（http://www.wings.msn.to/）」から入手できます。執筆のノウハウ集「WINGS Knowledge」（http://www31.atwiki.jp/wingsproject）もどうぞ。
// EOD;
// print preg_replace_callback(
//   '|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|i',
//   function($matches) {
//     foreach($matches as $match) {
//       return mb_convert_case($match, MB_CASE_UPPER);
//     }
//   }, $msg);

// 以下、自分が書いたコード
$msg = <<<EOD
サンプルは、サポートサイト「サーバーサイド技術の学び舎(http://www.wings.msn.to/)」から
入手できます。執筆のノウハウ集「WINGS knowledge」(http://www31.atwiki.jp/wings
project)もどうぞ。
EOD;

print preg_replace_callback(
  '|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|i',
  function($matches) {
    foreach($matches as $match) {
      return mb_convert_case($match,MB_CASE_UPPER);
    }
  }
,$msg);