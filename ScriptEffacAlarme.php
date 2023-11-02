	<?php
	
	
	
	
	$mysqli= new mysqli("localhost", "root", "", "alarme");
	$requete = "SELECT *  FROM TabClient";
	$resultat = $mysqli->query($requete);
	$enreg = $resultat->fetch_row() ;
	
/*	if (isset($_POST["effacer[]"])){
	$num = $_POST["effacer[]"];
	$requete1 = "DELETE  FROM TabClient WHERE idClient = '$num'";
	echo $requete1;

	}*/
	
	
	echo'
	
		<head>
		<meta charset="utf-8" />
		<title>Formulaire Effacer</title>
		</head>

		<form action= "ScriptEffacAlarme.php" method="post">

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
										</td>';
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
											<input type="checkbox" name="effacer[$enreg[0]]" value="$enreg[0]">
										</td>
								</tr>										';
					}while($enreg!=NULL);
					*/*echo'
	

				<tr>
				<td>
				<input type="submit" name="Validation" value="Supprimer"
				</td>
				</tr>		
		</form>';
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	