<?php
function getBD(){
$bdd = new PDO("mysql:host=localhost;dbname=Etuvie;charset=utf8",
		'root', '');
return $bdd;
}
?>
