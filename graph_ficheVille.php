<?php // content="text/plain; charset=utf-8"
function GenerateGraph($culture,$sport,$crous,$meteo,$transport,$securite,$loyer){
require_once ('../../php/jpgraph/src/jpgraph.php');
require_once ('../../php/jpgraph/src/jpgraph_bar.php');

$datay=array($culture,$sport,$crous,$meteo,$transport,$securite,$loyer);

$graph = new Graph(680,400,'auto');
$graph->SetScale("textlin",-3,11);
$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->Set90AndMargin(60,50,50,50);
$graph->img->SetAngle(90); 

$graph->SetBox(false);
$graph->yaxis->SetTickPositions(array(-3,-2,-1,0,1,2,3,4,5,6,7,8,9,10,11));
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Culture','Sport','Crous','Clemence Météo','Transport','Sécurité','Loyer'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->yaxis->hide();
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,10);
$graph->xaxis->SetColor('white');

$graph->xgrid->Show();
$graph->xgrid->SetColor('white');



$graph->SetBackgroundGradient('#9DB6C1', '#9DB6C1', GRAD_HOR, BGRAD_PLOT,);


$b1plot = new BarPlot($datay);

$graph->Add($b1plot);
$b1plot->SetWeight(0);
$b1plot->SetFillGradient("#115A83","#115A83",GRAD_HOR);
$b1plot->SetWidth(17);

$txt = new Text("$culture");
$txt->SetPos(595,65);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 
$txt = new Text("$sport");
$txt->SetPos(595,105);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 
$txt = new Text("$crous");
$txt->SetPos(595,150);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 
$txt = new Text("$meteo");
$txt->SetPos(595,195);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 
$txt = new Text("$transport");
$txt->SetPos(595,235);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 
$txt = new Text("$securite");
$txt->SetPos(595,280);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 
$txt = new Text("$loyer");
$txt->SetPos(595,320);
$txt->SetColor('white'); 
$txt->SetFont(FF_VERDANA,FS_BOLD,15);
$txt->SetBox('#9DB6C1','#9DB6C1');
$graph->AddText($txt); 

$graph->Stroke("graph_ficheVille.jpg");
}
?>