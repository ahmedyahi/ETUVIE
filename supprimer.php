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
		
		$rep=$bdd->query('select * from avis where id=\''.$id.'\'');
		
		$rep=$bdd->query('DELETE FROM avis where id=\''.$id.'\'');
		echo'<meta http-equiv="refresh" content="0; url=historiqueAvis.php">';
?>


</head>
<body>

</body>
</html>