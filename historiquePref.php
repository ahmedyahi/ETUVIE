<?php 
	session_start();
	?>
<html>
<head>
<title>Historique préférés</title>
<link rel="stylesheet" href="stylesH2.css" type="text/css" media="screen" />	
</head>

<body>
	 <?php include ("head2.php");?>	
	<?php
		include('bd.php'); 
		$bdd = getBD();
		
		$rep=$bdd->query('select * from preferes where username=\''.$_SESSION['users'][0].'\' ');
		$rep1=$bdd->query('select * from preferes where username=\''.$_SESSION['users'][0].'\' ');
		$arr= array();
		$i=0;
		
		
		?>
	   <div class='tableau'>
	   <table class = "classement">
   		 		<thead id ="entete">
	   		    <tr >
				<th colspan = "4" >  Voici la liste des tes villes préférées </th>
		   		</tr>
		   		</thead>
				<?php
				if($ligne1=$rep1->fetch()== ""){
					echo "<thead id ='entete'>";
					echo "<tr>";
					echo "<th colspan = '4' >";
					echo "Aucune ville dans tes préférés";
					echo "</th>";
					echo "<tr>";
					echo "</thead>";
				}
						
				else { ?>
						<tr>
						<td class="titres"> Ville </td>
						<td> </td>
						<td> Les gens qui on aimé cette ville ont aimé aussi.. </td>
					</tr>
				<?php
					while($ligne=$rep->fetch()){
						echo "<tr>";
						$rep2=$bdd->query('select * from preferes');
						$bool=FALSE;
						if ($ligne["pref"]){
							echo "<td>".$ligne["ville"]."</td>";
							echo "<td> <a href='elimPref.php?id=".$ligne["id"]."&ville=".$ligne["ville"]."'>". "Eliminer des mes préférés" ."</a> </td>";
							
							while($bool==FALSE && $ligne2=$rep2->fetch()){
								if($ligne2['ville'] == $ligne['ville'] && $ligne2['username']!= $ligne['username']){
									$arr[$i]=$ligne2['username'];
									$bool=TRUE;	
									$i++;
								}
								if($bool){
								while( $ligne2=$rep2->fetch()){
									if($ligne2['ville'] == $ligne['ville'] && $ligne2['username']!= $ligne['username']){
										$arr[$i]=$ligne2['username'];
										$i++;
									}	
								}
								}
							}
							echo "<td>";
							if($bool){
								for ($i=0;$i<count($arr);$i++)
								$rep3=$bdd->query('select * from preferes where username=\''.$arr[$i].'\' ');
								while($ligne3=$rep3->fetch()){
								if($ligne3['ville']!=$ligne["ville"]){
									echo $ligne3["ville"];
									echo " ";
								}
								
								}
							}
							echo "</td>";							
						}
					}
				}
	?>
	</table>
	
		<div id="menu_pied">
		<?php include ("menu.php");?>
				</div>
		<?php include ("foot3.php");?>

</body>
</html>