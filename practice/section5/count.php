<?php
// $data = ['山田', '掛谷', '日尾', '本多', '矢吹'];
// print count($data);


// 以下、自分の書いたコード
$data = ['山田','掛谷','日尾','本多','矢吹'];
print count($data);

$data = [['X-1','X-2','X-3'],
['Y-1','Y-2','Y-3'],
['Z-1','Z-2','Z-3']];

print count($data);
print count($data,COUNT_RECURSIVE);