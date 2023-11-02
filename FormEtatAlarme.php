	<?php
	session_start();
	if (isset($_SESSION['typeconnexion']) &&  $_SESSION['typeconnexion'] == "Administrateur") {
	$mysqli= new mysqli("localhost", "root", "", "alarme");

	$requete1 = "select etatalarme,etatsonnerie,etatdetecteur from alarme.tabetat ORDER BY id DESC LIMIT 1";
	$_SESSION['timer'] = time();
	$resultat1 = $mysqli->query($requete1);
	$enreg = $resultat1->fetch_row() ;


			$iA=$enreg[0];
			$iS=$enreg[1];
			$iD=$enreg[2];


		if(($iA==0) && ($iS==0) && ($iD==0)){
		header('Location: alarmeEteinte.php');
		}
											
		else if(($iA==1) && ($iS==0) && ($iD==0)){
		header('Location: alarmeAllume.php');
	    }
											
		else if(($iA==1) && ($iS==1) && ($iD==1)){
		header('Location: Sonne.php');
		}
	}	else{ echo 'veuillez vous connecter	
			<a href="FormConnexionAlarme.html">Acceuil</a><br/>';
	};
	
	?>