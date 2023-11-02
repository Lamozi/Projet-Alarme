<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {
	//if (isset($_SESSION['timer']) && (time() - $_SESSION['timer'] > 5 )) {
	echo'

			<html>
				<head>
					<meta charset="utf-8"/>
					<link rel="stylesheet" href="cssalarme.css" />
					<title>Etat</title>
				</head>
				
				<body>					
					<table border="1",bgcolor="FFFFFF">
					<form action="alarmeEteinte.php" method="post">
								<tr>
										<td>
												L&#039Alarme est &eacute;teinte
										</td>

										<td>
										<input type="submit" value="Allumer Alarme" name="Allumer">
										
										</td>
										
				
			  	
			 <br/>
				<a href="Menu alarme.php">Menu principal</a><br/>	
				
		
			</body>
			</html>';
			
				
	if ($_POST['Allumer']){

							$DateAndTime = date('Y-m-d H:i:s ',time());
							$idclient = $_SESSION['idutilisateur'];
							$mysqli = new mysqli("localhost", "root", "", "alarme");
	
							$requete2 = "Insert INTO alarme.tabEtat values(NULL,'$DateAndTime','1','0','0','$idclient')";
							$mysqli->query($requete2);
	
	                        mysqli_connect_error();
							header('Location: FormEtatAlarme.php');
						}
	//}else{
	//header('Location: FormEtatAlarme.php');
	//}
	}
	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	}
	?>