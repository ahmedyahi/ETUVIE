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
			text-align:center;
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
		#ville1{
			width:680px;
			height:250px;
			border-radius:60px;
			margin-top:20px;
	
		}
		
		.compa1{
			display:table;
			margin:auto;
			top:20%;
			bottom:20%;
			position:center;
		}
		
	
	</style>   

    </head>
       <body>

		 
        <?php include ("head2.php");?>	
		<?php
			$Ville= $_GET["Ville"];
			
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$ligne=$rep->fetch();
		
		?>
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
			$value1+=10;
		?>
		 
		</div>
		<div class="compa1">
		<table >
		     <thead>
                    <tr>
                        <th><img id="ville1" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /></th>
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
			
			</div> 
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
		</tr>
		</table>	
		
			
		</div>
	<div>
		<?php include ("foot2.php");?>
		</div>
        </body>
    </html>