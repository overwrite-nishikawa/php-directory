<?php
// $str = '仕事用はwings@example.comです。';
// if(preg_match("/
//               [a-z0-9.!#$%&'*+\/=?^_{|}~-]+ # local
//               @                             # delimiter
//               [a-z0-9-]+(\.[a-z0-9-]+)*     # domain
//               /x", $str, $data)) {
//   print "Mail：{$data[0]}";
// }

// 以下、自分が書いたコード
$str = '仕事用はwings@example.comです。';
if(preg_match("/
              [a-z0-9.!#$%&'*+\/=?^_{|}~-]+
              @
              [a-z0-9-]+(\.[a-z0-9-]+)*
              /x", $str, $data)) {
    print "Mail : {$data[0]}";
}