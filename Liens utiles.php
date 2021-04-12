
<!DOCTYPE html>
	<html>
			<link rel="shortcut icon" href="logo.ico" type="logo-icon">
	      	<link rel="icon" href="logo.ico" type="logo-icon">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<head classe = "header">
			<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />	
			<TITLE>Criteres</TITLE>
			<style>
			td{
				font: italic small-caps bold  14px cursive;
				padding-bottom:15px;
				color:#fff;	
			}
				
 .cadrelu{
  position: relative;   
  width: 50px;          
  overflow: hidden;     
  line-height: 2em;     
  display:inline;
}
.cadrelu img {
  z-index: 1;           
  position: relative;   
      
}
.cadrelu span {
  display: none;
  position: absolute;  
  width:500px;
  margin-left:-50%;
  top:-1500%;
  padding: 0 .25em;     
  color: #eee;         
  background: #069;     
  opacity:0.7;
  border-radius:10%;
  
}
.cadrelu:hover span{
  display:block;
  left: -5em;            
}


			
			</style>
    </head>
        
        <body>
        <?php include ("head2.php");?>
        
        <table class='table_formulaire'>
                <tr>
                <th> <div class="cadrelu"> <span>(Type de crime*coefficient de gravité)/100</span>	<img class = icone style="width: 150px;px;height: 150px;" src = 'Securite.png'></a> </div> </th>
                <th> <div class="cadrelu"> <span>(((Loyer moyen / surface moyenne) * coefficient par rapport au nombre de pièces) + nombre total des logements) / densité de la population </span><img class = icone style="width: 150px;px;height: 150px;" src = 'Loyer.png'></a> </div> </th>
                <th>  <div class="cadrelu"> <span>(Nombre d'arrets/densité de la population)*(prix abbonement annuel étudiant/100) </span><img class = icone style="width: 150px;px;height: 150px;" src = 'Transport.png'></a> </div>  </th>
                <th>  <div class="cadrelu"> <span>(Nombre de festivals + nombre de musées + nombre des cinémas + nombre bibliothéques) / la densité de la population </span><img class = icone style="width: 150px;px;height: 150px;" src = 'Culture.png'></a></div>  </th>
                <th>  <div class="cadrelu"> <span>(((Temperature max * 0.3) +((jours de soleil/100) *0.4))/0.7)/(((temperature minimale*0.3)+((jours de pluie/20)*0.2)+(jours d'orage*0.1)+(jours de neige*0.1))/0.7))</span><img class = icone style="width: 150px;px;height: 150px;" src = 'meteo.png'></a> </div> </th>
                <th>  <div class="cadrelu"> <span>(nombre d'equipements sportifs + nombre d'installation sportives) / densité de la population</span><img class = icone style="width: 150px;px;height: 150px;" src = 'Sport.png'></a> </div> </th>
                <th>  <div class="cadrelu"> <span>Nombre de restaurants /  la densité de la population  </span><img class = icone style="width: 150px;px;height: 150px;" src = 'crous.png'></a> </div> </th>
                </tr>
				<tr>
				<td>  Securité </td>
                <td >Loyer </td>
                <td > Transports</td>
                <td > Culture </td>
                <td > Météo</td>
                <td > Sport</td>
               <td > Crous </td>
       
            
            </table>
            

        	<div id="menu_pied">
				<?php include ("menu.php");?></div>
			<?php include ("foot3.php");?>
		</body>

	</html>
