<?php
	require "Bateau/Bateau.php";
	
	class Place implements JsonSerializable{
		//private $id_port;
		private $id_place;
		private $prix;
		private $taille;
		private $id_bateau; // si aucun bateau parké , NULL	
	
		public function __construct($id_place, $prix, $taille, $id_bateau=NULL){	
			$this->id_place = $id_place;
			$this->prix = $prix;
			$this->taille = $taille;
			$this->id_bateau= $id_bateau;
		}
		public function getPrix(){
			return $this->prix;

		}
		public function getBateau(){
			return $this->id_bateau;
		}
		public function __toString(){

		$r = 
		"<hr/>
		<ul>
				<li><b> Prix : </b> ".$this->prix."/jour</li>
				<li><b>Taille de la place : </b>".$this->taille."M</li>
		</ul>";
		if($this->id_bateau!= NULL)
			$r.=$this->getBateau();
		$r.="<hr/>";
		return $r;
	}
	public function JsonSerialize(){
		return ['id_place' => $this->id_place,
				'taille' => $this->taille,
				'prix' => $this->prix,
				'id_bateau' => $this->id_bateau];
	}
	


	}
?>