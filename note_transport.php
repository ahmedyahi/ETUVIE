	<?php 
		function noteTransport($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from transport where Ville=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$tot=($ligne2['nombre_arrets']/($ligne1['Habitants']/$ligne1['Superficie']));
			$transport=$tot*($ligne2['prix/an']/100);
			if($transport>0.23 & $transport<=0.5){ $ntransport=1;}
			else if($transport>0.5 & $transport<=0.76){ $ntransport=2;}
			else if($transport> 0.76 & $transport<=1.02){ $ntransport=3;}
			else if($transport>1.02&  $transport<=1.54){ $ntransport=4;}
			else if($transport>1.54 & $transport<=1.8){ $ntransport=5;}
			else if($transport> 1.8 &  $transport<=2.06){ $ntransport=6;}
			else if($transport >2.06 &  $transport<=2.32){ $ntransport=7;}
			else if($transport>2.32 &  $transport<=2.58){ $ntransport=8;}
			else if($transport>2.58 &  $transport<=2.8){ $ntransport=9;}
			else if($transport>2.8){ $ntransport=10;}
			return $ntransport;	
		}
		?>
		  