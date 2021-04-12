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
			<TITLE>Lire les avis</TITLE>
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
				.cadrea .vp {
					display: none;
					position: absolute;
					width:80px;
					left: -400%;
					bottom:-180%;
					padding: 0 .25em;
					color: #eee;
					background: #069;
					transition: all .5s;
					opacity:0.7;
					border-radius:10%;

					}
				</style>
    	</head>
    	<body>
				<?php include ("head2.php");	
					include('bd.php'); 
					$bdd = getBD();	
					$rep=$bdd->query('select * from villes');?> 
					<div class="table_formulaire">
						<table class = "classement">
							<thead id ="entete">
								<tr>
									<th colspan = "5"><p style ='font: italic small-caps bold 22px cursive;padding-bottom:15px;color:#fff'> Choisissez  une ville pour lire les avis </p></th>
								</tr>
							</thead>
								<?php while($ligne=$rep->fetch()){ ?>
									<tr>
										<td style ='font: italic small-caps bold 22px cursive;padding-bottom:15px;color:#fff'><?php echo $ligne['Ville'] ?> </td>
										<td><div> <?php echo " <a href='fiche_ville.php?Ville=".$ligne["Ville"]."' >" ?> <img style = 'width:150px;height:150px;border: 1px solid #115A83;border-radius:75px'  src= <?php echo  $ligne["url_photo"];?> alt="Image ville"  /> </a> </div> </td>
										<td> <div class="cadrea"> 
										<span>lire les avis</span><a href='lectureAvis.php?Ville=".$ligne["Ville"]."' >  <img class = icone style="width: 100px;height:100px;" src = 'lire-avis3.png'> </a> </div> </td>
										<td> <div class="cadrea"> 
										<span>donner un avis</span>
										<a href='donnerAvis.php'> <img class = icone style="width: 100px;px;height: 100px;" src = 'ajouter2.png'></a> </div> </td>
										<td><div class="cadrea"> <span class="vp">Voir plus </span> <?php echo "<a href='fiche_ville.php?Ville=".$ligne["Ville"]."' >" ?><img class = icone style="width: 100px;height:100px;" src = 'lire_plus.png'></a> </div> </td>
									

									</tr>
							<?php	}?>
						</table>
					</div>
					<div id="menu_pied">
						<?php include ("menu.php");?></div>
					<?php include ("foot2.php");?>
    	</body>
	</html>
