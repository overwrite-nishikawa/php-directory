<?php
// require_once 'Person.php';
// require_once 'FriendList.php';

// $list = new FriendList();
// $list->add(new Person('太郎', '山田'));
// $list->add(new Person('奈美', '掛谷'));
// $list->add(new Person('賢', '高江'));

// print $list(1);

// 自分で描いたコード
require_once 'Person.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new person('太郎','山田'));
$list->add(new Person('奈美','掛谷'));
$list->add(new Person('賢','高江'));

print $list(2);