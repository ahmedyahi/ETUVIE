<?php
 session_start();
 ?>

    <html>
    <head classe = "header">
	<title>Fiche ville</title>
    <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
    </head>
       <body>

		  <?php include ("head2.php");?>	
       
		<?php
			$Ville= $_GET["Ville"];
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from villes where Ville=\''.$Ville.'\'');
			$rep1=$bdd->query('select * from villes '); 			
			$ligne=$rep->fetch();
		
		?>
		<div id="search">
		<form method="GET" action="fiche_ville.php"  autocomplete="off">
			  <select name="Ville">
			  <?php 
					while($ligne1=$rep1->fetch()){
						echo "<option>". $ligne1["Ville"]."</option>";
					}
				
				 ?> 
			</select>
			  <input type="submit" value="Rechercher" class = 'bouton_submit'/>
	   </form>
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
		<table class="table_fiche">
		     <thead>
                    <tr>
                        <th><img id="ville1" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /></th>
                    </tr>
                </thead>
             
                    <tr>
                        <th> 	<?php echo $ligne["Ville"]; ?> 
						
				<?php include 'etoiles.php';
					 etoiles($value1);
				?>
		
		<div id="note">
        <?php $note=($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7;
			$note=round($note,1);
			echo $note;
			?>
			</div>
			 <?php echo "  <a  class = 'bouton_avis' href='lectureAvis.php?Ville=".$ligne["Ville"]."' >" ?> Lire les avis </a>
			 <?php
			 if (isset($_SESSION['users'])){ 
					if(isset($_GET['tmp'])){
						
						echo "  <a  class = 'bouton_preferes' href='elimPref.php?id=".$_GET['id']."&ville=".$ligne["Ville"]."' >" ?>   Eliminer des mes préférés.</a>
					<?php }
					
					if(!isset($_GET['tmp']) || !$_GET['tmp']){
						echo "  <a  class = 'bouton_preferes' href='ajoutPref.php?ville=".$ligne["Ville"]."' >" ?>   Ajouter à mes préférés.</a> 
				<?php	}
			} ?>
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
		
	 <div id="menu_pied">
                    <?php include ("menu.php");?>
                    </div>
		
		<?php include ("foot2.php");?>
        </body>
		
    </html>