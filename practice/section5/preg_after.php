<?php
// $str = '<p>サポートサイト<a href="https://www.wings.msn.to/">https://www.wings.msn.to/</a></p>';
// if(preg_match('/<a href="(.+?)">\1<\/a>/', $str, $data)) {
//   print htmlspecialchars($data[0]);
// }

// 以下、自分が書いたコード
$str = '<p>サポートサイト<a href = "https://www.wings.msn.to/">https://www.wings.msn.to/</a></p>';
if(preg_match('/<a href = "(.+?)">\1<\/a>/',$str,$data)) {
  print htmlspecialchars($data[0]);
}