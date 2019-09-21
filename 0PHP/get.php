<html>
<head>
<meta charset="utf-8">
<title>GET練習</title>
</head>
<body>
<!-- <form action="get_confirm.php" method="POST">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	<input type="submit" value="送信">
</form> -->

<div id="message">
      <h1>Firebaseてすと</h1>
      <p>文字を入れると更新されます</p>
      <ul>
        <li id="chatText"></li>
        <li><input type="text" name="" id="my_text"></li>
        <li><a onclick="changeData()">更新</a></li>
      </ul>
    </div>

<?php
$url = "http://www.apilayer.net/api/live?access_key=0cc6a98dae893b5d911317219800c44a";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$decoded =  json_decode($json, true);
$timestamp = $decoded["timestamp"];
// echo $timestamp;
// UNIX TIMESTAMPを取得
	$timestamp = time() ;
 
	// date()で日時を出力
	echo date( "Y/m/d" , $timestamp ) ;
 
	// 改行
	echo "<br><br>" ;
 
$decoded_2 = $decoded["quotes"];

echo $decoded_2["USDJPY"];

// $jn =  var_export($decoded);
// echo $jn;
// $jsonTest = json_encode($jn);


?>

<!-- <script type="text/javascript">
    var test = JSON.parse('<?php echo $jsonTest; ?>');
	console.log(test);
</script> -->



<ul>
<li><a href="index.php">index.php</a></li>
</ul>

<!--** 以下Firebase **-->
<!-- コピペ -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAITjzi2OBXVUiEONRZOmJWMa4owouNjus",
    authDomain: "changing-fa64f.firebaseapp.com",
    databaseURL: "https://changing-fa64f.firebaseio.com",
    projectId: "changing-fa64f",
    storageBucket: "",
    messagingSenderId: "856147512667",
    appId: "1:856147512667:web:5d43a01ada73f230bfde7e"
  };

  var database = firebase.database();

  document.addEventListener("DOMContentLoaded", function(){
      // DOM生成後に処理したい内容を書く。
  });

      var myChatAll = db.ref("/my/chat/all");

      function changeData(){
        var text = document.getElementById("my_text").value;
        myChatAll.set({title:"example", text:text});
      }

      myChatAll.on("value", function(snapshot) { 
        document.getElementById("chatText").innerText = snapshot.val().text;
      });


</script>
</body>


</html>
