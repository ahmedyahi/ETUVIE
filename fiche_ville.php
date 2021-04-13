<?php
 session_start();
 ?>
    <html>
    	<head classe = "header">
			<title>Fiche ville</title>
    		<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
    		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
			<link rel="shortcut icon" href="logo.ico" type="logo-icon">
			<link rel="icon" href="logo.ico" type="logo-icon">
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
			  margin-left:-90%;
			  bottom:-250%;
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
			  width:300px;
			  heigth:90px;
			  margin-left:-200%;
			  top:-50%;
			  padding: 0 .25em;     
			  color: #eee;         
			  background: #115A83;   
			  opacity:0.7;
			  border-radius:10%;
			  
			}
			.cadref:hover .pref{
			  display:block;
			  left: -5em; 
			  font-size:15px;
			  width:200px; 
			  top:-30px;
			  margin-left:-150%;
			   height:50px;  
			}
			.cadref:hover span{
			  display:block;
			  left: -5em;            
			}
			.cadref:hover .n{
			  display:block;
			  left: 15em; 
			  height:30px;
			}
		</style>
    	</head>
       <body>
		  <?php include ("head2.php");	
			$Ville= $_GET["Ville"];
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from villes where Ville=\''.$Ville.'\'');
			$rep1=$bdd->query('select * from villes '); 			
			$ligne=$rep->fetch();?>
			<div id="search">
				<form method="GET" action="fiche_ville.php"  autocomplete="off">
			  		<select name="Ville">
			  			<?php 
						while($ligne1=$rep1->fetch()){
							echo "<option>". $ligne1["Ville"]."</option>";
						}?> 
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
					/*On calcule les notes pour chaque critère */
					$culture=noteCulture($Ville);
					$sport=noteSport($Ville);
					$crous=noteCrous($Ville);
					$meteo=noteMeteo($Ville);
					$transport=noteTransport($Ville);
					$securite=noteSecurite($Ville);
					$loyer=noteLoyer($Ville);
					$value1=(($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7)*10;
					$value1+=10; /*Cette valeur sert pour la notation en étoiles de la ville: 100% donc 10 points*10 correspondent à 5 étoiles.
					Vu que les notes des villes sont proche entre elles et que en général ne sont pas plus grande de 6/7,on ajout un dix à cette note pour la notation en étoiles */
				?>
			</div>
			<div class="compa1">
				<table style='box-sizing: content-box;width: 100%;height:100%;background-color:#115A83;' class="table_formulaire">
		     		<thead>
                    	<tr>
							<th>
							<!-- On affiche l'image de la ville-->
							<div style ='border-radius:10px;padding-bottom:22px'><img id="ville1" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /></div>
							<div style="display:block;padding-top:2px;">
							<img class = icone style="float:right;display:inline;margin-right:1em ; width: 60px;height: 60px;padding-top:5px; " src = 'etuvie.jpg'></div>
							<div class="cadref"> 
							<span>Pour lire les avis</span>	
							<?php echo " <a class = 'bouton_avis' href='lectureAvis.php?Ville=".$ligne["Ville"]."' >" ?> <img class = icone style="float:right;display:block;margin-right:1em ; width: 60px;height: 60px;padding-top:5px; " src = 'lire-avis2.png'></a>
							</div>
							</div>
                    		<div style="float:left;margin-left:90px;margin-right:90px;font: italic small-caps bold 33px cursive;color:#fff ;">
								<?php echo $ligne["Ville"]; ?>
								<!-- On affiche la notation en 5 étoiles de la ville  -->
								<?php include 'etoiles.php';
											etoiles($value1);?>
							</div>
							</th>
						</tr>
                	</thead>
                    	<tr >
                        	<th > 
							
						
									
							
								<div style='float:left;padding-left:4em;font: italic small-caps bold 33px cursive; ' id="note">
        							<?php $note=($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7;
									/* On affiche la note globale de la ville  */
									$note=round($note,1);
									echo "<div class='cadref'>";
									echo "<span class='n'>"."Note globale"."</span>";	
									echo $note;
									echo "</div>";
									?>
								<div >
										<div >
											<?php include 'etoile.php'; ?></div>
											<div class="av1">
											<!-- Appel fonction pour bouton préféré : si on  ajoute aux préférés alors l'étoile devient jaune avec valeur 20 en paramètre qui remplit,
												si on doit enlever l'étoile devient blanche avec valeur en paramétre zéro qui vide-->
												<?php
												$bool=FALSE;
												/*on peut ajouter aux préférés seulement si on est connécté*/
												if(isset($_SESSION['users'])){ 
													$rep2=$bdd->query('select * from preferes where username=\''.$_SESSION['users'][0].'\'');	
													while(!$bool && $ligne2=$rep2->fetch()){
														if($ligne2["ville"]==$ligne["Ville"]){
																$bool=TRUE;	 /*on cherche si la ville est dans les préférés de l'utilisatuer connécté ou pas.*/
														}
													}
													if($bool){ /*si oui alors l'étoile est remplie et on  clique au dessus pour éliminer des préférés et vider l'étoile*/
														echo "<div class='cadref'>";
														echo "<span class='pref'>"."Elimine de tes préférés"."</span>";							
														echo "  <a id='pref' class = 'bouton_preferes' href='elimPref.php?id=".$ligne2['id']."&ville=".$ligne['Ville']."' >" ?> <?php etoile(20); ?> </a>
														</div>			
												<?php } 
													else { /*si non alors l'étoile est vide et on clique au dessus pour ajouter aux préférés et remplir l'étoile*/
														echo "<div class='cadref'>"; 
														echo "<span class='pref'>"."Ajout à tes préférés"."</span>";	
														echo "  <a  class = 'bouton_preferes' href='ajoutPref.php?ville=".$ligne['Ville']."' >"   ?> <?php etoile(0); ?> </a>
														</div>		
												<?php  }		
												} ?>
											</div>
										</div>
							</th>
							 
						</tr>
						<tr>
							<th style ='border-radius:15px; background-color:#fff;border: 3px solid #fff;'>
										
									<?php
									/*On élimne si on a sauvegardé une image pour le graphe(sinon erreur) et on construit l'image du graphe avec l'appel à la fonction generateGraph*/
									include 'graph_ficheVille.php';
									if(file_exists("graph_ficheVille.jpg")) {
										unlink("graph_ficheVille.jpg");
										}
									GenerateGraph($culture,$sport,$crous,$meteo,$transport,$securite,$loyer);?>
									<img  style="margin-left:90px;margin-right:90px;margin-bottom:30px;margin-top:30px;border-radius:8%;" id="graph" src="graph_ficheVille.jpg" />	</th>
										
						</tr>
		</table>	
		
			
		</div>
		
	 <div id="menu_pied">
                    <?php include ("menu.php");?>
                    </div>
		
		<?php include ("foot2.php");?>
        </body>
		
    </html>