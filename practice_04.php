<?php

/*1. 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/

function Double($arg){
    $result = 0;
    
    $result = $arg*2;
    return $result;
}

echo Double(6); //確認用の表示　引数の値を変更して確認可
echo "\n";



/*2. $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください*/

function Add($a,$b){
    $add_result = 0;
    
    $add_result = $a + $b;
    return $add_result;
}

echo Add(27,58); //確認用の表示　引数の値を変更して確認可
echo "\n";



/*3. $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください*/

function Product($arr){
    $product_result = 1; //最初の計算結果が、配列の最初の数字と一致するために1で初期化
    
    foreach($arr as $element){
        $product_result *= $element;
    }
    
    return $product_result;
}

$Array = array(1, 3, 5 ,7, 9); //今回の配列を$Arrayで定義

echo Product($Array); //確認用の表示
echo "\n";



/*4. 【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください*/

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     
     if($max_number >= $a){
         $max_number = $max_number; //max_numberが比較対象の数字以上なら、max_numberはそのまま
     }
     else{
         $max_number = $a; //max_numberが比較対象の数字より小さいなら、比較対象の数字をmax_numberに代入
     }
     
 }
 return $max_number;
 }

$Array_example = [5,3,6,9,1,2,0]; //確認用に適当な配列を定義

echo max_array($Array_example); //確認用の表示
echo "\n";



/*5. 下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください*/
/*
5-1. strip_tags
5-2. array_push
5-3. array_merge
5-4. time, mktime
5-5. date
*/

/*5-1. strip_tags ：文字列から HTML および PHP タグを取り除く*/
$sample ="<title>greeting</title> <h1>Hello</h1>";
echo strip_tags($sample);
echo "\n";

/*5-2. array_push　：1つ以上の要素を配列の最後に追加する*/
$sample2 =["福岡","佐賀","大分","熊本"];
echo "初期の配列の中には".count($sample2)."つの県が入っており、\n";
print_r($sample2);

array_push($sample2,"長崎","宮崎","鹿児島","沖縄"); //追加

echo "県を追加すると、全部で".count($sample2)."つとなり、\n";
print_r($sample2);
echo "となる。\n";

/*5-3. array_merge　：1つまたは複数の配列をマージする　入力配列が連想配列の同じキー文字列を有していた場合は、後に指定されたものが上書きされる*/
$sample3_1 = [1,2,3,"black","color1" => "white","color2" => "red","color3" => "green","color4" => "blue"];
$sample3_2 = ["a","b","c","color2" => "cyan","color3" => "magenta","color4" => "yellow"];

$result_merge = array_merge($sample3_1,$sample3_2);
print_r($result_merge);
echo "\n";

/*5-4. time, mktime　：timeは、現在のUnixタイムスタンプを返す（協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間）
　　　　　　　　　　 ：mktimeは、指定した日時のUnixタイムスタンプを返す　引数に[時、分、秒、月、日、年]を指定可*/
echo "タイムゾーンは日本で設定\n";
date_default_timezone_set('Asia/Tokyo');
echo "現在のタイムスタンプは、".time()."\n";
echo "2021年6月30日AM5:45のタイムスタンプは、".mktime(5,45,0,6,30,2021)."\n";

/*5-5. date　：ローカルの日付/時刻を書式化する　今回は先程のtime、mktimeと合わせてわかりやすい表記にする。*/
echo "これだとわかりにくいため、date関数を使用して表示すると、\n";

echo "現在は".date("Y/F/d G:i:s",time())."となり、\n"; //デフォルトでdateの引数にはtime(が入っているらしいが・・・
echo "2021年6月30日AM5:45をdateとmktimeで表現すると".date("Y/F/d G:i:s A",mktime(5,45,0,6,30,2021))."となる\n";

