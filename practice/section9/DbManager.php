<?php
// function getDb() : PDO {
//   $dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
//   $usr = 'selfusr';
//   $passwd = 'selfpass';

//   $db = new PDO($dsn, $usr, $passwd);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // $db = new PDO($dsn, $usr, $passwd, [PDO::ATTR_PERSISTENT => true]);
//   return $db;
// }

// 自分で書いたコード
function getDb() : PDO {
  $dns = 'mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8';
  $usr = "selfusr";
  $passwd = "selfpass";

  $db = new PDO($dns,$usr,$passwd);
    return $db;
}
