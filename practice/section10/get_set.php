<?php
// require_once 'MyMail.php';

// $m = new MyMail();
// $m->to = 'kii613.pengun@gmail.com';
// $m->subject = 'テストメール';
// $m->message = 'こんにちは、MyMailクラスです。';
// $m->From = 'kii613.penguin@gmail.com';
// $m->X_Mailer = 'MyMail 1.0';
// $m->X_Priority = 1;
// $m->X_MSMail_Priority = 'High';
// $m->send();

require_once 'MyMail.php';

$m = new MyMail();

$m->to = 'nishikawa@overwrite.com';
$m->subject = 'テストメール';
$m->message = 'こんにちは、Mymailクラスです。';
$m->from = 'nishikawa@overwrite.com';
$m->X_priority = 1;
$m->X_MSMail_priority = 'High';
$m->send();