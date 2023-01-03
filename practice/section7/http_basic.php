<?php
// require '../vendor/autoload.php';

// $cli = new GuzzleHttp\Client([
//   'base_uri' => 'https://wings.msn.to/'
// ]);
// $res = $cli->request('get', '/tmp/sample.txt');
// print $res->getBody();

// 自分で書いたコード
require '../vendor/autoload.php';

$cli = new GuzzleHttp\client([
  'base_uri' => 'https://wings.msn.to/',
]);

$res = $cli->request('get','/tmp/sample.txt');
print $res->getBody();