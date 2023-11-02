	<?php
	
		$Login = $_POST["Login"];
		$Mdp = $_POST["Mdp"];
		$Hash = sha1($Mdp);
	
	
		$mysqli= new mysqli("localhost", "root", "", "alarme");
	
		$requete = "SELECT idClient,login,mdp FROM TabClient";
	
		$resultat = $mysqli->query($requete);
		$enreg = $resultat->fetch_row() ;
			
			
		do{
		
			if ($enreg[1]==$Login and $enreg[2]==$Hash){
			session_start();
			
			$_SESSION['typeconnexion'] = "Administrateur";
			$_SESSION['idutilisateur'] = $enreg[0];
			header('Location: Menu Alarme.php');
			
			echo' 
			<a href="Acceuil.html">Deconnexion</a><br/>';
		
			
			}
			else {
			echo'
						<td>
							Login ou mot de passe incorect
						</td> ';
			}
						echo'
					</tr>
					<tr>
					<a href="Acceuil.html">Acceuil</a><br/>
					</tr>';
			$enreg = $resultat->fetch_row();
			}while($enreg!=NULL);
		
	?>