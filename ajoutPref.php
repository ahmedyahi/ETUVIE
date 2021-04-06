<?php 
	session_start();
	?>
<html>
<head>
<title>Ajouter</title>
<?php
		include('bd.php'); 
		$bdd = getBD();
		$ville=$_GET['ville'];
		$numero = rand(0,10000);
		$rep=$bdd->query("select * from preferes");
		while($ligne=$rep->fetch()){
			if($numero==$ligne["id"]){
			$numero = rand(0,1000);
		}
		}
		$bool=TRUE;
		$rep=$bdd->query("INSERT INTO preferes(id,username,ville,pref) VALUES('".$numero."','".$_SESSION['users'][0]."','".$ville."','".$bool."')");
		echo'<meta http-equiv="refresh" content="0; url=fiche_ville.php?Ville='.$ville.'&tmp='.$bool.'&id='.$numero.'">';
		?>


</head>
<body>

</body>
</html>