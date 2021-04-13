<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head classe = "header">
		<link rel="shortcut icon" href="logo.ico" type="logo-icon">
		<link rel="icon" href="logo.ico" type="logo-icon">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
		<TITLE>Déposer un avis</TITLE>
    </head>
    <body>
	 	<?php include ("head2.php");
		/*Un utilisateur qui est pas connécté ne peut pas donner des avis*/
        	if (!isset($_SESSION['users'])){
			 	echo "<p style=margin-top:50px;text-align:center;> Pour pouvoir laisser un avis,vous devez d'abord vous inscrire au site ou vous connetre avec votre compte. </p>";
			}
		?>			
		<?php /*Un utilisateur qui est connécté  peut donner des avis*/
			if (isset($_SESSION['users'])){ ?>
			 <?php if(isset($_GET["e"])){ /*Si la page ajout renvoie une phrase d'erreur alors on affiche la phrase d'erreur*/
                        echo "<div style ='padding-bottom :50px ;width : 200px ; height : 50 px;' class = 'table_formulaire';>";
                            echo "<p style='color: red'>";?>
                                <img class = icone style="width: 50px;height: 50px; display:block; margin-right:auto; margin-left:auto;" src = 'attention.png'/>
                                <?php echo $_GET["e"];
                            echo  "</p>";
                        echo "</div>";
            
                    }?>
        		<div class="table_formulaire">
					<a href  = "historiqueAvis.php?id"><img class = icone style="width: 75px;height:75px;" src = 'historique.png'></a>
					<form method="POST" action="ajoutAvis.php" autocomplete="off">
						<input type="hidden" name="id" step=0 value="<?php $_SESSION['users'][0]; ?> "/>
						<p>
							<?php
								include('bd.php'); 
								$bdd = getBD();	
								$rep=$bdd->query('select * from villes'); 
							?>
	
							Ville :
							<select name="ville">
								<?php 
									while($ligne=$rep->fetch()){
										echo "<option>". $ligne["Ville"]."</option>";
										}
								?> 
							</select>
						</p>
						<p>
							Votre avis sur la ville : <br>
							<TEXTAREA rows="10" name="avis" placeholder="Tapez ici votre avis">
							</TEXTAREA>
						</p>

						<p>
							
							<input type="radio" name="respect" value="oui" >Le language de mon commentaire est approprié et respectueux 
						</p>
						<p>
							<INPUT type="submit" value="Envoyer mon avis"/>
						</p>
					</form>
        		</div>
			<?php } ?>
    
			<div id="menu_pied">
				<?php include ("menu.php");?>
			</div>
			<?php include ("foot3.php");?>
        </body>
    </html>
