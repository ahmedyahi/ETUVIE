<?php 
	session_start();
?>

    <html>
		<head classe = "header">
			<link rel="shortcut icon" href="logo.ico" type="logo-icon">
			<link rel="icon" href="logo.ico" type="logo-icon">
			<title>Fiche ville</title>
			<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
			<style>
			<!-- Les cadres et le spans servent pour afficher une phrase au survol d'une icone -->
				.cadref {
					position: relative;   
					width: 50px;          
					overflow: hidden;     
					line-height: 2em;     
					display:inline;
				}
				.cadref img {
					z-index: 1;           
					position: relative;   
					width: 50px;          
				}
				.cadref span {
					display: none;
					position: absolute;  
					width:150px;
					margin-left:-150%;
					bottom:-100%;
					padding: 0 .25em;     
					color: #eee;         
					background: #069;     
					opacity:0.7;
					border-radius:10%;
				}
				.cadref .n {
				  font-size:10px;
				  display: none;
				  position: absolute;  
				  width:100px;
				  height:90px;
				  margin-left:-50%;
				  top:-50%;
				  padding: 0 .25em;     
				  color: #eee;         
				  background: #115A83;   
				  opacity:0.7;
				  border-radius:10%;
				 }
				.cadref:hover span{
				  display:block;
				  left: 1em;            
				}
				.cadref:hover .n{
				  display:block;
				  left:5em;
				  height:30px;
				}
			</style>			
		</head>
		<body>

			<?php include ("head2.php");	
				$Ville1= $_GET["Ville1"];
				$Ville2= $_GET["Ville2"];
				if($_GET["Ville1"]==$_GET["Ville2"]){
					$s="Veuillez choisir deux villes différentes.";
					echo '<meta http-equiv="Refresh" content="0; selection comparateur.php?s='.$s.'">';
				}
				include('bd.php'); 
				$bdd = getBD();	
				$rep=$bdd->query('select * from villes where Ville=\''.$Ville1.'\''); 
				$ligne=$rep->fetch();
				$rep1=$bdd->query('select * from villes where Ville=\''.$Ville2.'\''); 
				$ligne1=$rep1->fetch();
				include 'note_culture.php';
				include 'note_sport.php';
				include 'note_crous.php';
				include 'note_meteo.php';
				include 'note_transport.php';
				include  'note_securite.php';
				include  'note_loyer.php';
				/*On calcule la note pour la première ville*/
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
			
			<div  class="compa">
				<table style='box-sizing: content-box;width: 200px;height:200px;border:none;background-color:#115A83;border: 3px solid color:#9c9c9c;' class='table_formulaire'>
					<thead>
							<tr>
								<th>
										<!-- On affiche l'image et le nom de la première ville-->
										<?php echo "<a href='fiche_ville.php?Ville=".$ligne["Ville"]."' >" ?><img id="ville" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /></a>
										<div style="margin-left:90px;margin-right:90px;font: italic small-caps bold 33px cursive;color:#fff ;"> <?php echo $ligne["Ville"]; ?> 
									
								</th>
										
								<th>
										<!-- On affiche l'image et le nom de la deuxième ville-->
										<?php echo "<a href='fiche_ville.php?Ville=".$ligne1["Ville"]."' >" ?><img id="ville" src= <?php echo  $ligne1["url_photo"];?> alt="Image ville"  /></a>
										<div style="margin-left:90px;margin-right:90px;font: italic small-caps bold 33px cursive;color:#fff;"> <?php echo $ligne1["Ville"]; ?> 
								</th>
							</tr>
					</thead>
					<tbody>
							<tr>
								<th>
										<!-- Cette fonction permet d'afficher un score sur 5 étoiles pour la première ville -->
										<?php include 'etoiles.php';
										etoiles($value1);?>
						
										<div style='float:left;padding-left:4em;font: italic small-caps bold 22px cursive; ' id="note">	
											<?php $note=($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7;
											$note=round($note,1);
											echo "<div class='cadref'>";
											echo "<span class='n'>"."Note globale"."</span>";	
											echo $note; /*On affiche la note pour la première ville  */
											echo "</div>";
											?>
										</div>
									</div>
									<div class="cadref"> 
									<span>lire les avis</span>
									<?php echo " <a  class = 'bouton_avis' href='lectureAvis.php?Ville=".$ligne["Ville"]."' >" ?> <img class = "icone" style="float:right ; width: 60px;px;height: 60px;" src = 'lire-avis2.png'></a> </div>
								</th> 
								<th>
									<?php  
										/*On calcule la note pour la deuxième ville */
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
										etoiles($value2);?> <!-- Cette fonction permet d'afficher un score sur 5 étoiles pour la deuxième ville -->

			
										<div style='float:left;padding-left:4em;font: italic small-caps bold 22px cursive; ' id="note">
											<?php $note2=($culture1+$sport1+$crous1+$meteo1+$transport1+$securite1+$loyer1)/7;
											$note2=round($note2,1);
											echo "<div class='cadref'>";
											echo "<span class='n'>"."Note globale"."</span>";
											echo $note2; /*On affiche la note pour la deuxième ville  */
											echo "</div>";
											?>
										</div>
										<div class="cadref"> 
										<span>Pour lire les avis</span>	
										<?php echo " <a style='color:black;' class = 'bouton_avis' href='lectureAvis.php?Ville=".$ligne1["Ville"]."' >" ?> <img class =" icone" style="float:right ; width: 60px;px;height: 60px;" src = 'lire-avis2.png'></a> </div>
								</th> 
							</tr>
							<tr>
								<th style ='border-radius:10px; background-color:#fff;border: 3px solid #fff;'>
									<?php
									/*On crée et affiche le graphe pour la première ville */
										include 'graph_ficheVille.php';
										if(file_exists("graph_ficheVille.jpg")) {
											unlink("graph_ficheVille.jpg");
											}
										GenerateGraph($culture,$sport,$crous,$meteo,$transport,$securite,$loyer);?>
										<img id="graph" src="graph_ficheVille.jpg" style='height:250 px;width:600px;border-radius:15%;padding:10px;padding-bottom:40px' />	
								</th>
								<th style ='border-radius:10px; background-color:#fff;border: 3px solid #fff;' >
									<?php
										if(file_exists("graph_ficheVille2.jpg")) {
											unlink("graph_ficheVille2.jpg");
											}
											/*On crée et affiche le graphe pour la deuxième ville */
										GenerateGraph2($culture1,$sport1,$crous1,$meteo1,$transport1,$securite1,$loyer1);?>
										<img id="graph" src="graph_ficheVille2.jpg"  style='height:250 px;width:600px;border-radius:15%;padding:10px;padding-bottom:40px'/>	
								</th>
							</tr>
				
				</table>	
			</div>
			
			<div id="menu_pied">
				<?php include ("menu.php");?>
			</div>
			<?php include ("foot2.php");?>
			
		</body>
    </html>
   