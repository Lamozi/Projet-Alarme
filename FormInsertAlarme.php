	<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {

echo'

<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="cssalarme.css" />
<title>Ajouter Utilisateur</title>
</head>

<body>
<form action="ScriptInsertAlarme.php" method="post">
<table border="1">
	<tr>
		<td> 
			Login
		</td>
		<td>
			<INPUT type="Text" name="Login">
		</td>
	</tr>
	
	
	<tr>
		<td>
			Mot de passe
		</td>
		<td>
			<INPUT type="Password" name="Mdp">
		</td>
	</tr>
	
	

	<tr>
	<td>
	</td>
		<td align="center" width="50%">
			<input type="submit" name="Validation" value="Enregistrer" />
		</td>
	</tr>
		
</table>
</form>
<a href="Menu Alarme.php">Acceuil</a><br/>
</body>';
	}	
	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
?>
	