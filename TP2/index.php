<?php
try
{
	include ('monPdo.class.php');
	include ('artist.class.php');
	include ('Album.class.php');

	$monPdo=monPdo::GetInstance();

	echo "<a href='ListeArtiste.php'> Lien vers la liste des artistes </a></br>";
	echo "<a href='ModifArtiste.php'> Modifier les artistes </a></br>";

	echo "-------------------- Recherche Fetch Objet --------------------";
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


	echo "-------------------- Recherche Fetch Class --------------------";

	$sql="Select * From artist";

	$resultat=$monPdo->query($sql);

	$lesObj= $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'MonPdo');
	
	echo "<table>";
	foreach ($lesObj as $artist)
	{	
		echo "<tr>";
		echo "<td>".$artist->id."</td>";
		echo "<td>".$artist->nom."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "-------------------- Recherche Id Spécifique --------------------";
	$sql="Select * From artist where id= 65";

	$resultat= $monPdo->query($sql);

	$lesObj= $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'MonPdo');
	
	echo "<table>";
	foreach ($lesObj as $artist)
	{
		echo "<tr>";
		echo "<td>".$artist->id."</td>";
		echo "<td>".$artist->nom."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "-------------------- Ajouter Artiste -------------------- </br>";
	echo "Entrez le nom d'un artiste: ";
	echo "<form action='AjoutArtiste.php' method='post'> ";
	echo "<input type='text' name='name'> ";
	echo "<input type='submit' value='Valider'/> ";
	echo "</form> </br>";

	echo "-------------------- Supprimer Artiste -------------------- </br>";
	echo "Entrez l'Id d'un artiste: </br>";
	echo "<form action='SupprArtiste.php' method='post'> ";
	echo "<input type='text' name='id'> ";
	echo "<input type='submit' value='Confirmer'/> ";
	echo "</form>";

	echo "-------------------- Recherche avec GetAll -------------------- </br>";
	//$artistes=artist::getAll();
	//$monpdo=MonPdo::getInstance();
	//$monPdo=monPdo::GetInstance();
	$sql="select * from artist";
	$resultat=$monPdo->query($sql);
	$lesArtist= $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'artist');
	echo "<table>";
	foreach ($lesArtist as $a) 
	{
		echo "<tr>";
		echo "<td>".$a->get("id")."</td>";
		echo "<td>".$a->get("nom")."</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "-------------------- Ajout avec fonction -------------------- </br>";
	artist::ajouterArtiste();

	echo "-------------------- Supprimer avec fonction -------------------- </br>";
	artist::supprimerArtiste();

}
catch(PDOException $e)
{
	echo $e->getMessage();
}


//PENIS&ANUS
//J'aime la bière
?>