<?php
 session_start();
 ?>
 <!DOCTYPE HTML>
<HTML>
  <head classe = "header">
    <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php
    include 'bd.php';
	/*si les champs sont vides:erreur*/
    if($_POST['username']== "" || $_POST['mdp']== ""){
		 $t="Champs vides";
		 echo '<meta http-equiv="Refresh" content="0; accueil2.php?t='.$t.'">';
    }
    else{ /*si les informations sont incorrectes:erreur*/
      $bdd = getBD();
      $rep=$bdd->query('select * from user where username=\''.$_POST['username'].'\' AND mdp=\''.$_POST['mdp'].'\'');
      if(($ligne=$rep->fetch())== ""){
		    $t="Mot de passe ou username non valides.";
		     echo '<meta http-equiv="Refresh" content="0; accueil2.php?t='.$t.'">';
        }
      else{
		    $_SESSION['users']=array($ligne['username'],$ligne['nom'],$ligne['prenom'],$ligne['numero'],$ligne['adresse'],$ligne['mail'],$ligne['mdp']);
		    echo '<meta http-equiv="Refresh" content="0;url=accueil2.php">';
        }
    }	
    ?>
  </head>
  <body>
  </body>
</html>
