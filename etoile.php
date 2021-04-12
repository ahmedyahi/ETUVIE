<?php function etoile($val){ ?>

<div style="display:inline-block;position:relative;width:100px;">
			<?php if($val==0){
				$val=20; ?>
				<div style="height:20px; width:<?=$val;?>px; background:#FFF;" >

				<div id="glob">
				<img id="tde_1" src="star.png" alt="image etoiles" class="tde" />
				</div>
			</div>
		</div>
			<?php	
			}
			else{ ?>
			<div style="height:20px; width:<?=$val;?>px; background:#E0E001;" >
				
				<div id="glob">
				<img id="tde_1" src="star.png" alt="image etoiles" class="tde" />
				</div>
			</div>
		</div>
		<?php 	}
		
} ?>