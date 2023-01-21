<?php
// require_once 'MyMail.php';

// $m = new MyMail();
// $m->From('admin@example.com');
// print $m->From();

require_once 'Mymail.php';

$m = new MyMail();
$m->From('nishikawa@overwrite.com');
print $m->From();