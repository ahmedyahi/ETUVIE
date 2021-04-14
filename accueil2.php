<?php 
	session_start();
	?>
<!DOCTYPE html>
    <html>
      <head classe = "header">
	      <link rel="shortcut icon" href="logo.ico" type="logo-icon">
	      <link rel="icon" href="logo.ico" type="logo-icon">
        <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style>
          p{
            text-align:center;
            color:white;
            padding:10px;
            font-size:20px;
          }
        </style>

      </head>
      <body>
        <?php
          include('bd.php'); 
          $bdd = getBD();	
          $rep=$bdd->query('select * from villes'); 
          $rep1=$bdd->query('select * from villes'); 
          include ("head2.php");?>
		 <div>		  
            <div id="search">
              <form method="GET" action="fiche_ville.php"  autocomplete="off">
                <select name="Ville">
                  <?php 
                    while($ligne1=$rep1->fetch()){
                      echo "<option>". $ligne1["Ville"]."</option>";
                    }?>
                </select>
                <input type="submit" value="Rechercher" class = 'bouton_submit'/>
              </form>
          </div>
          <div id='slide_images2'>
            <div id="slide_images">
              <div class="slider">
                <div class="slides">
                  <?php while($ligne=$rep->fetch()) {?>
                    <div class="slide"> <?php echo " <a href='fiche_ville.php?Ville=".$ligne["Ville"]."' >" ?> <img width=500px src=<?php echo $ligne["url_photo"] ?> alt="image ville" /> </a> </div> 
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
		  </div>
		  
          <div>
			
              <p style =" font: italic bold 30px cursive;color:#115A83;">Classer</p>
              <p style ="font: italic bold 30px cursive;color:#115A83;">Comparer</p>
              <p style ="font: italic bold 30px cursive;color:#115A83;">Noter</p> 
			  <div id="menu_pied">
            <?php include ("menu.php");?></div>
			  
          </div> 
         
          <?php include ("foot2.php");?>
      </body>
    </html>
