<!-- p.485 -->
<!-- [1] -->
コンストラクターは、クラスを定義した時点で関数を実行できるもの。
↓
コンストラクターは。クラスをインスタンス化するタイミングで実行される特殊なメゾットです。

<!-- [2] -->
<?php
// class Book {
//     function __construct(string $title, int $price)  {
//         $title;
//         $price;
//     }[]
// }

class Book {
    public function __construct(
        public string $title,
        public int $price
    ){}
}
