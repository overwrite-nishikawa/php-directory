<?php
// $data = [1, 2, 3];
// $result = array_map(function($v) { return $v * $v; }, $data);
// print_r($result);

// 以下、自分が書いたコード
$data = [1,2,3];
$result = array_map(function($v) 
{    return $v * $v;},$data);
print_r($result);
