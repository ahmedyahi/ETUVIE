<?php 
	session_start();
	?>
<html>
<head>
<title>Supprimer</title>
<?php
		include('bd.php'); 
		$bdd = getBD();
		$id=$_GET['id'];
		$ville=$_GET['ville'];
		$rep=$bdd->query('select * from preferes where id=\''.$id.'\'');
		$rep=$bdd->query('DELETE FROM preferes where id=\''.$id.'\'');
		echo'<meta http-equiv="refresh" content="0; url=fiche_ville.php?Ville='.$ville.'">';
			
?>


</head>
<body>

</body>
</html>