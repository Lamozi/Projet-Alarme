	<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {
		
		
	$mysqli= new mysqli("localhost", "root", "", "alarme");

	$requete = "SELECT *  FROM TabClient";
	$resultat = $mysqli->query($requete);
	$enreg = $resultat->fetch_row() ;
	
	if (isset($_POST["effacer[]"])){
	$num = $_POST["effacer[]"];
	$requete1 = "DELETE  FROM TabClient WHERE idClient = '$num'";
	echo $requete1;

	}
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
												idMembre
										</td>
										
										<td>
												Login
										</td>
										
										<td>
												Effacer
										</td>
											';
										
						do{ 
						echo'

									<tr>
										<td>';
											
												echo $enreg[0];
											 echo'
										</td>
										<td>';
											echo $enreg[1];
											echo'
										</td>
								
								
										<td>
											<input type="checkbox" name="effacer[]" value="$enreg[0]">
										</td>
								</tr>
<tr>								
								';
						$enreg = $resultat->fetch_row();
						}while ($enreg!=NULL);
						echo'
										<td>
				<input type="submit" name="Validation" value="Supprimer"
						</td>
				</tr>
			  	
				</table> <br/>
				<a href="Menu alarme.php">Menu principal</a><br/>	
				
		
			</body>
			</html>';
	}
	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
	?>