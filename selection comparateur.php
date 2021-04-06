<?php
 session_start();
 ?>
<!DOCTYPE html>
    <html>
    <head classe = "header">
        <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    </head>
    <body>
        <?php include ("head2.php");?>
		<?php
			include('bd.php'); 
			$bdd = getBD();	
			$rep=$bdd->query('select * from villes'); 
			$rep1=$bdd->query('select * from villes'); 	
	?>
        <table class = 'table_formulaire'>
                <thead>
                    <tr>
                        <th>Villes </th>
                        <th>Selection</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ville 1</th>
                        <th>
                            <form method="GET" action="comparateur.php" autocomplete="off">
                                <select name="Ville1">
                                    <?php 
										while($ligne=$rep->fetch()){
											echo "<option>". $ligne["Ville"]."</option>";
										}
				
									?> 
                                </select>
                            
                        </th>
                    </tr>
                    <tr>
                        <th>ville 2</th>
                        <th>
                                <select name="Ville2">
                                    <?php 
										while($ligne1=$rep1->fetch()){
											echo "<option>". $ligne1["Ville"]."</option>";
										}
									?> 
                                </select>

                         
                        </th>
                    </tr>
                    <tr>
                        <th><input type="submit" value="Send" class = 'bouton_submit'/></th>
					
                    </tr>
					</form>
					</table>
                    <div id="menu_pied">
                    <?php include ("menu.php");?>
                </div>

            <?php include ("foot3.php");?>


    </body>
</html>
