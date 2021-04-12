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
                    	
							$bdd = getBD();
							$rep1=$bdd->query("INSERT INTO user(username,nom,prenom,numero,adresse,mail,mdp) VALUES ('".$username."','".$nom."','".$prenom."','".$numero."','".$adresse."','".$mail."','".$mdp."')"); 
                    	
                    }
					
					
					$bdd = getBD();
					$rep=$bdd->query("SELECT username from user "); 
					
					$telephone=$_POST['phone'];
					$x=strlen($telephone);
					if($x != 10){
						    $erreur="Numéro de téléphone pas valide!";
						  	echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&phone='.$_POST ['phone'].'&adresse='.$_POST['adresse'].'&mail='.$_POST ['email'].'&e='.$erreur.'">';
					}
					
					$bool1=FALSE;
					$j=0;
					while( ($j<$x ) && (!$bool1)){
						if(($telephone[$j]!="0") || ($telephone[$j]!="1" )|| ($telephone[$j]!="2") ||($telephone[$j]!="3")||($telephone[$j]!="4")||($telephone[$j]!="5")||($telephone[$j]!="6")||($telephone[$j]!="7")||($telephone[$j]!="8")||($telephone[$j]!="9")){
							$bool1=TRUE;
						}
						$j++;
					}
					if($bool1){
						  $erreur="Numéro de téléphone pas valide!";
						  echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&phone='.$_POST ['phone'].'&adresse='.$_POST['adresse'].'&mail='.$_POST ['email'].'&e='.$erreur.'">';		
					}
					
					while($ligne=$rep->fetch()){
						if($ligne['username']==$_POST['username']){
							$erreur="Ce username existe déjà.";
							echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$username.'&phone='.$_POST ['phone'].'&adresse='.$_POST['adresse'].'&mail='.$_POST ['email'].'&e='.$erreur.'">';
						}
					}
                   
					$mail=$_POST['email'];
					$i=0;
					$bool=FALSE;
					while($i<strlen($mail) && !$bool){
						if($mail[$i]=="@"){
							$bool=TRUE;
						}
						$i++;
					}
					if(!$bool && $_POST ['email'] != ""){
						  $erreur="Mail pas valide!";
						  echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&phone='.$_POST ['phone'].'&adresse='.$_POST['adresse'].'&mail='.$_POST ['email'].'&e='.$erreur.'">';		
					}
					else if(($_POST['nom'] == "")||
                    ($_POST['prenom'] == "") ||
					($_POST['username'] == "") ||
                    ($_POST ['phone'] == "") ||
                    ($_POST ['adresse'] == "") ||
                    ($_POST ['email'] == "") ||
					($_POST['mdp1']=="") || 
					($_POST['mdp2']=="")) {
						$erreur="informations manquantes!";
                    	echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&phone='.$_POST ['phone'].'&adresse='.$_POST['adresse'].'&mail='.$_POST ['email'].'&e='.$erreur.'">';
					}
					else if( ($_POST ['mdp1'] != $_POST['mdp2'])){
							$erreur="Les mots de passe inserées sont différentes";
                    	    echo '<meta http-equiv="Refresh" content="0;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&phone='.$_POST ['phone'].'&adresse='.$_POST['adresse'].'&mail='.$_POST ['email'].'&e='.$erreur.'">';

					}
	
                    else{
                      enregistrer($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['phone'],$_POST['adresse'],$_POST['email'],$_POST['mdp1']);
                    	echo '<meta http-equiv="Refresh" content="0;url=accueil2.php">';
                    }
                   ?>

        </body>
    </html>
