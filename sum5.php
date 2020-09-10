//strip_tags この関数は、指定した文字列 (str) から全ての NULL バイトと HTML および PHP タグを取り除きます。 この関数は、fgetss() 関数と同じタグ除去アルゴリズムを使用します。
strip_tags ( string $str [, mixed $allowable_tags ] ) : string

//array_push
$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);

//array_merge 一つ、或いは、複数の配列をマージ(統合)し、マージした配列を返します。
$ary1 = array('A');
$ary2 = array('B');
$ary3 = array_merge($ary1, $ary2);
echo $ary3[0]."<br/>\n";
echo $ary3[1]."<br/>\n";
?>

//time,mktime 指定した日時のタイムスタンプを取得
<?php
  $time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(10, 10, 10);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');


//date 指定された引数 timestamp を、与えられた フォーマット文字列によりフォーマットし、日付文字列を返します。 タイムスタンプが与えられない場合は、現在の時刻が使われます。
date ( string $format [, int $timestamp = time() ] ) : string


