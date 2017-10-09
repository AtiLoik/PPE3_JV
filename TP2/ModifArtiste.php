<?php
	echo "-------------------- Ajouter Artiste -------------------- </br>";
	echo "Entrez le nom d'un artiste: ";
	echo "<form action='AjoutArtiste.php' method='post'> ";
	echo "<input type='text' name='name'> ";
	echo "<input type='submit' value='Valider'/> ";
	echo "</form> </br>";

	include ('monPdo.class.php');
	include ('artist.class.php');
	include ('Album.class.php');

	$monPdo=monPdo::GetInstance();

	echo "------------------------- Liste des artistes -------------------------";
	$sql="Select * From artist";

	$resultat= $monPdo->query($sql);

	$lesObj= $resultat->fetchAll(PDO::FETCH_OBJ);
		
		echo "<table>";
		foreach ($lesObj as $artist)
		{
			echo "<tr>";
			echo "<td>".$artist->id."</td>";
			echo "<td>".$artist->nom."</td>";
			echo "<td><a href='#'>Afficher</tr>";
			echo "<td><a href='SupprArtiste.php'>Supprimer</tr>";
			echo "</tr>";
		}
		echo "</table>";

?>