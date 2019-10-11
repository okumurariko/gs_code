<?php
//1. POSTデータ取得
$book    = $_POST["book"];
$urls    = $_POST["urls"];
$comment = $_POST["comment"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
//prepareにSQLを渡す
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(book,urls,comment,indate)VALUES(:book,:urls,:comment,sysdate())");
//baindValue：変な文字が入ってきたときに、無効化するために必要
$stmt->bindValue(':book', $book, PDO::PARAM_STR );  //Integer（数値の場合 PDO::PARAM_INT) PDO::PARAM_STRは文字列
$stmt->bindValue(':urls', $urls, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':id',     $id,     PDO::PARAM_INT); 
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}

?>
