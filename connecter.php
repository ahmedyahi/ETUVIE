<?php
 session_start();
 ?>
 <!DOCTYPE HTML>
<HTML>
<head>
<TITLE>Connecter</TITLE>
<head classe = "header">
<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
include 'bd.php';
if($_POST['username']== "" || $_POST['mdp']== ""){
	echo'<meta http-equiv="refresh" content="0; url=accueil2.php">';
}

else{
 						
  $bdd = getBD();
  $rep=$bdd->query('select * from user where username=\''.$_POST['username'].'\' AND mdp=\''.$_POST['mdp'].'\'');
  if(($ligne=$rep->fetch())== ""){
		 $t="Mot de passe ou username pas valides.";
		 echo '<meta http-equiv="Refresh" content="0; accueil2.php?t='.$t.'">';
		
  }
  else{
		$_SESSION['users']=array($ligne['username'],$ligne['nom'],$ligne['prenom'],$ligne['numero'],$ligne['adresse'],$ligne['mail'],$ligne['mdp']);
		echo '<meta http-equiv="Refresh" content="0;url=accueil2.php">';
  }
}	


/




?>
</head>
<body>

</body>
</html>
