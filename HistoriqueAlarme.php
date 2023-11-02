	<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {
		
		
	$mysqli= new mysqli("localhost", "root", "", "alarme");

	$requete = "SELECT *  FROM TabEtat";
	
	$resultat = $mysqli->query($requete);
	$enreg = $resultat->fetch_row() ;
	echo'
			<html>
				<head>
					<meta charset="utf-8"/>
					<link rel="stylesheet" href="cssalarme.css" />
					<title>Afficher Client</title>
				</head>
				
				<body>					
					<table border="1",bgcolor="FFFFFF">
								<tr>
										<td>
												Date et Heure
										</td>
										
										<td>
												Etat Alarme
										</td>
										
										<td>
												Etat Sonnerie
										</td>
										
										<td>
												Etat Detecteur
										</td>
										
										<td>
												Utilisateur
										</td>';
										
						do{ 
						echo'

									<tr>
										<td>';
											
												echo $enreg[1];
											 echo'
										</td>
										<td>';
											if($enreg[2]==1){
												echo 'allumée';
											}
											
											else{ 
											echo 'éteinte';
											}
											echo'
										</td>
										<td>';
											if($enreg[3]==1){
												echo 'allumée';
											}
											
											else{ 
											echo 'éteinte';
											}
											echo'
										</td>
										<td>';
											if($enreg[4]==1){
												echo 'allumée';
											}
											
											else{ 
											echo 'éteinte';
											}
											echo'
										</td>';
										$requete2 = "SELECT login FROM TabClient where idClient='$enreg[5]'";
										
										$resultat2 = $mysqli->query($requete2);
										$enreg2 = $resultat2->fetch_row() ;
										echo'
											<td>';
												echo $enreg2[0];
												echo'
										</td>		
								</tr>';
						$enreg = $resultat->fetch_row();
						}while ($enreg!=NULL);
						echo'
						
						
				
			  	
				</table> <br/>
				<a href="Menu alarme.php">Menu principal</a><br/>	
				
		
			</body>
			</html>';
	}
	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
	?>