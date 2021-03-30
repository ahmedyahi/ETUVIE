<?php 
		function noteSecurite($Ville){
			$bdd = getBD();	
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne1=$rep1->fetch();
			$rep=$bdd->query('select * from securite'); 
			$ligne=$rep->fetch();
			$rep2=$bdd->query('select * from securite where crimes=\''.$Ville.'\''); 
			$ligne2=$rep2->fetch();
			$ind="Coefficient";
			$rep3=$bdd->query('select * from securite where crimes=\''.$ind.'\''); 
			$ligne3=$rep3->fetch();
			$securite=0;
			$i=1;
			while($ligne2["$i"]){
				$securite=$securite+($ligne2["$i"]*$ligne3["$i"]);
				$i++;
			}
			
			if($securite>16128 & $securite<=50084){ $nsecurite=1;}
			else if($securite>50084 & $securite<=84039){ $nsecurite=2;}
			else if($securite> 84039 & $securite<=117994){ $nsecurite=3;}
			else if($securite>117994&  $securite<=151950){ $nsecurite=4;}
			else if($securite>151950& $securite<=185905){ $nsecurite=5;}
			else if($securite> 185905 &  $securite<=219860){ $nsecurite=6;}
			else if($securite >219860 &  $securite<=253815){ $nsecurite=7;}
			else if($securite>253815 &  $securite<=287770){ $nsecurite=8;}
			else if($securite>287770 &  $securite<=321725){ $nsecurite=9;}
			else if($securite>321725){ $nsecurite=10;}
			return $nsecurite;	
		}
		?>