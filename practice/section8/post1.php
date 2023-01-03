<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>ポストデータ</title>
</head>
<body>
<form method="POST" action="post2.php">
<label for="name">名前：</label>
<input id="name" type="text" name="name" size="15" />
<input type="submit" value="送信" />
</form>
</body>
</html> -->

<!-- 自分で書いたコード -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ポストデータ</title>
</head>
<body>
    <form method="POST" action="post2.php">
        <lable for="name">名前:</lable>
        <!-- name属性は、自分でつけれる。＄_POST['ネーム属性名']と合わせる。 -->
        <input id="name" type="text" name="name" size="15"/>
        <input type="submit" value="送信"/>
    </form>
</body>
</html>
