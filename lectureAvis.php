<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head classe = "header">
		<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
		<style type="text/css">
		.titres{
			text-align:center;
			font-size:22px;
			font-style:bold;
		}
		
		#ville{
			height:150px;
			width:150px;
			border-radius:60px;
			margin-top:20px;
	
		}
	</style>	
		<TITLE>Lire un avis</TITLE>
    </head>

    <body>
			 <?php include ("head2.php");?>	
					
	
	<?php
		include('bd.php'); 
		$bdd = getBD();	
		$Ville= $_GET["Ville"];
		$rep=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
		$rep1=$bdd->query('select * from avis where Ville=\''.$Ville.'\''); 
		$ligne=$rep->fetch();
		$rep2=$bdd->query('select * from avis where Ville=\''.$Ville.'\''); 
		if($ligne2=$rep2->fetch()==""){
				echo  "<p style=margin-top:50px;text-align:center;> Pas encore des avis pour cette ville. </p>";
				echo " <a class='bouton_donnerAvis' href='donnerAvis.php'> Donner un avis.</a>";
			}
		else{ ?>
		<a class='bouton_donnerAvis' href="donnerAvis.php"> Donner un avis.</a>
		<div class="tableau">
				<table class = "classement">
   		 		<thead id ="entete">
	   		    <tr >
				<th colspan = "4" > Voici les avis pour la ville sélectionée</th>
		   		</tr>
		   		</thead>
				<tr>
				<td class="titres"> Ville </td>
				<td>  </td>
				<td class="titres"> Avis  </td>
				<td class="titres"> User </td>
				</tr>
				
			<?php
			
				while($ligne1=$rep1->fetch()){
					?>
					<tr>
					<td class = "nom"><?php echo $ligne['Ville'] ?> </td>
					<td>  <img id="ville" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /> </td>
					<td> <?php echo  $ligne1['text']?>  </td>
					<td> <?php echo  $ligne1['username']?>  </td>
					</tr>
					
			<?php	}
			
		?>
			</table>
				</div>
		<?php } ?>
	
    <div id="menu_pied">
				<?php include ("menu.php");?>
				</div>
				
		<?php include ("foot2.php");?>

		


        </body>
    </html>
