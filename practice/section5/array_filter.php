<?php
// $data = ['フレンチブルドッグ', 'ヨークシャーテリア', 'ダックスフント',
//   'ポメラニアン', 'コーギー'];
// $result = array_filter($data, function($v){
//     return mb_strlen($v) < 8;
//   });
// print_r($result);

// 以下、自分で書いたコード
$data = ['フレンチブルドック','ヨークシャテリア','ダックスフンド',
'ポメラニアン','コーギー'];

$result = array_filter($data,function($v){
  return mb_strlen($v) < 8;
});
print_r($result);

print '<br />';
$result = array_filter($data,function($v){
  return mb_strlen($v) < 8;
},ARRAY_FILTER_USE_KEY);
print_r($result);


print '<br />';
$result = array_filter($data,function($v){
  return mb_strlen($v) < 8;
},ARRAY_FILTER_USE_BOTH);
print_r($result);
