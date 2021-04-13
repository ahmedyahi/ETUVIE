<html>
<head>
<title>Modification</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />	
</head>
<body>
 
<?php
		include ("head2.php");
		$id= $_GET["id"];
		include('bd.php'); 
		$bdd = getBD();	
		$rep=$bdd->query('select * from avis where id=\''.$id.'\''); 
		$ligne=$rep->fetch();
	?>
			<div class="table_formulaire">
						<table class = "classement">
									<!-- Après la modification,on renvoie à la page historique avis avec l'identifiant et le text pour l'update -->
									<form action="historiqueAvis.php" method="get" autocomplete="off">
										<input type="hidden" name="idA" step=0 value="<?php echo $id; ?> "/> 
											<tr><p>Commentaire:</tr>
										
											<tr><input type="textarea" name="avis" value= "<?php  echo $ligne["text"]; ?>" /></p></tr>
										
											<tr><p><input type="submit" value="Envoyer"></p></tr>
									</form>
								
						</table>
					</div>
 									
						</body>
	 					<div id="menu_pied">
							<?php include ("menu.php");?>
						</div>
						<?php include ("foot3.php");?>


</html>