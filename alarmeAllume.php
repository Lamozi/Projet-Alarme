<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {
	
	echo'

			<html>
				<head>
					<meta charset="utf-8"/>
					<link rel="stylesheet" href="cssalarme.css" />
					<title>Etat</title>
				</head>
				
				<body>					
					<table border="1",bgcolor="FFFFFF">
					<form action="alarmeAllume.php" method="post">
								<tr>
										<td>
												L&#039Alarme est allum&eacute;e
										</td>

										<td>
										<input type="submit" value="Eteindre Alarme" name="Eteindre">
										
										</td>
										
										<td>
										<input type="submit" value="Faire Sonner l&#039alarme" name="Sonnerie">
										
										</td>
				
			  	
			 <br/>
				<a href="Menu alarme.php">Menu principal</a><br/>	
				
		
			</body>
			</html>';
			
				
	if ($_POST['Eteindre']){

							$DateAndTime = date('Y-m-d H:i:s ',time());
							$idclient = $_SESSION['idutilisateur'];
							$mysqli = new mysqli("localhost", "root", "", "alarme");
	
							$requete2 = "Insert INTO alarme.tabEtat values(NULL,'$DateAndTime','0','0','0','$idclient')";
							$mysqli->query($requete2);
	
	                        mysqli_connect_error();
							header('Location: FormEtatAlarme.php');
						}
   else if ($_POST['Sonnerie']){

							$DateAndTime = date('Y-m-d H:i:s ',time());
							$idclient = $_SESSION['idutilisateur'];
							$mysqli = new mysqli("localhost", "root", "", "alarme");
	
							$requete3 = "Insert INTO alarme.tabEtat values(NULL,'$DateAndTime','1','1','1','$idclient')";
							$mysqli->query($requete3);
	
	mysqli_connect_error();
	header('Location: FormEtatAlarme.php');
						};
	}
	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
	?>