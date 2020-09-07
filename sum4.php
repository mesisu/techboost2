<?php
 function max_array($arr){
     // とりあえず、配列の１番目の要素を$max_numberという変数に格納しておく
     $max_number = $arr[0];
     foreach($arr as $abc){
         // foreachによって、$arrという配列から順番に値を取り出す。
         // 取り出された値は$aという変数に格納されている
         if($max_number < $abc){
          $max_number = $abc;
         }
         // 取り出された$aと、$max_numberを比較する（if文）
         // $aが$max_numberよりも大きい数字の場合、$max_number = $a;を行い、$max_numberを上書きする
     }
     return $max_number;
 }
 echo max_array(array(5,1,2,3,10,100,4));