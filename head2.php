
 <!DOCTYPE html>
 <html>
  <head>
        <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<style>
			.cadreh {
                    position: relative;  
                    width: 100px;         
                    overflow: hidden;     
                    line-height: 2em;    
                    display:inline;
                    }
                    .cadreh img {
                    z-index: 1;           
                    position: relative;  
                    width: 100px;           
                    }
                    .cadreh span {
                        display: none;
                        position: absolute;
                        margin-right:5px; 
                        width:150px;
                        right: 10px;
                        padding: 0 .25em;
                        color: #069;
                        background: #fff;
                        transition: all .5s; 
                        opacity:0.5;
                        border-radius:10%;
                        z-index:15;
                     
                        

                        }
                    .cadreh .spanin {
                    display: none;
                    position: absolute; 
                    width:150px;
                    margin-left: -250%;   
                    top:120%;
                    padding: 0 .25em; 
                    padding-bottom:1em;
                    text-align:center;
                    color: #069;          
                    background: #fff;     
                    transition: all .5s; 
                    opacity:0.5;
                    border-radius:10%;
                    z-index:25;
                    
                    }
                    .cadreh:hover span{
                    display:block;
                    left: 2em;            
                    }

			
			</style>
        </head>
    <body>
        <div >
            <div class="header">
                <div class = "ident">
                    <?php if( isset($_SESSION['users'])){?>
			    <div id = "icone_header">
				<div class="cadreh"> 
					<span>Profil</span>
                    <a href='profil.php' > <img class = icone style="width:70px;height:70px;padding-top:2%" src=user.png alt="image user" /></a>;</div>
					</div>
			   <div id = "icone_header2">	
				<div class="cadreh"> 
					<span>Déconnexion</span>
                    <a href='deconnexion.php' > <img class = icone style="width: 70px;height:70px;padding-top:2%" src=deconnexion.png alt="image disconnect" /></a>;
			    </div>
				</div>
            <?php
            }
        else { 
            if(isset($_GET["t"])){
                echo "<div style='color:red;text-align:center;'>";
                echo $_GET["t"];
                echo "</div>";
                ?>
                <form action="connecter.php" method="POST" autocomplete="off">
                <input style = "border-radius:10%"  placeholder="entrez votre username" type="text" name="username" value=""/>
                <input style = "border-radius:10%" placeholder="entrez votre mot de passe" type="password" name="mdp" value=""/>
                <input classe = "bouton_submit"  type="submit" value="Connexion">
				<div class="cadreh"> 
				<span class='spanin'>S'inscrire</span>
                <a href="inscription.php"  class = "liens_formulaire"><img style="width: 30px;px;height: 30px;" src = 'inscrire.png'></a>
				</div>
                </form>
            <?php }

            else {
                ?>
            <form action="connecter.php" method="POST" autocomplete="off">
             <input style = "border-radius:10%"  placeholder="entrez votre username" type="text" name="username" value=""/>
             <input style = "border-radius:10%"  placeholder="entrez votre mot de passe" type="password" name="mdp" value=""/>
             <input  type="submit" value="Connexion">

			<div class="cadreh"> 
			<span class='spanin'>S'inscrire</span>
             <a href="inscription.php" > <a href="inscription.php"  class = "liens_formulaire"><img  style="width: 30px;px;height: 30px;" src = 'inscrire.png'></a>
             </div>
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