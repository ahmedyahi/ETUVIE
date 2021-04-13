<?php 
	session_start();
	?>
<!DOCTYPE html>
	<html>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<head classe = "header">
			<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />	
			<link rel="shortcut icon" href="logo.ico" type="logo-icon">
			<link rel="icon" href="logo.ico" type="logo-icon">
			<TITLE>Espace personnel</TITLE>
			<style>
			<!-- Les cadres et le spans servent pour afficher une phrase au survol d'une icone -->
				p{
					display:block;
					padding: top 6px;
					text-align:center;
					font: italic small-caps bold 16px/2 cursive;
					color:#3f7594;
				}
				.cadrep {
					  position: relative;   
					  width: 100px;          
					  overflow: hidden;     
					  line-height: 2em;    
					  display:inline;
					}
				.cadrep img {
					  z-index: 1;          
					  position: relative;   
					  width: 100px;         
					}
				.cadrep span {
					  display: none;
					  position: absolute;  
					  width:150px;
					  margin-left:-70%; 
					  top:-890%;
					  padding: 0 .25em;     
					  color: #eee;          
					  background: #069;     
					  transition: all .5s;  
					  opacity:0.7;
					  border-radius:10%;
					  
					}
				.cadrep:hover span{
					  display:block;
					  left: 2em;            
					}
			</style>
		</head>
		<body>
			<?php include ("head2.php");	
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from user where username=\''.$_SESSION['users'][0].'\''); 
			$ligne=$rep->fetch();?>
			<div class="table_formulaire">
				<table>
					<thead>
						<div><img class = icone style="width:150px;height:150px;" src=user.png alt="image user" /></div>
						</br>
						<p><?php echo $ligne['nom']."</br>";?></p>
						<p><?php echo $ligne['prenom']."</br>";?></p>
						<p><?php echo $ligne['numero']."</br>";?></p>
						<p><?php echo $ligne['adresse']."</br>";?></p>
						<p><?php echo $ligne['mail']."</br>";?></p>
					</thead>
					<tbody>
						<div id= "fiche_logo" >
						<div class="cadrep"> 
							<span>Voir votre historique des avis</span>
							<a href  = "historiqueAvis.php?id"><img class = icone style="width: 100px;height:100px;" src = 'historique.png'></a>
							</div>
							<div class="cadrep"> 
							<span>Ajout un avis</span>
							<a href = "donnerAvis.php"><img class = icone style="width: 100px;px;height: 100px;" src = 'ajouter.png'></a>
							</div>
							<div class="cadrep"> 
							<span>Voir votre historique des villes préférées</span>
							<a href = "historiquePref.php"><img class = icone style="width: 100px;px;height: 100px;" src = 'fav.png'></a>
							</div>
						</div> 
					</tbody>
				</table>
			</div>
			
			<div id="menu_prof">
				<div id="menu_pied">
					<?php include ("menu.php");?>
				</div>
			</div>
			<?php include ("foot3.php");?>
		</body>
	</html>
