<?php
$a1 = $_POST["a1"];
// $mail = $_POST["mail"];
// $age  = $_POST["age"];
// $memo = $_POST["memo"];
// $c    = ",";   
// $str  = $name.$c.$mail.$c.$age.$c.$memo;
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>書き込みました</h1>

<?php
echo $a1;
//文字作成
$date = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $date.$a1."\r\n");
fclose($file);
?>


<ul>

<li><a href="#">戻る</a></li>
</ul>
</body>
</html>