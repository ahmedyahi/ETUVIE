
<?php function etoiles($val){ ?>
<!-- Fonction pour score sur 5 étoiles: par rapport à la note finale pour une ville qui est passée en paramètre on remplit les étoiles en jaune,
5 étoiles sont le 100% 
Les images de 5 étoiles vides sont affichées dans un div, un div de deuxième niveau permet de remplir en jaune avec une certaine pourcentage les images
-->
<div style="display:inline-block;position:relative;width:100px;">
			<div style="height:20px; width: <?=$val;?>px; background:#E0E001;" >
				
				<div id="glob">
				
					<img id="tde_1" src="star.png" alt="image etoiles" class="tde" />
					<img id="tde_2" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_3" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_4" src="star.png" alt="image etoiles" class="tde"/>
					<img id="tde_5" src="star.png" alt="image etoiles" class="tde"/>
				</div>
			</div>
		</div>
		
		
<?php } ?>