<?php 
    // 理解度チェック
    // [1]
    for($i = 1;$i<=100;$i++){
        if($i % 2 === 0){
            continue;
        }
        $result += $i;
    }
    print $result;

    // [2]
    $sum = 0;
    $i = 1;
    while($i <= 100){
        $i++;
        $sum += $i;
        if($sum > 1000) {
            break;
        }
    }
    print "合計が1000を超えるのは、1〜{$i}を加算した時です。";

    // [3]
    $data = [10,25,50];
    foreach($data as &$item) {$item *= 1.5; }
    print_r($data);
    // -> $item *= 1.5;の*が抜けていて、1.5倍にならなかった。

    // [4]
    $language = "C#";
    switch($language) {
        case 'Python':
        case 'PHP':
        case 'Ruby':
        print 'インタプリンター言語';
        break;
        case 'C#':
        case 'Java';
        print 'コンパイル言語';
        break;
    }

    // [5]
    if($language === 'Python' || $language === 'PHP' || $language === 'Rudy' ){
        print "インタプリター言語";
    }else {
        print "コンパイル言語";
    }

    //  [6]
    match($language) {
            'Python','PHP', 'Ruby' => print 'インタプリンター言語',
            'C#','Java' => print 'コンパイル言語'
        }
    // ->printの記述位置が違う
    //    print match($language) {
    //         'Python','PHP', 'Ruby' => print 'インタプリンター言語',
    //         'C#','Java' => print 'コンパイル言語'
    //     }

    // 以下　練習問題
    // $count = 75;
    //     switch($count) {
    //         case $count > 90:
    //         print '優';
    //         break;
    //         case $count > 70:
    //         print '良';
    //         break;
    //         case $count > 50:
    //         print '可';
    //         break;
    //         default: 
    //         print '不可';
    //         break;
    //     }         
    
    // for($i = 1,$j = 1;$i<= 9,$j <= 9,$sum =  $i * $j;$i++,$j++){
    //     $sum =  $i * $j;
    //     print "{$sum} </br>";
    // }

    // for($i = 1;$i <= 9;$i++){
    //     for($j = 1;$j <= 9;$j++) {
    //         $result = $i * $j;
    //         print "{$result} &nbsp;";
    //     }
    //     print '</ br>';
    // }

    // $sum = 0;
    // $i = 1;
    // while($i <= 100) {
    //     $i++;
    //     if($i % 2 !== 0){
    //         continue;
    //     }
    //     $sum += $i;
    // }

    // print "合計値は{$sum}です。";
?>