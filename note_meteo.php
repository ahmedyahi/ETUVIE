<?php 
		function noteMeteo($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from meteo where nomVille=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$tot1=(($ligne2['Temp_max']*0.3)+(($ligne2['Ensoleillement']/100)*0.4))/0.7;
			$tot2=(($ligne2['Temp_min']*0.3)+(($ligne2['Pluviometrie']/20)*0.2)+($ligne2['Jours_orage']*0.1)+($ligne2['Jours_neige']*0.1))/0.7;	
			$meteo=$tot1/$tot2;
			if($meteo>0.71 & $meteo<=0.82){ $nmeteo=1;}
			else if($meteo>0.82 & $meteo<=0.92){ $nmeteo=2;}
			else if($meteo> 0.92 & $meteo<=1.01){ $nmeteo=3;}
			else if($meteo>1.01&  $meteo<=1.20){ $nmeteo=4;}
			else if($meteo>1.20 & $meteo<=1.29){ $nmeteo=5;}
			else if($meteo> 1.29 &  $meteo<=1.38){ $nmeteo=6;}
			else if($meteo>1.38 &  $meteo<=1.48){ $nmeteo=7;}
			else if($meteo>1.48 &  $meteo<=1.57){ $nmeteo=8;}
			else if($meteo>1.57 &  $meteo<=1.66){ $nmeteo=9;}
			else if($meteo>1.66){$nmeteo=10;}
			return $nmeteo;
		}					
?>