<?php // content="text/plain; charset=utf-8"
function GenerateGraph($culture,$sport,$crous,$meteo,$transport,$securite,$loyer){
require_once ('../php/jpgraph/src/jpgraph.php');
require_once ('../php/jpgraph/src/jpgraph_bar.php');

$datay=array($culture,$sport,$crous,$meteo,$transport,$securite,$loyer);

// Create the graph. These two calls are always required
$graph = new Graph(700,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->Set90AndMargin(50,40,40,40);
$graph->img->SetAngle(90); 

// set major and minor tick positions manually
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->yaxis->SetTickPositions(array(0,1,2,3,4,5,6,7,8,9,10,11));
//$graph->yscale->scale->SetGrace(90,10);
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Culture','Sport','Crous','Clemence Météo','Transport','Sécurité','Loyer'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->yaxis->hide();
$graph->xaxis->SetFont(FF_ARIAL,FS_NORMAL,9);
$graph->xaxis->SetColor('black');
$graph->SetAxisLabelBackground('#9DB6C1');
// For background to be gradient, setfill is needed first.
$graph->SetBackgroundGradient('#9DB6C1', '#9DB6C1', GRAD_HOR, BGRAD_PLOT);

// Create the bar plots
$b1plot = new BarPlot($datay);

// ...and add it to the graph
$graph->Add($b1plot);

$b1plot->SetWeight(0);
$b1plot->SetFillGradient("#115A83","#115A83",GRAD_HOR);
$b1plot->SetWidth(17);

// Display the graph
$graph->Stroke("graph_ficheVille.jpg");
}
?>