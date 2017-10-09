<?php

class album
{
	private $id;
	private $nom;
	private $annee;
	private $genre;

	public function __contruct($id,$nom,$annee,$genre)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->annee=$annee;
		$this->genre=$genre;
	}

	public function get($propriete) 
	{
switch ($propriete) 
		{
			case "id" : return $this->_id; break;
			case "nom" : return $this->_nom; break;
			case "annee" : return $this->_annee; break;
			case "genre" : return $this->_genre; break;
		}
	}
	public function set($propriete, $value) 
	{
		switch ($propriete) 
		{
			case "id" : $this->_id = $value; break;
			case "nom" : $this->_nom = $value; break;
			case "annee" : $this->_annee = $value; break;
			case "genre" : $this->_genre = $value; break;
		}
	}
	public function tostring() 
	{
		return $this->id . " " . $this->nom . " " . $this->annee. " " .$this->genre;
	}

}