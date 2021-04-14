<!DOCTYPE html>
        <html>
            <head>
            <link rel="shortcut icon" href="logo.ico" type="logo-icon">
	      	<link rel="icon" href="logo.ico" type="logo-icon">
            
            </head>
            <body>
                   
            
                    <link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <style>
                    p{

                    width:500px;
                    margin:auto;
                    font-family:Times New Roman;
                    font-size:120%;
                    padding-top: 20px;

                    }
                    p+ #bouton{
                    text-align:center;

                    }
                    </style>
                    </HEAD>
                    <body>
                    


                    <?php include ("head2.php");?>
                    <?php if(isset($_GET["e"])){ /*Si la page enregistrement renvoie une phrase d'erreur alors on affiche la phrase d'erreur*/
                        echo "<div style ='padding-bottom :50px ;width : 200px ; height : 50 px;' class = 'table_formulaire';>";
                            echo "<p style='color: red'>";?>
                                <img class = icone style="width: 50px;height: 50px; display:block; margin-right:auto; margin-left:auto;" src = 'attention.png'/>
                                <?php echo $_GET["e"];
                            echo  "</p>";
                        echo "</div>";
            
                    }?>
                    <div class="table_formulaire">
                    <div><img class = icone style="width:150px;height:150px;margin-left:auto;margin-right:auto;" src=user.png alt="image user" /></div>
                    <form action="enregistrement.php" method="POST" autocomplete="off">

                        <p><input type="text" name="nom"  value= "<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>" placeholder="Nom"/></p>
                       
                        <p><input type="text" name="prenom"  value= "<?php if(isset($_GET['prenom'])) echo $_GET['prenom']; ?>" placeholder="Prenom"/></p>
                       
                        <p><input type="text" name="username"  value= "<?php if(isset($_GET['username'])) echo $_GET['username']; ?>" placeholder="Username"/></p>
                       
                        <p><input type="text" name="phone"  value= "<?php if(isset($_GET['phone'])) echo $_GET['phone']; ?>" placeholder="Phone"/></p>
                       
                        <p><input type="text" name="adresse"  value= "<?php if(isset($_GET['adresse'])) echo $_GET['adresse']; ?>" placeholder="Adresse"/></p>
                       
                        <p><input type="text" name="email" value= "<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>" placeholder="Email"/></p>
                        

                        <p><input type="password" name="mdp1" value="" placeholder="Password"/></p>
                        
                        <p><input type="password" name="mdp2"  value="" placeholder="Confirm password"/></p>

             
                        <p><input type="submit" value="Valider" /></p>



                    </form>

                    
                    </div>
                  
                    <div id="menu_pied" style = "padding-bottom: 100px">
                        <?php include ("menu.php");?></div>
                    <?php include ("foot3.php");?>
        





            </body>
        </html>
