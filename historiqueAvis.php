<?php 
	session_start();
	?>
<html>
	<head>
		<title>Historique</title>
		<link rel="stylesheet" href="stylesH2.css" type="text/css" media="screen" />
		<style>
		<!-- Les cadres et le spans servent pour afficher une phrase au survol d'une icone -->
			.cadrea {
			  position: relative;   
			  width: 100px;          
			  overflow: hidden;     
			  line-height: 2em;     
			  display:inline;
			}
			.cadrea img {
			  z-index: 1;           
			  position: relative;   
			  width: 100px;          
			}
			.cadrea span {
			  display: none;
			  position: absolute;  
			  width:140px;
			  right:30%;
			  top:50%;
			  padding: 0 .25em;     
			  color: #eee;          
			  background: #069;     
			  transition: all .5s; 
			  opacity:0.7;
			  border-radius:10%;
			 
			  
			}
			.cadrea:hover span{
			  display:block;
			          
			}
			</style>		
	</head>

	<body>
	 	<?php include ("head2.php");	
			include('bd.php'); 
			$bdd = getBD();
			$rep1=$bdd->query('select * from avis where username=\''.$_SESSION['users'][0].'\' ');  
			$rep=$bdd->query('select * from avis where username=\''.$_SESSION['users'][0].'\' ');  /* Pour l'update des avis si on modifie*/
		?>
	   <div class='table_formulaire	'>
	   		<table class = "classement">
   		 		<thead >
	   		   		<tr>
						<th colspan = "4" ><p style ='font: italic small-caps bold 15px cursive;padding-bottom:15px;color:#fff'> Votre historique des avis </p></th>
		   			</tr>
		   		</thead>
					
					<?php		
					while($ligne1=$rep1->fetch()){  
						echo "<tr>";
						echo "<td  style ='font: italic small-caps bold 15px cursive;padding-bottom:15px;color:#fff'>".$ligne1["ville"]."</td>";
						if (isset($_GET["avis"]) && isset($_GET["idA"]) && $ligne1["id"]==$_GET["idA"]){ /* On affiche l'avis modifié si on a modifié -> la Page "modification" renvoie l'avis et l'id pour l'update dans la base*/
							echo "<td>".$_GET["avis"]."</td>";
							$rep=$bdd->query('UPDATE avis SET text=\''.$_GET["avis"].'\' WHERE id=\''.$_GET["idA"].'\'');
						}
						else{
							echo "<td>".$ligne1["text"]."</td>"; /* Ou on affiche les avis de l'utilisateur qu'on trouve dans la base */
						}
					echo "<td> <div class='cadrea'> 
										<span>Modifier</span> <a href='modification.php?id=".$ligne1["id"]."'>". "<img class = icone style='width: 60px;height:60px; padding-bottom=1px;'src = 'modifier.png'>" ."</a> </div> </td>";
					echo "<td> <div class='cadrea'> 
										<span>Eliminer</span> <a href='supprimer.php?id=".$ligne1["id"]."'>". "<img class = icone style='width: 60px;height:60px; ; padding-bottom=1px;' src = 'supprime.png'>" ."</a> </div> </tr>";
					}?>	
			</table>
		</div>
		<div id="menu_pied">
			<?php include ("menu.php");?>
		</div>
		<?php include ("foot2.php");?>

</body>
</html>