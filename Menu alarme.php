	<?php
	session_start();
	
	
	
	
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {

echo'

<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="cssalarme.css" />
<title>Menu Alarme</title>
</head>
<tr>
<a href="FormInsertAlarme.php">Inscrire nouvel utilisateur</a><br/>
</tr>

<tr>

<a href="ScriptAffichalarme.php">Afficher les membres</a><br/>

</tr>

<tr>
<a href="FormEtatAlarme.php">Changer les Etats</a><br/>
</tr>

<tr>
<a href="HistoriqueAlarme.php">Historique des Etats</a><br/>
</tr>

<tr>
<a href="DeconnexionAlarme.php">Deconnexion</a><br/>
<tr>';


	}else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
		
	/*
	if(time() - $_SESSION['Decompte'] > 10000) { 
		echo"<script>alert('Innactivité trop longue retour à la connexion');</script>";
		$_SESSION['typeconnexion'] = false;
			header('Location: Acceuil.html'); 
			exit;
		} 
	else {
		$_SESSION['Decompte'] = time(); 
	};*/
?>
	