<?php
	try
	{
		include ('monPdo.class.php');
		include ('artist.class.php');
		include ('Album.class.php');

		$id = $_POST['id'];

		$sql = "Delete from artist where id =".$id."";

		$nbr = monPdo::GetInstance()->exec($sql);

		echo "Artiste Supprimé ! </br>";
		echo "<a href='index.php'> Retourner au formulaire </a>";
	}
	catch (PDOException $e)
	{
		echo "Echec du supprimage: ";
		echo $e->getMessage();	
	}
?>