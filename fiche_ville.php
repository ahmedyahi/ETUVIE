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
			top:500px;	
		}
		
	
	</style>   

    </head>
       <body>

		  
        <?php include ("head2.php");?>	
		<?php
			$Ville= $_GET["Ville"];
			//$Ville="Paris";
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne=$rep->fetch();
		
		?>
		<h2>		
			<?php echo $ligne["Ville"]; ?>
		</h2>
		 
		<img id="image" style="display:block;margin:auto;margin-top:50px;" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /> 
		
        <div class="tableau">
			<table class = "classement">
   		 		<thead id ="entete">
				<tr>
					<th colspan = "6" >   Voici la fiche de <?php echo $ligne["Ville"]; ?> </th
		   		</tr>
		   		</thead>   				
					
		<?php
			include 'note_culture.php';
			include 'note_sport.php';
			include 'note_crous.php';
			include 'note_meteo.php';
			include 'note_transport.php';
			include  'note_securite.php';
			include  'note_loyer.php';
			$culture=noteCulture($Ville);
			$sport=noteSport($Ville);
			$crous=noteCrous($Ville);
			$meteo=noteMeteo($Ville);
		
			$transport=noteTransport($Ville);
			$securite=noteSecurite($Ville);
			$loyer=noteLoyer($Ville);
			$value1=(($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7)*10;
		?>
	
		<?php
			include 'graph_ficheVille.php';
			GenerateGraph($culture,$sport,$crous,$meteo,$transport,$securite,$loyer);
		?>	
		<img id="graph" src="graph_ficheVille.jpg" />	
		
    	</table>
		</div>
		<div style="display:block;margin:auto;margin-top:-200px;margin-bottom:-200px;width:100px;">
			<div style="height:20px; 
			width: <?=$value1;?>px; 
			background:#E0E001;" >
				
				<div id="glob">
				
					<img id="tde_1" src="star.png" alt="image etoiles" class="tde" />
					<img id="tde_2" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_3" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_4" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_5" src="star.png" alt="image etoiles" class="tde"/>
		
					
				</div>
			</div>
		</div>
		
       
			
		<?php// include ("foot2.php");?>
        </body>
    </html>
   