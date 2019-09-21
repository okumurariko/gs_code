<?php
require_once ('/home/samurai/jpgraph.php');
// 折れ線グラフ用のファイルを読み込む
require_once ('/home/samurai/jpgraph/jpgraph_line.php');
 
$x_data = array(8, 4, 10);
 
// グラフの生成
$graph = new Graph(400, 300);
$graph->SetScale('textlin');
 
$graph->SetMarginColor('white');
 
// タイトル
$graph->title->Set('samurai_graph');
 
// グラフ表示
$bar = new LinePlot($x_data);
$bar->value->Show();
$graph->Add($bar);
$graph->Stroke();
 
?>