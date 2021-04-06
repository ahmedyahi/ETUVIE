<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head classe = "header">
		<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
		<TITLE>Déposer un avis</TITLE>
    </head>

    <body>
	 <?php include ("head2.php");?>	
		
          <?php
                if (!isset($_SESSION['users'])){
					
						 echo "<p style=margin-top:50px;text-align:center;> Pour pouvoir laisser un avis,vous devez d'abord vous inscrire au site ou vous connetre avec votre compte. </p>";
				}
			?>			
         
    </div>
	
					
	
	<?php
	if (isset($_SESSION['users'])){ ?>
		

        <div class="table_formulaire">

        <form method="GET" action="ajoutAvis.php" autocomplete="off">
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
        	Le language de mon commentaire est approprié et respectueux :
        	<input type="checkbox" name="respect">
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
		<?php include ("foot2.php");?>
        </body>
    </html>
