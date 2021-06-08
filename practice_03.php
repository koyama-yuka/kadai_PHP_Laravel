<?php

//PHP/Laravel 03 課題

/*1. $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください*/

$name = "Koyama";

if($name == "Koyama"){
    echo "私は $name です\n";
} else{
    echo "あなたの名前ではありません\n";
}



/*2. for文を使って、1から10000までの合計の値を表示してください*/

$total = 0; //最後の合計はこのtotalで表示する

for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}

echo "1から10000までの合計の値は".$total."です\n";



/*3. $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください*/

$fruits = ["Cherry"=>"さくらんぼ","Peach"=>"桃","Raspberry"=>"ラズベリー","Apple"=>"林檎","Fig"=>"無花果"];

echo "好きな果物を".count($fruits)."つ列挙すると、\n";
foreach($fruits as $favorite_fruit){
    echo $favorite_fruit;
    echo "\n";
}



/*4. 【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください*/

//以下、訂正したもの↓

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}