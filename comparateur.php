<?php 
	session_start();
?>

    <html>
    <head classe = "header">
	<title>Fiche ville</title>
    <link rel="stylesheet" href="styleH.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
		.tde{
			height:20px;
			width:20px;
			cursor:pointer;
			}
	    #glob {display: flex;}
		table{
			margin-top:0px;
		}
		#graph{
			display:block;
			margin:auto;
			position:relative;
			float:right;
			
			
		}
		#note{
			display:inline-block;
			position:relative;
			width:30px;
			border:0;
			background-color:#115A83;
			color:white;
			font-size:20px;
			border-radius: 10px;
		}
		#ville{
			height:150px;
			width:150px;
			border-radius:60px;
			margin-top:20px;
	
		}
		
		.compa{
			display:inline;
		}
		
	
	</style>   

    </head>
       <body>

		 
        <?php include ("head2.php");?>	
		<?php
			$Ville1= $_GET["Ville1"];
			$Ville2= $_GET["Ville2"];
			//$Ville="Montpellier";
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from villes where Ville=\''.$Ville1.'\''); 
			$ligne=$rep->fetch();
			$rep1=$bdd->query('select * from villes where Ville=\''.$Ville2.'\''); 
			$ligne1=$rep1->fetch();
		
		?>
		<?php
			include 'note_culture.php';
			include 'note_sport.php';
			include 'note_crous.php';
			include 'note_meteo.php';
			include 'note_transport.php';
			include  'note_securite.php';
			include  'note_loyer.php';
			$culture=noteCulture($Ville1);
			$sport=noteSport($Ville1);
			$crous=noteCrous($Ville1);
			$meteo=noteMeteo($Ville1);
			$transport=noteTransport($Ville1);
			$securite=noteSecurite($Ville1);
			$loyer=noteLoyer($Ville1);
			$value1=(($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7)*10;
			$value1+=10;
		?>
		 
		</div>
		<div class="compa">
		<table class='table_formulaire'>
		     <thead>
                    <tr>
                        <th><img id="ville" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /></th>
						<th><img id="ville" src= <?php echo  $ligne1["url_photo"];?> alt="Image ville"  /></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th> 	<?php echo $ligne["Ville"]; ?> 
			<div style="display:inline-block;position:relative;width:100px;">
			<div style="height:20px; width: <?=$value1;?>px; background:#E0E001;" >
				
				<div id="glob">
				
					<img id="tde_1" src="star.png" alt="image etoiles" class="tde" />
					<img id="tde_2" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_3" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_4" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_5" src="star.png" alt="image etoiles" class="tde"/>
				</div>
			</div>
		</div>
		
		<div id="note">
        <?php $note=($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7;
			$note=round($note,1);
			echo $note;
			?>
			</div>
		</th> 
		<th> 	<?php echo $ligne1["Ville"]; ?> 
		<?php
			$culture1=noteCulture($Ville2);
			$sport1=noteSport($Ville2);
			$crous1=noteCrous($Ville2);
			$meteo1=noteMeteo($Ville2);
			$transport1=noteTransport($Ville2);
			$securite1=noteSecurite($Ville2);
			$loyer1=noteLoyer($Ville2);
			$value2=(($culture1+$sport1+$crous1+$meteo1+$transport1+$securite1+$loyer1)/7)*10;
			$value2+=10;
			include 'graphe2.php';
		
		?>
			<div style="display:inline-block;position:relative;width:100px;">
			<div style="height:20px; width: <?=$value2;?>px; background:#E0E001;" >
				
				<div id="glob">
				
					<img id="tde_1" src="star.png" alt="image etoiles" class="tde" />
					<img id="tde_2" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_3" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_4" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_5" src="star.png" alt="image etoiles" class="tde"/>
				</div>
			</div>
		</div>

		<div id="note">
        <?php $note2=($culture1+$sport1+$crous1+$meteo1+$transport1+$securite1+$loyer1)/7;
			$note2=round($note2,1);
			echo $note2;
			?>
			</div>
		</th> 
		</tr>
		 
			<tr>
		<th>
		<?php

			include 'graph_ficheVille.php';
			if(file_exists("graph_ficheVille.jpg")) {
			unlink("graph_ficheVille.jpg");
			}
			GenerateGraph($culture,$sport,$crous,$meteo,$transport,$securite,$loyer);
		?>		<img id="graph" src="graph_ficheVille.jpg" />	</th>
		<th>
		<?php
	
			if(file_exists("graph_ficheVille2.jpg")) {
			unlink("graph_ficheVille2.jpg");
			}
			GenerateGraph2($culture1,$sport1,$crous1,$meteo1,$transport1,$securite1,$loyer1);
		?>		<img id="graph" src="graph_ficheVille2.jpg" />	</th>
		</tr>
   		 
		</table>	
		
			
		</div>

		<?php include ("foot2.php");?>
        </body>
    </html>
   