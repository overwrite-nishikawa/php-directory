<?php
// require_once '../DbManager.php';

// try {
//   $db = getDb();
//   $stt = $db->prepare('INSERT INTO photo(type, data) VALUES(:type, :data)');
//   $file = fopen($_FILES['photo']['tmp_name'], 'rb');
//   $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
//   $stt->bindValue(':data', $file, PDO::PARAM_LOB);
//   $stt->execute();
//   print ' 写真のアップロードに成功しました。';
// } catch(PDOException $e) {
//   die("エラーメッセージ：{$e->getMessage()}");
// }

require_once '../DbManager.php';
require_once '../Encode.php';

try {
  $db = getDb();
  $stt = $db->prepare('INSERT INTO photo(type,data) VALUE(;type,:data)');
  $file = fopen($_FILES['photo']['tmp_name'],'rb');
  $stt->bindValue(':type',$_FILES['photo']['type'],PDO::PARAM_STR);
  $stt->bindValue(':data',$file,PDO::PARAM_LOB);
  $stt->execute();
  print '写真のアップロードに成功しました。';
} catch(PDOException $e) {
  die("エラーメッセージ : {$e->getMessage()}");
}
