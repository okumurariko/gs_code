<?php
// $d = date("Y年m月d日  H:i:s");
// echo $d;
$d = date("H");
// $d =20;
echo '<style>';
if($d>1 && $d<18){
    echo 'body{background:#F00;}';
}else if($d>=19 && $d<23){
    echo 'body{background:#000;}';
}
echo '<style>';
?>