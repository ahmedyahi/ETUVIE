<?php 
	session_start();
	?>
<!DOCTYPE html>
	<html>
		<head classe = "header">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
			<style type="text/css">
			<!-- Les cadres et le spans servent pour afficher une phrase au survol d'une icone -->
				.titres{
					text-align:center;
					font-size:22px;
					font-style:bold;
					color:#fff;
					padding-bottom:7px;
					padding-top:7px;
				}
				.titres1{
					text-align:center;
					font-size:14px;
					font-style:bold;
					color:#fff;
					padding-bottom:7px;
					padding-top:7px;
				}
				#ville{
					height:150px;
					width:150px;
					border-radius:60px;
					margin-top:20px;
				}
				.cadrel {
					position: relative;   
					width: 50px;          
					overflow: hidden;     
					line-height: 2em;     
					display:inline;
				}
				.cadrel img {
					z-index: 1;           
					position: relative;   
					width: 50px; 
					margin-left:47%;
					margin-top:23px;
				}
				.cadrel span {
					display: none;
					position: absolute;  
					width:150px;
					margin-left:60%;
					bottom:-100%;
					padding: 0 .25em;     
					color: #eee;         
					background: #069;     
					opacity:0.7;
					border-radius:10%;
				}
				.cadrel:hover span{
					display:block;
					left: -5em; 
					font-size:15px;
					width:200px; 
					height:50px;  
					}
				.cadrel:hover .da {
					display:block;
					left:-70%; 
					font-size:15px;
					width:100px; 
					height:50px;  
				}
			</style>	
			<TITLE>Lire un avis</TITLE>
    	</head>
    	<body>
			 <?php include ("head2.php");
			include('bd.php'); 
			$bdd = getBD();	
			$Ville= $_GET["Ville"];
			$rep=$bdd->query('select * from villes where Ville=\''.$Ville.'\''); 
			$rep1=$bdd->query('select * from avis where Ville=\''.$Ville.'\''); 
			$ligne=$rep->fetch();
			$rep2=$bdd->query('select * from avis where Ville=\''.$Ville.'\''); 
			if($ligne2=$rep2->fetch()==""){ /*si dans la base il n'y a pas encore d'avis pour la ville séléctionnée*/ ?> 
				<div class="cadrel"> 
				<span>Donner un avis</span>
			
				<a href = "donnerAvis.php"><img class = icone style="width: 100px;px;height: 100px;" src = 'ajouter.png'></a>
				<p style=margin-top:50px;text-align:center; > Pas encore des avis pour cette ville. </p>
				</div><?php
				}
			else{ /*Sinon on affiche les avis avec l'user qui les a donné*/ ?> 
				
				<div class="table_formulaire">
					<table class = "classement">
   		 				<thead id ="entete">
	   		    			<tr>
							<th><img  id="ville" src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /></th>	
							<th style='color:white;'>
							<div class="cadrel"> 
							<span class="da">Donner un avis</span>
							<a href = "donnerAvis.php"> <img class = icone style="z-index:20;width: 60px;height: 60px;" src = 'ajouter.png'/> </div>
							<?php echo $ligne['Ville'] ?> </th>
							
		   					</tr>
		   				</thead>
						<tbody>
							<tr>
								<td class="titres"> User </td>
								<td class="titres"> Avis </td>
							</tr>
							<?php while($ligne1=$rep1->fetch()){?>
							<tr>
							<td class="titres1"> <?php echo  $ligne1['username']?>  </td>
							<td class="titres1"><?php echo  $ligne1['text']?>  </td>
							</tr>
					
					<?php }?>
					</table>
				</div>
			<?php } ?>
	
    		<div id="menu_pied">
				<?php include ("menu.php");?>
			</div>
			<?php include ("foot3.php");?>
        </body>
    </html>
