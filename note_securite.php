<?php 
		function noteSecurite($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep2=$bdd->query('select * from securite where crimes=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$ind="Coefficient";
			$rep3=$bdd->query('select * from securite where crimes=\''.$ind.'\''); 
			$ligne3=$rep3->fetch();
			$securite=0;
			$i=1;
			while($i < 107){
				$securite=$securite+($ligne2["$i"]*$ligne3["$i"]);
				$i++;
			}
			$securite=$securite/100;
			if($securite>172 & $securite<=1001){ $nsecurite=10;}
			else if($securite>1001 & $securite<=1830){ $nsecurite=9;}
			else if($securite> 1830 & $securite<=2659){ $nsecurite=8;}
			else if($securite>2659&  $securite<=3488){ $nsecurite=7;}
			else if($securite>3488& $securite<=4317){ $nsecurite=6;}
			else if($securite> 4317 &  $securite<=5146){ $nsecurite=5;}
			else if($securite >5146 &  $securite<=5976){ $nsecurite=4;}
			else if($securite>5976 &  $securite<=6805){ $nsecurite=3;}
			else if($securite>6805 &  $securite<=7634){ $nsecurite=2;}
			else if($securite>7634){ $nsecurite=1;}
			return $nsecurite;	
		}
		?>