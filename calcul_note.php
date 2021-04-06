<?php
		function calculValue($Ville1)	{
			
			include 'note_culture.php';
			include 'note_sport.php';
			include 'note_crous.php';
			include 'note_meteo.php';
			include 'note_transport.php';
			include  'note_securite.php';
			include  'note_loyer.php';
			$culture=noteCulture($Ville1);
			$sport=noteSport($Ville1);
			$crous=noteCrous($Ville1);
			$meteo=noteMeteo($Ville1);
			$transport=noteTransport($Ville1);
			$securite=noteSecurite($Ville1);
			$loyer=noteLoyer($Ville1);
			$value1=(($culture+$sport+$crous+$meteo+$transport+$securite+$loyer)/7)*10;
			$value1+=10;
			return $value1;
		}
		?>
		