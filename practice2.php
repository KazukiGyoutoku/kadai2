<?php

//課題１..$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください。

$name = "KazukiGyoutoku";

if($name == "KazukiGyoutoku"){
    //echo "私は あなたの名前 です";
}else{
    //echo "あなたの名前ではありません";
}

//課題2..for文を使って、1から10000までの合計の値を表示してください。


$total = 0;

for($i = 1; $i <=10000; $i++){
    $total += $i;
}
 //echo $total;
 
 
 
 //課題3..$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
 
 
 $fruits =["りんご","ぶどう","みかん","もも","なし"];
 
 foreach($fruits as $value){
     //echo $value;
     //echo "<br>";
 }
 
 //課題4..【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
 
 
$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++){//< $endに"="が抜けてるので修正";

  if($i % 5 == 0){
    //echo $i;//echo $iにセミコロンが抜けてるので修正
    //echo "<br>";
  }
}
?>
