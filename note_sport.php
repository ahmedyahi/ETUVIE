
		<?php 
		function noteSport($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from sport where Ville=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$tot=$ligne2['nbEquipements']+$ligne2['nbInstallations'];	
			$sport=($tot/($ligne1['Habitants']/$ligne1['Superficie']));
			if($sport>0 & $sport<=0.1){ $nsport=1;}
			else if($sport>0.1 & $sport<=0.2){ $nsport=2;}
			else if($sport> 0.2 & $sport<=0.3){ $nsport=3;}
			else if($sport>0.3 &  $sport<=0.4){ $nsport=4;}
			else if($sport>0.4 & $sport<=0.5){ $nsport=5;}
			else if($sport> 0.5 &  $sport<=0.6){ $nsport=6;}
			else if($sport >0.6 &  $sport<=0.7){ $nsport=7;}
			else if($sport>0.7 &  $sport<=0.8){ $nsport=8;}
			else if($sport>0.8 &  $sport<=0.9){ $nsport=9;}
			else if($sport>0.9){ $nsport=10;}
			return $nsport;	
		}
		?>
		  
      

   