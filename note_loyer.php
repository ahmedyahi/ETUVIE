<?php 
		function noteLoyer($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from loyer where Ville=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$tot1=0;
			$tot2=0;
			while($ligne2=$rep2->fetch()){
				$tot1=$tot1+(($ligne2["Loyer_moyen"]/$ligne2["Surface_moyenne"])*$ligne2["Nbre_pièces"]);
				$tot2=$tot2+$ligne2["Nbre_logements"];
			}
			$tot2=$tot2/$ligne1["Superficie"];
			$loyer=$tot2/$tot1;
			if($loyer>137 & $loyer<=611){ $nloyer=1;}
			else if($loyer>611& $loyer<=1084){ $nloyer=2;}
			else if($loyer> 1084& $loyer<=1557){ $nloyer=3;}
			else if($loyer>1557&  $loyer<=2030){ $nloyer=4;}
			else if($loyer>2030& $loyer<=2504){ $nloyer=5;}
			else if($loyer> 2504&  $loyer<=2977){ $nloyer=6;}
			else if($loyer >2977 &  $loyer<=3450){ $nloyer=7;}
			else if($loyer>3450 &  $loyer<=3923){ $nloyer=8;}
			else if($loyer>3923 &  $loyer<=4396){ $nloyer=9;}
			else if($loyer>4396){ $nloyer=10;}
			return $nloyer;	
		}
		?>