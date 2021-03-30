
		<?php 
		function noteCulture($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from culture where Ville=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$tot=$ligne2['nbCinema']+$ligne2['nbFestival']+$ligne2['nbBiblio']+$ligne2['nbMusee'];	
			$cult=($tot/($ligne1['Habitants']/$ligne1['Superficie']))*10;	
			if($cult>0 & $cult<=0.1){ $ncult=1;}
			else if($cult>0.1 & $cult<=0.2){ $ncult=2;}
			else if($cult> 0.2 & $cult<=0.3){ $ncult=3;}
			else if($cult>0.3 &  $cult<=0.4){ $ncult=4;}
			else if($cult>0.4 & $cult<=0.5){ $ncult=5;}
			else if($cult> 0.5 &  $cult<=0.6){ $ncult=6;}
			else if($cult >0.6 &  $cult<=0.7){ $ncult=7;}
			else if($cult>0.7 &  $cult<=0.8){ $ncult=8;}
			else if($cult>0.8 &  $cult<=0.9){ $ncult=9;}
			else if($cult>0.9){ $ncult=10;}
			return $ncult;
		}
				
			
			
		?>
		  
      