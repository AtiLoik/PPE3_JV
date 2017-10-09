<?php
	include ('monPdo.class.php');
	include ('artist.class.php');
	include ('Album.class.php');

	$monPdo=monPdo::GetInstance();

	echo "-------------------- Liste des artistes --------------------";
	$sql="Select * From artist";

	$resultat= $monPdo->query($sql);

	$lesObj= $resultat->fetchAll(PDO::FETCH_OBJ);
		
		echo "<table>";
		foreach ($lesObj as $artist)
		{
			echo "<tr>";
			echo "<td>".$artist->id."</td>";
			echo "<td>".$artist->nom."</td>";
			echo "</tr>";
		}
		echo "</table>";
?>