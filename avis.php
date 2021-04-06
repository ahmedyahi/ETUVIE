<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head classe = "header">
		<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />	
		<TITLE>Lire les avis</TITLE>
    </head>

    <body>
	
	<?php include ("head2.php");?>	
	
	<?php
		include('bd.php'); 
		$bdd = getBD();	
		$rep=$bdd->query('select * from villes'); 
		
		
	?>
		<div class="tableau">
				
				<table class = "classement">
   		 		<thead id ="entete">
	   		    <tr >
				<th colspan = "4" >   Choisissez  une ville pour lire les avis </th>
		   		</tr>
		   		</thead>
				<tr>
				<td class="titres"> Ville </td>
				<td > </td>
				<td>  </td>
				<td>  </td>
				</tr>
					<?php while($ligne=$rep->fetch()){ ?>
					<tr>
					<td class= "nom"><?php echo $ligne['Ville'] ?> </td>
					<td>  <img id="ville"  src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /> </td>
					<td class ="info"> <?php echo " <a href='lectureAvis.php?Ville=".$ligne["Ville"]."' >" ?> Lire les avis </a> </td>
					<td class="avis"> <?php echo  "<a href='donnerAvis.php'>" ?> Donner un avis.</a>  </td>
					</tr>
					
				<?php	}
			
		?>
			</table>
				</div>
       
	
    
				<div id="menu_pied">
				<?php include ("menu.php");?>
				</div>
				
		<?php include ("foot2.php");?>
	


        </body>
    </html>
