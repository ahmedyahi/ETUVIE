<?php

$nom=$prenom=$phone=$adresse=$email=$password=$mdpc=$image="";
$nomErr=$prenomErr=$phoneErr=$adresseErr=$emailErr=$passwordErr=$mdpcErr=$imageErr="";
$suces=false;

if(!empty($_POST))
{
    $nom=securite($_POST["nom"]);
    $prenom=securite($_POST["prenom"]);
	$username=securite($_POST["username"]);
    $phone=securite($_POST["phone"]);
    $adresse=securite($_POST["adresse"]);
    $email=securite($_POST["email"]);
    $password=securite($_POST["mdp"]);
    $mdpc=securite($_POST["mdcp"]);

    //$image=securite($_FILES["image"]["name"]);
    //$imagePath='images/'.basename($image);
    //$imageExtension=pathinfo($imagePath,PATHINFO_EXTENSION);

    $isUpload=false;
    $suces=true;

    if(empty($nom))
    {
        $nomErr="Veuillez saisir votre nom s'il vous plait !";
        $suces=false;
    }
     if(empty($prenom))
    {
        $prenomErr="Veuillez saisir votre prenom s'il vous plait !";
         $suces=false;
    }
	 if(empty($username))
    {
        $usernameErr="Veuillez saisir votre username s'il vous plait !";
         $suces=false;
    }

    if(!isPhone($phone))
    {
        $phoneErr="Veuillez saisir des chiffres s'il vous plait !";
        $suces=false;
    }
     if(!isEmail($email))
    {
        $emailErr="Veuillez saisir votre email s'il vous plait !";
         $suces=false;
    }else
     {

         $db=new PDO('mysql:host=localhost;dbname=Projet_L3;charset=utf8', 'root', 'root');
         $resu=$db->query("select email from clients ");
         while($ligne=$resu->fetch())
         {
             $test=$ligne['email'];
             if($test==$email)
             {
                 $emailErr="Ce nom utilisateur existe deja !";
                 $suces=false;
             }
         }

     }

    if(empty($adresse))
    {
        $adresseErr="Veuillez saisir votre adresse s'il vous plait !";
        $suces=false;
    }

     if(empty($password))
    {
        $passwordErr="Veuillez saisir votre mot de passe s'il vous plait !";
         $suces=false;
    }
    if(empty($mdpc))
    {
        $passwordErr="Veuillez confirmer le mot de pass s'il vous plait !";
        $suces=false;
    }
    else
     {
       if($mdpc!=$password)
       {
          $passwordErr="Le mot de pass sont differents merci de reessayer !";
          $suces=false;
       }
     }

    /* ----------------------------------xa commence ici la base de donnee---------------------------------*/

    if($suces)
    {
        $db=new PDO('mysql:host=localhost;dbname=Projet_L3;charset=utf8', 'root', 'root');
        $resulta=$db->prepare(" INSERT into clients (id_client,nom,prenom,phone,adresse,email,mot_passe) values(?,?,?,?,?,?,?)");
        $resulta->execute(array(null,$nom,$prenom,$phone,$adresse,$email,$password));

        $_SESSION['var']=$prenom;

        header("location: accueil2.php");


    }
     /* ----------------------------------xa fini ici la base de donnee---------------------------------*/






}
function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/",$var);
}
function isEmail($var)
{
    return filter_var($var,FILTER_VALIDATE_EMAIL);
}

function securite($var)
{
    $var=htmlspecialchars($var);
    $var=stripslashes($var);
    $var=trim($var);
    return $var;
}





?>
<!DOCTYPE HTML>
<HTML>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Index</TITLE>
<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
p{

width:500px;
margin:auto;
font-family:Times New Roman;
font-size:120%;
padding-top: 20px;

}
p+ #bouton{
text-align:center;

}
</style>
</HEAD>
<body>



  <?php include ("head2.php");?>
  <div class="table_formulaire">

<form action="enregistrement.php" method="POST" autocomplete="off">

      <p>Nom: <input type="text" name="nom"  value= "<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>"/></p>
    <?php echo $nomErr; ?>

      <p>Prenom: <input type="text" name="prenom"  value= "<?php if(isset($_GET['prenom'])) echo $_GET['prenom']; ?>"/></p>
     <?php echo $prenomErr; ?>
	 
      <p>Username: <input type="text" name="username"  value= "<?php if(isset($_GET['username'])) echo $_GET['username']; ?>"/></p>
    <?php echo $nomErr; ?>

      <p>Telephone: <input type="text" name="phone"   value= "<?php if(isset($_GET['phone'])) echo $_GET['phone']; ?>"/></p>
     <?php echo $phoneErr; ?>

      <p>Adresse: <input type="text" name="adresse"  value= "<?php if(isset($_GET['adresse'])) echo $_GET['adresse']; ?>"/></p>
     <?php echo $adresseErr; ?>

      <p>Email: <input type="text" name="email" value= "<?php if(isset($_GET['email'])) echo $_GET['email']; ?>"/></p>
     <?php echo $emailErr; ?>

     <p>Password : <input type="password" name="mdp1" value=""/></p>
    <?php echo $passwordErr; ?>

 <p>Confirmer Password : <input type="password" name="mdp2"  value=""/></p>

       <!--
 <th>Photo :</th><th><input type="file" id="image" name="photo"  value=""/></th>
       <th><?php echo $imageErr; ?></th>
 </th>  -->

     <p><input type="submit" value="Valider" /></p>



</form>


</div>
<?php //include ("foot2.php");?>





</body>
</html>
