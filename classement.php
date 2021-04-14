<?php
 session_start();
 ?>
<!DOCTYPE html>
    <html>
		<head classe = "header">
			<link rel="shortcut icon" href="logo.ico" type="logo-icon">
			<link rel="icon" href="logo.ico" type="logo-icon">
			<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<style>
			<!-- Les cadres et le spans servent pour afficher une phrase au survol d'une icone -->
			.cadreico {
			  position: relative;   
			  width: 100px;          
			  overflow: hidden;     
			  line-height: 2em;    
			    display:inline;
			}
			.cadreico img {
			  z-index: 1;           
			  position: relative;   
			  width: 100px;  
				display:inline;
			}
			.cadreico span {
			  display: none;
			  position: relative;  
			  width:150px;
			  left: 100%;   
			  padding: 0 .25em;     
			  color: #eee;          
			  background: #069;     
			  transition: all .5s;  
			  opacity:0.7;
			  border-radius:10%;
			 
			  
			}
			.cadreico .vp {
			  display: none;
			  position: relative;
			  height:20px;
			  width:80px;
			  left: 800%;  
			  top:50%;
			  padding: 0 .25em;     
			  color: #eee;          
			  background: #069;     
			  transition: all .5s;  
			  opacity:0.7;
			  border-radius:10%;
			  z-index: 20;
			  text-align:center;           

			  
			}
			.cadreico:hover span{
			  display:block;
			  left: 2em;  
			}          
			</style>
		</head>
		<body>
			<?php include ("head2.php");
				/*Si le premier critère est vide: erreur*/			
				if($_GET["critere1"]=="") {
					$erreur="Veuillez choisir au moins le premier critère";
					echo'<meta http-equiv="Refresh" content="0; formulaire_selection.php?e='.$erreur.'"/>';
				}
				/*Si il y deux critères égaux: erreur*/	
				$arr=array($_GET["critere1"],$_GET["critere2"],$_GET["critere3"],$_GET["critere4"],$_GET["critere5"],$_GET["critere6"],$_GET["critere7"]);
				$critere1=$_GET["critere1"];
				$critere2=$_GET["critere2"];
				$critere3=$_GET["critere3"];
				$critere4=$_GET["critere4"];
				$critere5=$_GET["critere5"];
				$critere6=$_GET["critere6"];
				$critere7=$_GET["critere7"];
				for($k=0;$k<7;$k++){ 
					for($j=0;$j<7;$j++){
						if($k != $j && $arr[$k]!=""){
							if($arr[$k] == $arr[$j]){
								$erreur="Ne choissisez pas le meme critère deux fois.";
								echo'<meta http-equiv="Refresh" content="0; formulaire_selection.php?e='.$erreur.'"/>';
							}
						}
					}
				}
				include('bd.php'); 
				$bdd = getBD();	
				$rep=$bdd->query('select * from villes'); 
				include 'note_culture.php';
				include 'note_sport.php';
				include 'note_crous.php';
				include 'note_meteo.php';
				include 'note_transport.php';
				include  'note_securite.php';
				include  'note_loyer.php';
				while($ligne=$rep->fetch()){
					$culture=noteCulture($ligne["Ville"]);
					$sport=noteSport($ligne["Ville"]);
					$crous=noteCrous($ligne["Ville"]);
					$meteo=noteMeteo($ligne["Ville"]);
					$transport=noteTransport($ligne["Ville"]);
					$securite=noteSecurite($ligne["Ville"]);
					$loyer=noteLoyer($ligne["Ville"]);
					$temp=array($culture,$transport,$crous,$securite,$sport,$loyer,$meteo);
					$arr=array("Culture","Transports","Crous","Securité","Sport","Loyer","Meteo");
					/*On calcule notre classement en multipliant chaque critère par un coefficient lié à sa position dans la choix de l'utilisateur*/
					for($i=0;$i<count($arr);$i++){
						if($critere1==$arr[$i]){
							$temp[$i]*=7;
						}
						else if($critere2==$arr[$i]){
							$temp[$i]*=6;
						}
						else if($critere3==$arr[$i]){
							$temp[$i]*=5;
						}
						else if($critere4==$arr[$i]){
							$temp[$i]*=4;
						}
						else if($critere5==$arr[$i]){
							$temp[$i]*=3;
						}
						else if($critere6==$arr[$i]){
							$temp[$i]*=2;
						}
						else if($critere7==$arr[$i]){
							$temp[$i]*=1;
						}
						else{
							$temp[$i]=$temp[$i];
						}
					}
					$note=0;
					for($i=0;$i<count($temp);$i++){
						$note=$note+$temp[$i];
					}
					$note=$note/7;
					$Ville=$ligne["Ville"];
					$rep2=$bdd->query('UPDATE villes SET noteTemp=\''.$note.'\' WHERE Ville=\''.$Ville.'\''); /*On garde la nouvelle note temporaire  dans notre base des données pour ensuite faire un ORDER BY */
					}
					
					/*On affiche dans la page les icones des critères selon l'ordre de choix de l'utilisateur*/
				$rep3=$bdd->query('SELECT * from villes ORDER BY noteTemp DESC'); 
				$ligne3=$rep3->fetch();
				$repa=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere1.'\''); 
				$lignea=$repa->fetch();
				$repb=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere2.'\''); 
				$ligneb=$repb->fetch();
				$repc=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere3.'\''); 
				$lignec=$repc->fetch();
				$repd=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere4.'\''); 
				$ligned=$repd->fetch();
				$repe=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere5.'\''); 
				$lignee=$repe->fetch();
				$repf=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere6.'\''); 
				$lignef=$repf->fetch();
				$repg=$bdd->query('SELECT * FROM `icone` WHERE criteres = \''.$critere7.'\''); 
				$ligneg=$repg->fetch();?>
				<table>
				<td style="position:sticky;top:0;padding-left:30px;">
				<div id = 'profil_criteres'>
				<div class="cadreico"> 
				<span><?php echo $lignea["criteres"]; ?></span>
					<img style = "width : 210px ; height : 210px ; border-radius:10% ;border: solid 5px white;display:inline;" src= <?php echo  $lignea["icone"];?> alt="icone"  /> </div>
					<?php if($_GET["critere2"]!=""){ ?>
							<div class="cadreico"> 
							<span><?php echo $ligneb["criteres"]; ?></span>
							<img style = "width : 190px ; height : 190px ; border-radius:10% ;border: solid 5px white;display:inline;" src= <?php echo  $ligneb["icone"];?> alt="icone"  /> </div>
							<?php } ?>
						<?php if($_GET["critere3"]!=""){ ?>
							<div class="cadreico"> 
							<span><?php echo $lignec["criteres"]; ?></span>
							<img style = "width : 170px ; height : 170px; border-radius:10% ;border: solid 5px white;display:inline;" src= <?php echo  $lignec["icone"];?> alt="icone"  /> </div>
							<?php } ?>
						<?php if($_GET["critere4"]!=""){ ?>
						<div class="cadreico"> 
							<span><?php echo $ligned["criteres"]; ?></span>
							<img style = "width : 150px ; height : 150px; border-radius:10% ;border: solid 5px white;" src= <?php echo  $ligned["icone"];?> alt="icone"  /> </div>
							<?php } ?>
						<?php if($_GET["critere5"]!=""){ ?>
							<div class="cadreico"> 
							<span><?php echo $lignee["criteres"]; ?></span>
							<img style = "width : 130px ; height : 130px; border-radius:10% ;border: solid 5px white;" src= <?php echo  $lignee["icone"];?> alt="icone"  /> </div>
							<?php } ?>
						<?php if($_GET["critere6"]!=""){ ?>
							<div class="cadreico"> 
							<span><?php echo $lignef["criteres"]; ?></span>
							<img style = "width : 110px ; height : 110px; border-radius:10% ;border: solid 5px white;" src= <?php echo  $lignef["icone"];?> alt="icone"  /> </div>
							<?php } ?>
						<?php if($_GET["critere7"]!=""){ ?>
							
							<div class="cadreico"> 
							<span><?php echo $ligneg["criteres"]; ?></span>
							<img style = "width : 90px ; height : 90px; border-radius:10% ;border: solid 5px white;" src= <?php echo  $ligneg["icone"];?> alt="icone"  /> </div>
							</br>
							<?php } 
							
				?>
							
				</div>
				</td>
				<td>
				<div class="table_formulaire">
					<table style ='border:none' class = "classement">
						<thead id ="entete">
							<tr>
								<th colspan = "4" ><p style ='font: italic small-caps bold 22px cursive;padding-bottom:15px;color:#fff'> Voici le classement des villes selon les critères sélectionnés </p></th>
							</tr>
						</thead>
						</tbody>
						<!-- On affiche le classement  -->
							<?php while($ligne3=$rep3->fetch()){?>
							<tr>
								<td style ='font: italic small-caps bold 22px cursive;padding-bottom:15px;color:#fff' class = "nom"><?php echo $ligne3['Ville'] ?> </td>
								<td><div> <?php echo " <a href='fiche_ville.php?Ville=".$ligne3["Ville"]."' >" ?> <img style = 'width:150px;height:150px;border: 1px solid #115A83;border-radius:75px'  src= <?php echo  $ligne3["url_photo"];?> alt="Image ville"  /> </a> </div> </td>
								<td class ="info"> <?php echo " <a href='fiche_ville.php?Ville=".$ligne3["Ville"]."' >" ?> <div class="cadreico"> 
							<span class="vp">Voir plus </span> <img class = icone style="width: 100px;height:100px;" src = 'lire_plus.png'></a> </div> </td>
							</tr>
						<?php	}
						?>
						</tbody>
					</table>
				</div>
				</td>
				</table>
			<div id="menu_pied">
				<?php include ("menu.php");?>
				</div>
			<?php include ("foot2.php");?>
		</body>
	</html>
