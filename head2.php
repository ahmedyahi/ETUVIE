
 <!DOCTYPE html>
 <html>
 <body>
 <div id="menu">

      <div class="header">

        <div class = "ident">
		<?php if( isset($_SESSION['users'])){
				echo "<a href='profil.php' >". "Mon profil"." </a>";
				echo "<a href='deconnexion.php' >". "Deconnexion"." </a>";
				
			}
		else { 
			if(isset($_GET["t"])){
				echo $_GET["t"];
						?>
				<form action="connecter.php" method="POST" autocomplete="off">
				<input placeholder="entrez votre username" type="text" name="username" value=""/>
				<input placeholder="entrez votre mot de passe" type="password" name="mdp" value=""/>
				<input type="submit" value="Connexion">
				<a href="inscription.php" > S'inscrire </a>
				</form>
			<?php }
				
			else {	
				?>
			<form action="connecter.php" method="POST" autocomplete="off">
             <input placeholder="entrez votre username" type="text" name="username" value=""/>
             <input placeholder="entrez votre mot de passe" type="password" name="mdp" value=""/>
			 <input type="submit" value="Connexion">


             <a href="inscription.php" > S'inscrire </a>
             </form>
	<?php  }
	} ?>
         </div>


                  <div class="logo">
                  		<img src="etuvie.jpg" alt="" />
                  </div>
      </div>


    </div>
	
</body>
</html>
