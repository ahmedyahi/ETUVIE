    <!DOCTYPE html>
        <html>
            <head classe = "header">
                <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

            </head>
            <body>

                <?php

					include('bd.php'); 
					
                    function enregistrer($username,$nom,$prenom,$numero,$adresse,$mail,$mdp){
                    	try{
							$bdd = getBD();
							$rep1=$bdd->query("INSERT INTO user(username,nom,prenom,numero,adresse,mail,mdp) VALUES ('".$username."','".$nom."','".$prenom."','".$numero."','".$adresse."','".$mail."','".$mdp."')"); 
                    		
                    	}
                    	catch( Exception $e)
                    	{
                    		die ('Erreur :'.$e->getMessage());
                    	}
                    }
					
					
					$bdd = getBD();
					$rep=$bdd->query("SELECT username from user "); 
					while($ligne=$rep->fetch()){
						if($ligne['username']==$_POST['username']){
							$username="Ce username existe déjà. Veuillez en choisir un autre.";
							echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$username.'&phone='.$_POST ['phone'].'&email='.$_POST ['email'].'">';
						}
					}
                    if (($_POST['nom'] == "")||
                    ($_POST['prenom'] == "") ||
					($_POST['username'] == "") ||
                    ($_POST ['phone'] == "") ||
                    ($_POST ['adresse'] == "") ||
                    ($_POST ['email'] == "") ||
					($_POST['mdp1']=="") || 
					($_POST['mdp2']=="") ||
                    ($_POST ['mdp1'] != $_POST['mdp2'])) {
                    	echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&phone='.$_POST ['phone'].'&mail='.$_POST ['mail'].'">';
                   
					}
                    else{
                      enregistrer($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['phone'],$_POST['adresse'],$_POST['email'],$_POST['mdp1']);
                    	echo '<meta http-equiv="Refresh" content="0;url=accueil2.php">';
                    }
                   ?>

        </body>
    </html>
