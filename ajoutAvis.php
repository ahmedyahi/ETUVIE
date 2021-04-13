<?php 
	session_start();
	?>
<html>
	<head>
		<title>Ajouter</title>
		<?php
			include('bd.php'); 
			$bdd = getBD();
			$avis=$_POST['avis'];
			$ville=$_POST['ville'];
			$numero = rand(0,10000);
			$rep=$bdd->query("select * from avis");
			while($ligne=$rep->fetch()){
				if($numero==$ligne["id"]){
					$numero = rand(0,1000);
					}
				}
			if(isset($_POST['respect'])){
				$rep=$bdd->query("INSERT INTO avis(id,username,ville,text) VALUES('".$numero."','".$_SESSION['users'][0]."','".$ville."','".$avis."')");
				echo'<meta http-equiv="refresh" content="0; url=historiqueAvis.php">';
			}
			
			else{
				$erreur="Veuillez valider le respect du langage respectueux..";
				echo'<meta http-equiv="refresh" content="0; url=donnerAvis.php?e='.$erreur.'"/>';
			} ?>
	</head>
	<body>
	</body>
</html>