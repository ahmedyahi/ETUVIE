<?php 
	session_start();
	?>
<html>
<head>
<title>Historique</title>
<link rel="stylesheet" href="stylesH2.css" type="text/css" media="screen" />	
</head>

<body>
	 <?php include ("head2.php");?>	
	<?php
		include('bd.php'); 
		$bdd = getBD();
		$rep1=$bdd->query('select * from avis where username=\''.$_SESSION['users'][0].'\' ');
		$rep=$bdd->query('select * from avis where username=\''.$_SESSION['users'][0].'\' ');
		?>
	   <div class='tableau'>
	   <table class = "classement">
   		 		<thead id ="entete">
	   		    <tr >
				<th colspan = "4" >  Voici l'historique des vos avis </th>
		   		</tr>
		   		</thead>
				<tr>
				<td class="titres"> Ville </td>
				<td > Avis</td>
				<td> Pour modifier </td>
				<td>  </td>
				
				</tr>
		
			<?php		
		while($ligne1=$rep1->fetch()){
			echo "<tr>";
			echo "<td>".$ligne1["ville"]."</td>";
			if (isset($_GET["avis"]) & isset($_GET["id"]) & $ligne1["id"]==$_GET["id"]){
					echo "<td>".$_GET["avis"]."</td>";
					$rep=$bdd->query('UPDATE avis SET text=\''.$_GET["avis"].'\' WHERE id=\''.$_GET["id"].'\'');
					}
					else{
						echo "<td>".$ligne1["text"]."</td>";
					}
			echo "<td> <a href='modification.php?id=".$ligne1["id"]."'>". "Modifier" ."</a> </td>";
			echo "<td> <a href='supprimer.php?id=".$ligne1["id"]."'>". "Supprimer" ."</a> </tr>";
		}	
	

	?>
	</table>
		<div id="menu_pied">
		<?php include ("menu.php");?>
				</div>
		<?php include ("foot3.php");?>

</body>
</html>