<!DOCTYPE html>
    <html>
    <head classe = "header">
    <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    </head>
        <body>

          <div class="header">


            <div class = "ident">
            <form action="connecter.php" method="GET" autocomplete="off">
              <?php
                      if (isset($_SESSION['clients'])){
                        echo"Bienvenus dans votre espace personnel";

              		  echo $_SESSION['clients'][0];
              		  echo " ";
              	      echo $_SESSION['clients'][1];
                        echo " ";
              	      echo'<a href="deconnexion.php">Deconnexion</a>';
              	         }
                ?>
            </form>
             </div>
            <div class="logo">
                <img src="etuvie.jpg" alt="" />
             </div>
        </div>
    </div>
	
		<?php
			
			if($_GET["critere1"]=="") 
			{
				 echo'<meta http-equiv="Refresh" content="0; formulaire_selection.php"/>';
			}
			$critere1=$_GET["critere1"];
			$critere2=$_GET["critere2"];
			$critere3=$_GET["critere3"];
			$critere4=$_GET["critere4"];
			$critere5=$_GET["critere5"];
			$critere6=$_GET["critere6"];
			$critere7=$_GET["critere7"];
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
				if($ligne["Ville"]=="Toulouse"){
					
					$ligne=$rep->fetch();
				}
				$culture=noteCulture($ligne["Ville"]);
				$sport=noteSport($ligne["Ville"]);
				$crous=noteCrous($ligne["Ville"]);
				$meteo=noteMeteo($ligne["Ville"]);
				$transport=noteTransport($ligne["Ville"]);
				$securite=noteSecurite($ligne["Ville"]);
				$loyer=noteLoyer($ligne["Ville"]);
				$temp=array($culture,$transport,$crous,$securite,$sport,$loyer,$meteo);
				$arr=array("Culture","Transports","Crous","Securité","Sport","Loyer","Meteo");
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
				$rep2=$bdd->query('UPDATE villes SET noteTemp=\''.$note.'\' WHERE Ville=\''.$Ville.'\''); 
			}
				$rep3=$bdd->query('SELECT * from villes ORDER BY noteTemp DESC'); 
				$ligne3=$rep3->fetch();				?>
				<div class="tableau">
				<table class = "classement">
   		 		<thead id ="entete">
	   		    <tr >
				<th colspan = "4" >   Voici le classement des villes selon les critères sélectionnés </th>
		   		</tr>
		   		</thead>
				<tr>
				<td class="titres"> Ville </td>
				<td>  </td>
				<td class="titres">Note </td>
				<td>  </td>
				</tr>
				<?php while($ligne3=$rep3->fetch()){
					?>
					<tr>
					<td class = "nom"><?php echo $ligne3['Ville'] ?> </td>
					<td>  <img id="ville" src= <?php echo  $ligne3["url_photo"];?> alt="Image ville"  /> </td>
					<td class ="note">  <?php echo  $ligne3['noteTemp'] ?></td>
					<td class ="info"> <?php echo " <a href='fiche_ville.php?Ville=".$ligne3["Ville"]."' >" ?> Voir plus </a> </td>
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
