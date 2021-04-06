<?php
session_start();
session_destroy();
header("location:accueil2.php");
echo'<meta http-equiv="Refresh" content="0; accueil2.php"/>';
?>
