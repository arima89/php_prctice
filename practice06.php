<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($a){
   $result = $a *2;
   return $result; 
}

echo nibai(288);
echo "\n";


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function add($a , $b){
    $result = $a + $b;
    return $result;
}
echo add(1357 , 5362);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function kakeru($arr){
   $result = 1;
   foreach($arr as $ar){
       $result = $result *$ar;
   }
   return $result; 
}

echo kakeru(array(1,3,5,7,9));
echo "\n";

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    //もしmaxnumbeｒよりaが大きかったら、maxnumberにaを代入する。
    if ($max_number < $a) {
        $max_number = $a;
    }
  }

  return $max_number;
}
echo max_array(array(1,3,5,7,9,8));
echo "\n";

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください


// strip_tags
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";


// array_push
$members=array("一郎","二郎","三郎");
            array_push($members,"四郎","五郎");
            print_r($members);


// array_merge
//配列を作成
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);


// time, mktime
$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(10, 10, 10);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
  
  
// date
// 現在日付をフォーマットする
echo date('Y/m/d');
echo '<br>';
 
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';