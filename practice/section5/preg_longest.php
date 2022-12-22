<?php
// $tags = '<p><strong>WINGS</strong>サイト<a href="index.html"><img src="wings.jpg" /></a></p>';
// if(preg_match_all('/<.+>/', $tags, $data, PREG_SET_ORDER)) {
//   foreach ($data as $item) {
//     print htmlspecialchars($item[0]).'<br />';
//   }
// }

// 以下、自分が書いたコード
$tags = '<p><strong>WINGS</strong>サイト<a href ="index.html"><img src = "wings.jpg"/></a></p>';
if(preg_match_all('/<.+?>/',$tags,$data,PREG_SET_ORDER)) {
  foreach($data as $item) {
    print htmlspecialchars($item[0]) . '<br />';
    }
}