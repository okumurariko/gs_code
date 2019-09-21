<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>

<div action="write.php" method="post">
    <div class="element">
        <div class="item">
            <label>A</label>
        </div>
        <div>
            <input type="radio" name="a1" value="1">YES
            <input type="radio" name="a1" value="0">NO
        </div>
    </div>
<input id="btn" type="submit" value="送信">
</div>


<ul>
<li><a href="index.php">index.php</a></li>
</ul>

<script>
    $("#btn").on("click",function(){

    });

</script>

</body>
</html>