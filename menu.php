<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="styleH2.css"
            type="text/css" media="screen" />
            <meta http-equiv="Content-Type"
            content="text/html; charset=UTF-8" />
<style>
.cadrem {
  position: relative;   
  width: 100px;          
  overflow: hidden;     
  line-height: 2em;     
  display:inline;
}
.cadrem img {
  z-index: 1;          
  position: relative;   
  width: 100px; 
}  
.cadrem span{
  display: none;
  position: absolute;
  width:150px;
  margin-left: -100%;   
  top:-570%;
  padding: 0 .25em;     
  color: #eee;          
  background: #069;     
  transition: all .5s;  
  opacity:0.7;
  border-radius:10%;
  
}
.cadrem:hover span{
  display:block;
  left: 2em;            
}
			
</style>
        </head>
        <body>
            <div class= "position_menu" >
				<div class="cadrem"> 
				<span>Accueil</span>
                <a href  = "accueil2.php" class = "liens_formulaire"><img class = icone style="width: 75px;px;height: 75px;" src = 'bouton_acceuil.png'></a>
                </div>
				<div class="cadrem"> 
				<span>Classement</span>
				<a href = "formulaire_selection.php"class = "liens_formulaire"><img class = icone style="width: 75px;px;height: 75px;" src = 'bouton_classement.png'></a>
                </div>
				<div class="cadrem"> 
				<span>Comparateur</span>
				<a href = "selection comparateur.php" class = "liens_formulaire"><img class = icone style="width: 75px;px;height: 75px;" src = 'bouton_comparateur.png'></a>
                </div>
				<div class="cadrem"> 
				<span>Avis</span>
				<a href = "Avis.php" class = "liens_formulaire" ><img class = icone style="width: 75px;px;height: 75px;" src = 'bouton_avis.png'></a>
				</div>
			</div>




        </body>
        </html>
