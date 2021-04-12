<?php 
	session_start();
	?>
<html>
	<head>
		<title>Historique préférés</title>
		<link rel="stylesheet" href="stylesH2.css" type="text/css" media="screen" />
<style>
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
  margin-left:-70%;
  bottom:-190%;
  padding: 0 .25em;     
  color: #eee;          
  background: #069;     
  transition: all .5s; 
  opacity:0.7;
  border-radius:10%;
  
}
.cadrea:hover span{
  display:block;
  left: 2em;         
}
</style>		
	</head>
	<body>
		<?php include ("head2.php");	
			include('bd.php'); 
			$bdd = getBD();
			$rep=$bdd->query('select * from preferes where username=\''.$_SESSION['users'][0].'\' ');
			$rep1=$bdd->query('select * from preferes where username=\''.$_SESSION['users'][0].'\' ');
			$arr= array();
			$i=0;
		?>
	   <div class='table_formulaire'>
	   		<table class = "classement">
   				<thead>
	   				<tr>
						<th colspan = "4" ><p style ='font: italic small-caps bold 22px cursive;padding-bottom:15px;color:#fff'>Voici vos villes favorites </p></th>
		   			</tr>
		   		</thead>
				<?php
				if($ligne1=$rep1->fetch()== ""){
					echo "<thead id ='entete'>";
					echo "<tr>";
					echo "<th colspan = '4' >";
					echo "<p style='font: italic small-caps bold 12px cursive;padding-bottom:15px;color:#fff'>Aucune ville dans tes favoris</p>";
					echo "</th>";
					echo "<tr>";
					echo "</thead>";
				}
				else { ?>
					
					<?php
					while($ligne=$rep->fetch()){
						echo "<tr>";
						$rep2=$bdd->query('select * from preferes');
						$bool=FALSE;
						for($k=0;$k<count($arr);$k++){
							$arr[$k]="";
						}
						if ($ligne["pref"]){
							echo "<td style='font: italic small-caps bold 15px cursive;padding-bottom:15px;color:#fff'>".$ligne["ville"]."</td>";
							echo "<td> <div class='cadrea'> 
										<span>Eliminer</span><a href='elimPref.php?id=".$ligne["id"]."&ville=".$ligne["ville"]."'>". "<img class = icone style='width: 60px;height:60px; ; text-align:center;' src = 'supprime.png'>" ."</a> </div> </td>";
						
							while(!$bool && $ligne2=$rep2->fetch()){
								if($ligne2['ville'] == $ligne['ville'] && $ligne2['username']!= $ligne['username']){
									$arr[$i]=$ligne2['username'];
									$bool=TRUE;	
									$i++;
								}
								if($bool){
								while($ligne2=$rep2->fetch()){
									if($ligne2['ville'] == $ligne['ville'] && $ligne2['username']!= $ligne['username']){
										$arr[$i]=$ligne2['username'];
										$i++;
									}	
								}
								}
							}
							echo "<td>";
							$rep4=$bdd->query('UPDATE villes SET countTemp=0');
							if($bool){
								for ($i=0;$i<count($arr);$i++){
									if($arr[$i]!=""){
									$rep3=$bdd->query('select * from preferes where username=\''.$arr[$i].'\' ');
									while($ligne3=$rep3->fetch()){
										$rep4=$bdd->query('UPDATE  villes SET countTemp=countTemp+1 where Ville=\''.$ligne3['ville'].'\' ');
									}
									}
								}
								
								$rep3=$bdd->query('select Ville from villes where countTemp>0 order by countTemp DESC');
								$i=0;
								$stop=FALSE;
								while($ligne3=$rep3->fetch()){
									if($i<2){
									if($ligne3['Ville']!=$ligne["ville"]){
									echo $ligne3["Ville"];
									echo " ";
									$i++;
									}
									}
								}
								}
							echo "</td>";							
						}
					}
				}?>
			</table>
		</div>
		<div id="menu_pied">
		<?php include ("menu.php");?>
				</div>
		<?php include ("foot2.php");?>

</body>
</html>