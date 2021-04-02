<!DOCTYPE html>
    <html>
    <head classe = "header">
        <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    </head>
    <body>
        <?php include ("head2.php");?>
        <table class = 'table_formulaire'>
                <thead>
                    <tr>
                        <th>Criteres </th>
                        <th>Selection</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Critère 1</th>
                        <th>
                         <form method="GET" action="classement.php" autocomplete="off">
                                <select name="critere1">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Critère 2</th>
                        <th>
                            
                                <select name="critere2">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Critère 3</th>
                        <th>
                            
                                <select name="critere3">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Critère 4</th>
                        <th>
                            
                                <select name="critere4">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>

                    </tr>
                    <tr>
                        <th>Critère 5</th>
                        <th>
                           
                                <select name="critere5">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Critère 6</th>
                        <th>
                           
                                <select name="critere6">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Critère 7</th>
                        <th>
            
                                <select name="critere7">
									<option></option>
                                    <option>Securité</option>
                                    <option>Transports</option>
                                    <option>Sport</option>
                                    <option>Meteo</option>
                                    <option>Culture</option>
                                    <option>Loyer</option>
                                    <option>Crous</option>
                                </select>
                        </th>
                    </tr>
				 <tr>
				<th><input type="submit" value="Send" class = 'bouton_submit'/></th>
            </tr>
			 </form>



            <?php include ("foot2.php");?>
   

    </body>
</html>
