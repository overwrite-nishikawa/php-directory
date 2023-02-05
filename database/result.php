<?php
require_once '../DbManager.php';
require_once '../Encode.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果セット</title>
</head>
<body>
    <?php
    
    try {
        $db = getDb();
        $stt = $db->prepare('SELECT * FROM sushiRank ORDER BY id');
        $stt->execute();
        while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    ?>

</body>
</html>