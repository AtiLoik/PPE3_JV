<?php
	try
	{
		include ('monPdo.class.php');
		include ('artist.class.php');
		include ('Album.class.php');

		$nom=$_POST['name'];

		$sql = "insert into artist (nom) values ('".$nom."')";

		$nbr = monPdo::GetInstance()->exec($sql);

		echo "Artiste ajouté ! </br>";
		echo "<a href='index.php'> Retourner au formulaire </a>";
	}
	catch (PDOException $e)
	{
		echo "Echec de l'ajout: ";
		echo $e->getMessage();	
	}

?>