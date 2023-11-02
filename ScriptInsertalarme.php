	<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {

	$Login = $_POST["Login"];
	$Mdp = $_POST["Mdp"];
	
	
	$mysqli = new mysqli("localhost", "root", "", "alarme");
	$Hash= sha1($Mdp);
	
	$requete = "Insert INTO alarme.TabClient values(NULL,'$Login','$Hash')";
	$mysqli->query($requete);
	
	mysqli_connect_error();
	
	echo'
			<html>
				<head>
					<meta charset="utf-8"/>
					<title>Inscritpion Alarme</title>
				</head>
				
				<tr>';
						echo $requete;
	
				echo'
				</tr>
				<tr>
				<a href="Menu alarme.php">Menu Principal</a><br/>
	</tr>';
	} 
	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
?>