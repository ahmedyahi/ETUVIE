<?php
 session_start();
 ?>
<!DOCTYPE html>
    <html>
		<head classe = "header">
			<link rel="stylesheet" href="styleH2.css" type="text/css" media="screen" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<!-- Les cadres et le spans servent pour afficher une phrase au survol d'une icone -->
			<style>
				.cadrecl {
				  position: relative;   
				  width: 100px;         
				  overflow: hidden;     
				  line-height: 2em;     
				  display:inline;
				}
				.cadrecl img {
				  z-index: 1;           
				  position: relative;  
				  width: 100px;          
				}
				.cadrecl span {
				  display: none;
				  position: absolute;  
				  width:450px;
				  margin-right:auto; 
				  margin-left:auto;   
				  bottom:-500%;
				  padding: 0 .25em;     
				  color: #eee;          
				  background: #069;     
				  transition: all .5s;  
				  opacity:0.7;
				  border-radius:10%;
				  
				  
				}
				.cadrecl:hover span{
				  display:block;
				  left: 2em;          
				}
				p{
					font: italic small-caps bold 15px cursive;
					padding-bottom:15px;
					color:#fff
				}

			</style>

		</head>
		<body>
			<script>
				function optionClic(id,sel,sel1,sel2,sel3,sel4,sel5,sel6,count,tmp1,tmp2,tmp3,tmp4,tmp5,tmp6,tmp7){
					var sel1=document.getElementById(sel1);
					var sel2=document.getElementById(sel2);
					var sel3=document.getElementById(sel3);
					var sel4=document.getElementById(sel4);
					var sel5=document.getElementById(sel5);
					var sel6=document.getElementById(sel6);
					sel1.style="display:none;";
					sel2.style="display:none;";
					sel3.style="display:none;";
					sel4.style="display:none;";
					sel5.style="display:none;";
					sel6.style="display:none;";
					/* Les if suivants permet de faire apparaitre dans tous les select de nouveau une option qu'on a changé. */
					var i,j;
					if(count>0){
						if(tmp1>0){
							var bool=1;
							for(j=1;j<8;j++){
								var y="s"+j; /* si n'est pas changé on fait rien*/
								if(id==y)
								bool=0;
							}
							if(bool=1){  /* si on a changé on la fait apparaitre de nouveau*/
								for(i=1;i<8;i++){
									var x="s"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}	
						if(tmp2>0){
							var bool=1;
							for(j=1;j<8;j++){
								var y="t"+j;
								if(id==y)
								bool=0;
							}
							if(bool=1){
								for(i=1;i<8;i++){
									var x="t"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}	
						if(tmp3>0 && id!="v"){
							var bool=1;
							for(j=1;j<8;j++){
								var y="sp"+j;
								if(id==y)
								bool=0;
							}
							if(bool=1){
								for(i=1;i<8;i++){
									var x="sp"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}	
						if(tmp4>0){
							var bool=1;
							for(j=1;j<8;j++){
								var y="m"+j;
								if(id==y)
								bool=0;
							}
							if(bool=1){
								for(i=1;i<8;i++){
									var x="m"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}	
						if(tmp5>0){
							var bool=1;
							for(j=1;j<8;j++){
								var y="c"+j;
								if(id==y)
								bool=0;
							}
							if(bool=1){
								for(i=1;i<8;i++){
									var x="c"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}
						if(tmp6>0){
							var bool=1;
							for(j=1;j<8;j++){
								var y="l"+j;
								if(id==y)
								bool=0;
							}
							if(bool=1){
								for(i=1;i<8;i++){
									var x="l"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}
						if(tmp7>0){
							var bool=1;
							for(j=1;j<8;j++){
								var y="cr"+j;
								if(id==y)
								bool=0;
							}
							if(bool=1){
								for(i=1;i<8;i++){
									var x="cr"+i;
									var s=document.getElementById(x);
									s.style="display:block;";
								}
							}
						}	
					}		
				}

			</script>
			<?php include ("head2.php");?>
			<script>		
						var  a=0;
						var  b=0;
						var  c=0;
						var  d=0;
						var  e=0;
						var  f=0;
						var  g=0;
						var k=0;
						var a1=0,a2=0,a3=0,a4=0,a5=0,a6=0,a7=0;
						var b1=0,b2=0,b3=0,b4=0,b5=0,b6=0,b7=0;
						var c1=0,c2=0,c3=0,c4=0,c5=0,c6=0,c7=0;
						var d1=0,d2=0,d3=0,d4=0,d5=0,d6=0,d7=0;
						var e1=0,e2=0,e3=0,e4=0,e5=0,e6=0,e7=0;
						var f1=0,f2=0,f3=0,f4=0,f5=0,f6=0,f7=0;
						var g1=0,g2=0,g3=0,g4=0,g5=0,g6=0,g7=0;
					
					
			</script>
			<?php if(isset($_GET["e"])){
                        echo "<div style ='padding-bottom :50px ;width : 200px ; height : 50 px;' class = 'table_formulaire';>";
                            echo "<p style='color: red'>";?>
                                <img class = icone style="width: 50px;height: 50px; display:block; margin-right:auto; margin-left:auto;" src = 'attention.png'/>
                                <?php echo $_GET["e"];
                            echo  "</p>";
                        echo "</div>";
            
                    }
			?>
			
			<table class = 'table_formulaire'>
				<thead>
					
					
					<tr>
						<th><img class = icone style="width: 75px;px;height: 75px;" src = 'bouton_classement.png'></th>
						<th colspan = '2'> <p style ='font: italic small-caps bold 18px cursive;padding-bottom:15px;color:#fff; text-align:center'>Choisissez un ou plusieurs criteres et classez les par ordre d'importance </p> </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th><p>Degré d'importance</p></th>
						<th><p>Criteres</p></th>
					</tr>
					<tr>
						<th>
							<p>Critère 1</p>
						</th>
						<th>
							<form method="GET" action="classement.php" autocomplete="off">
								<select id="sel1" name="critere1">
								<!-- Pour que un critère choisit ne s'affiche plus comme option dans les autres choix on utilise du code JS avec la fonction onclick 
									où on envoie comme paramètres l'identifiant de l'option choisie (ex "s1"),le selecteur (select ex "sel1") correspondant à cette option,tous les identifiants de l'option choisie
									pour les autres 6 selecteurs (ex "s2","s3" etc.). Ces paramètres suffiront pour masquer cette option dans les autres sélécteurs,mais ne permet pas,au moment où on change 
									cette choix, de la refaire apparaitre dans les autres sélécteurs. Donc on envoie un compteur initialisé à 0 (ex "a++") qui permet de tenir compte qu'on a déjà choisit avant une option dans le respectif sélécteur,
									En plus,pour garder quelle option on avait choisit en dernière dans le selecteur,on envoie des nouveaux compteurs initialisés à 0 (ex "a1","a2" etc) où seulement celui associé au identifiant est envoyé à +1.
								
								-->
										<option> </option>
										<option id="s1" onclick="optionClic('s1','sel1','s2','s3','s4','s5','s6','s7',a++,a1++,a2,a3,a4,a5,a6,a7)" >Securité</option> 
										<option id="t1" onclick="optionClic('t1','sel1','t2','t3','t4','t5','t6','t7',a++,a1,a2++,a3,a4,a5,a6,a7)">Transports</option>
										<option id="sp1" onclick="optionClic('sp1','sel1','sp2','sp3','sp4','sp5','sp6','sp7',a++,a1,a2,a3++,a4,a5,a6,a7)">Sport</option>
										<option id="m1" onclick="optionClic('m1','sel1','m2','m3','m4','m5','m6','m7',a++,a1,a2,a3,a4++,a5,a6,a7)">Meteo</option>
										<option id="c1"onclick="optionClic('c1','sel1','c2','c3','c4','c5','c6','c7',a++,a1,a2,a3,a4,a5++,a6,a7)" >Culture</option>
										<option id="l1" onclick="optionClic('l1','sel1','l2','l3','l4','l5','l6','l7',a++,a1,a2,a3,a4,a5,a6++,a7)">Loyer</option>
										<option id="cr1" onclick="optionClic('cr1','sel1','cr2','cr3','cr4','cr5','cr6','cr7',a++,a1,a2,a3,a4,a5,a6,a7++)">Crous</option>
								</select>
						</th>
					</tr>
					<tr>
						<th><p>Critère 2</p></th>
							<th>
								<select  id="sel2"   name="critere2">
									<option></option>
									<option id="s2" onclick="optionClic('s2','sel2','s1','s3','s4','s5','s6','s7',b++,b1++,b2,b3,b4,b5,b6,b7)">Securité</option>
									<option id="t2" onclick="optionClic('t2','sel2','t1','t3','t4','t5','t6','t7',b++,b1,b2++,b3,b4,b5,b6,b7)">Transports</option>
									<option id="sp2" onclick="optionClic('sp2','sel2','sp1','sp3','sp4','sp5','sp6','sp7',b++,b1,b2,b3++,b4,b5,b6,b7)">Sport</option>
									<option id="m2" onclick="optionClic('m2','sel2','m1','m3','m4','m5','m6','m7',b++,b1,b2,b3,b4++,b5.b6,b7)">Meteo</option>
									<option id="c2" onclick="optionClic('cl2','sel2','c1','c3','c4','c5','c6','c7',b++,b1,b2,b3,b4,b5++,b6,b7)">Culture</option>
									<option id="l2" onclick="optionClic('l2','sel2','l1','l3','l4','l5','l6','l7',b++,b1,b2,b3,b4,b5,b6++,b7)">Loyer</option>
									<option id="cr2" onclick="optionClic('cr2','sel2','cr1','cr3','cr4','cr5','cr6','cr7',b++,b1,b2,b3,b4,b5,b6,b7++)">Crous</option>
								</select>
							</th>
					</tr>
					<tr>
							<th><p>Critère 3</p></th>
							<th>
								<select id="sel3" name="critere3">
									<option></option>
									<option id="s3" onclick="optionClic('s3','sel3','s1','s2','s4','s5','s6','s7',c++,c1++,c2,c3,c4,c5,c6,c7)">Securité</option>
									<option id="t3"  onclick="optionClic('t3','sel3','t1','t2','t4','t5','t6','t7',c++,c1,c2++,c3,c4,c5,c6,c7)">Transports</option>
									<option id="sp3"  onclick="optionClic('sp3','sel3','sp1','sp2','sp4','sp5','sp6','sp7',c++,c1,c2,c3++,c4,c5,c6,c7)" >Sport</option>
									<option id="m3"  onclick="optionClic('m3','sel3','m1','m2','m4','m5','m6','m7',c++,c1,c2,c3,c4++,c5,c6,c7)">Meteo</option>
									<option id="c3"  onclick="optionClic('c3','sel3','c1','c2','c4','c5','c6','c7',c++,c1,c2,c3,c4,c5++,c6,c7)">Culture</option>
									<option id="l3"  onclick="optionClic('l3','sel3','l1','l2','l4','l5','l6','l7',c++,c1,c2,c3,c4,c5,c6++,c7)">Loyer</option>
									<option id="cr3"  onclick="optionClic('cr3','sel3','cr1','cr2','cr4','cr5','cr6','cr7',c++,c1,c2,c3,c4,c5,c6,c7++)">Crous</option>
								</select>
							</th>
					</tr>
					<tr>
							<th><p>Critère 4</p></th>
							<th>
										
								<select id="sel4" name="critere4">
									<option></option>
									<option id="s4" onclick="optionClic('s4','sel4','s1','s2','s3','s5','s6','s7',d++,d1++,d2,d3,d4,d5,d6,d7)">Securité</option>
									<option id="t4" onclick="optionClic('t4','sel4','t1','t2','t3','t5','t6','t7',d++,d1,d2++,d3,d4,d5,d6,d7)">Transports</option>
									<option id="sp4" onclick="optionClic('sp4','sel4','sp1','sp3','sp4','sp5','sp6','sp7',d++,d1,d2,d3++,d4,d5,d6,d7)">Sport</option>
									<option id="m4" onclick="optionClic('m4','sel4','m1','m2','m3','m5','m6','m7',d++,d1,d2,d3,d4++,d5,d6,d7)">Meteo</option>
									<option id="c4" onclick="optionClic('c4','sel4','c1','c2','c3','c5','c6','c7',d++,d1,d2,d3,d4,d5++,d6,d7)">Culture</option>
									<option id="l4" onclick="optionClic('l4','sel4','l1','l2','l3','l5','l6','l7',d++,d1,d2,d3,d4,d5,d6++,d7)">Loyer</option>
									<option id="cr4" onclick="optionClic('cr4','sel4','cr1','cr2','cr3','cr5','cr6','cr7',d++,d1,d2,d3,d4,d5,d6,d7++)">Crous</option>
								</select>
							</th>

					</tr>
					<tr>
							<th><p>Critère 5</p></th>
							<th>
								<select id="sel5" name="critere5">
									<option></option>
									<option id="s5"  onclick="optionClic('s5','sel5','s1','s2','s3','s4','s6','s7',e++,e1++,e2,e3,e4,e5,e6,e7)">Securité</option>
									<option id="t5"  onclick="optionClic('t5','sel5','t1','t2','t3','t4','t6','t7',e++,e1,e2++,e3,e4,e5,e6,e7)">Transports</option>
									<option id="sp5"  onclick="optionClic('sp5','sel5','sp1','sp2','sp3','sp4','sp6','sp7',e++,e1,e2,e3++,e4,e5,e6,e7)">Sport</option>
									<option id="m5"  onclick="optionClic('m5','sel5','m1','m2','m3','m4','m6','m7',e++,e1,e2,e3,e4++,e5,e6,e7)">Meteo</option>
									<option id="c5"  onclick="optionClic('c5','sel5','c1','c2','c3','c4','c6','c7',e++,e1,e2,e3,e4,e5++,e6,e7)">Culture</option>
									<option id="l5"  onclick="optionClic('l5','sel5','l1','l2','l3','l4','l6','l7',e++,e1,e2,e3,e4,e5,e6++,e7)">Loyer</option>
									<option id="cr5"  onclick="optionClic('cr5','sel5','cr1','cr2','cr3','cr4','cr6','cr7',e++,e1,e2,e3,e4,e5,e6,e7++)">Crous</option>
								</select>
							</th>
					</tr>
					<tr>
							<th><p>Critère 6</p></th>
							<th>
								<select id="sel6" name="critere6">
									<option></option>
									<option id="s6"  onclick="optionClic('s6','sel6','s1','s2','s3','s4','s5','s7',f++,f1++,f2,f3,f4,f5,f6,f7)">Securité</option>
									<option id="t6"  onclick="optionClic('t6','sel6','t1','t2','t3','t4','t5','t7',f++,f1,f2++,f3,f4,f5,f6,f7)">Transports</option>
									<option id="sp6"  onclick="optionClic('sp6','sel6','sp1','sp2','sp3','sp4','sp5','sp7',f++,f1,f2,f3++,f4,f5,f6,f7)">Sport</option>
									<option id="m6"  onclick="optionClic('m6','sel6','m1','m2','m3','m4','m5','m7',f++,f1,f2,f3,f4++,f5,f6,f7)">Meteo</option>
									<option id="c6"  onclick="optionClic('c6','sel6','c1','c2','c3','c4','c5','c7',f++,f1,f2,f3,f4,f5++,f6,f7)">Culture</option>
									<option id="l6"  onclick="optionClic('l6','sel6','l1','l2','l3','l4','l5','l7',f++,f1,f2,f3,f4,f5,f6++,f7)">Loyer</option>
									<option id="cr6"  onclick="optionClic('cr6','sel6','cr1','cr2','cr3','cr4','cr5','cr7',f++,f1,f2,f3,f4,f5,f6,f7++)">Crous</option>
								</select>
							</th>
					</tr>
					<tr>
							<th><p>Critère 7</p></th>
							<th>
								<select id="sel7" name="critere7">
									<option></option>
									<option id="s7" onclick="optionClic('s7','sel7','s1','s2','s3','s4','s5','s6',g++,g1++,g2,g3,g4,g5,g6,g7)">Securité</option>
									<option id="t7" onclick="optionClic('t7','sel7','t1','t2','t3','t4','t5','t6',g++,g1,g2++,g3,g4,g5,g6,g7)">Transports</option>
									<option id="sp7" onclick="optionClic('sp7','sel7','sp1','sp2','sp3','sp4','sp5','sp6',g++,g1,g2,g3++,g4,g5,g6,g7)">Sport</option>
									<option id="m7" onclick="optionClic('m7','sel7','m1','m2','m3','m4','m5','m6',g++,g1,g2,g3,g4++,g5,g6,g7)">Meteo</option>
									<option id="c7" onclick="optionClic('c7','sel7','c1','c2','c3','c4','c5','c6',g++,g1,g2,g3,g4,g5++,g6,g7)">Culture</option>
									<option id="l7" onclick="optionClic('l7','sel7','l1','l2','l3','l4','l5','l6',g++,g1,g2,g3,g4,g5,g6++,g7)">Loyer</option>
									<option id="cr7" onclick="optionClic('cr7','sel7','cr1','cr2','cr3','cr4','cr5','cr6',g++,g1,g2,g3,g4,g5,g6,g7++)">Crous</option>
								</select>
							</th>
					</tr>
					<tr>
							<th colspan = '2'><input type="submit" value="Send" class = 'bouton_submit'/></th>
					</tr>
				</form>
			</table>
			
			<div id="menu_pied">
				<?php include ("menu.php");?>
				</div>
			<?php include ("foot3.php");?>
		</body>
	</html>
