<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     tr,td{
         border:1px solid #777;
     }
    </style>
</head>
<body>
<?php

// ファイルを変数に格納
$filename = 'data.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
echo "<table>";
while (!feof($fp)) {
    echo "<tr>";

  // fgetsでファイルを読み込み、変数に格納
  $txt = fgets($fp);
  $a = explode(",",$txt);
  echo "<td>".$a[0]."</td>";
  echo "<td>".$a[1]."</td>";
  echo "<td>".$a[2]."</td>";
  echo "<td>".$a[3]."</td>";
  echo "<td>".$a[4]."</td>";
 
//   // ファイルを読み込んだ変数を出力
//   echo $txt.'<br>';
  echo "</tr>";
 
}
echo "</table>";
 
// fcloseでファイルを閉じる
fclose($fp);

?>

</body>
</html>

