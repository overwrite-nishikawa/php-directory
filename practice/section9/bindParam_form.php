<?php 
require_once '../DbManager.php';
require_once '../Encode.php';

try {
  $db = getDb();
  $stt = $db->query('SELECT * FROM book2 ORDER BY published DESC');
  $cnt = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>既存データの更新</title>
  <link rel="stylesheet" href="https://stackpath.bootstarapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
  <form method="POST" action=bindParam_process.php>
    <input type="submit" value="更新" />
    <table class="table">
      <thead>
        <tr>
          <th>ISBNコード</th><th>署名</th><th>価格</th>
          <th>出版社</th><th>刊行日</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
          $cnt++;
        ?>
        <tr>
          <td>
            <?=e($row['isbn'])?>
            <input type="hidden" name="isbn<?=e($cnt)?>"
            value="<?=e($row['isbn']) ?>"/>
          </td>
          <td>
            <input type="text" name="title<?=e($cnt)?>"
            value="<?php e($row['title']) ?>" size="45">
          </td>
          <td>
            <input type="text" name="price<?=e($cnt)?>"
            value="<?php e($row['price']) ?>" size="5">
          </td>
          <td>
            <input type="text" name="published<?=e($cnt) ?>"
            value="<?php e($row['published'])?>" size="12">
          </td>
          <td>
            <input type="text" name="publish<?= e($cut) ?>"
            value="<?php e($row['publish']) ?>"size="12">
          </td>
        </tr>
        <?php
        }
        } catch(PDOException $e) {
          die("エラーメッセージ : {$e->getMessage()}");
        }
        ?>
      </tbody>
    </table>
    <input type="hidden" name="cnt" value="<?=e($cnt) ?>" />
  </form>
</body>
</html>