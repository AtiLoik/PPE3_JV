<?php
	
	class artist
	{

		private $id;
		private $nom;

		public function __construct($id=null, $nom=null)
		{
			$this->id=$id;
			$this->nom=$nom;
		} 

		public function artist()
		{

		}

		public function get($propriete) 
		{
			switch ($propriete) 
			{
				case "id" : return $this->id; break;
				case "nom" : return $this->nom; break;
			}
		}

		public function set($propriete, $value) 
		{
			switch ($propriete) 
			{
				case "id" : $this->id = $value; break;
				case "nom" : $this->nom = $value; break;
			}
		}

		public function tostring() 
		{
			return $this->id . " " . $this->nom;
		}

		public static function getAll()
		{
			$monpdo=MonPdo::getInstance();
			$sql="select * from artist";
			$resultat=$monpdo->query($sql);
			$lesArtist= $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'artist');
			return $lesArtist;
		}

		public static function ajouterArtiste()
		{
			echo "Entrez le nom d'un artiste: ";
			echo "<form action='AjoutArtiste.php' method='post'> ";
			echo "<input type='text' name='name'> ";
			echo "<input type='submit' value='Valider'/> ";
			echo "</form> </br>";
		}

		public static function supprimerArtiste()
		{
			echo "Entrez l'Id d'un artiste: </br>";
			echo "<form action='SupprArtiste.php' method='post'> ";
			echo "<input type='text' name='id'> ";
			echo "<input type='submit' value='Confirmer'/> ";
			echo "</form>";
		}
	}

?>