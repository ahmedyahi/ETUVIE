
<?php 
		function noteCrous($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from crous where Ville=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$crous=($ligne2['Restaurant']/($ligne1['Habitants']/$ligne1['Superficie']))*100;	
			if($crous>0 & $crous<=0.1){ $ncrous=1;}
			else if($crous>0.1 & $crous<=0.2){ $ncrous=2;}
			else if($crous> 0.2 & $crous<=0.3){ $ncrous=3;}
			else if($crous>0.3 &  $crous<=0.4){ $ncrous=4;}
			else if($crous>0.4 & $crous<=0.5){ $ncrous=5;}
			else if($crous> 0.5 &  $crous<=0.6){ $ncrous=6;}
			else if($crous >0.6 &  $crous<=0.7){ $ncrous=7;}
			else if($crous>0.7 &  $crous<=0.8){ $ncrous=8;}
			else if($crous>0.8 &  $crous<=0.9){ $ncrous=9;}
			else if($crous>0.9){ $ncrous=10;}
			return $ncrous;
		}					
?>
		  
      