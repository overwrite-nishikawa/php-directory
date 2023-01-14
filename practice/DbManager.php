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

// function getDb() : PDO {
//   $dns = 'mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8';
//   $usr = "selfusr";
//   $passwd = "selfpass";

//   $db = new PDO($dns,$usr,$passwd);
//     return $db;
// }

function getDb():PDO {
  $dsn = 'mysql:host=127.0.0.1;port=3308;dbname=selfphp;charset=utf8';
  $id = 'selfusr';
  $pwd = 'selfpass';

  $db = new PDO($dsn,$id,$pwd);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $db;
}
