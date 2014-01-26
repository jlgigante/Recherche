<?php



class Annonce {
	
	private $db;
	
	var $poste = '';

	
	const DEFAULT_ORDER = 'DESC';
	const DEFAULT_DIRECTION = 'date_annonce';
	const PREFIX_TABLE = 'anc_';
	
	
	function __construct ($db)
	{
		$this->db = $db;		
	}
	
	public function test(){
		return $this->nom;
	}
	
	
	public function getAnnonceType()
	{
		$typeAnnonce = array('');
		return $typeSocete;		
	}
	
			
	/*
	 *
	 */	
	public function getAnnoncesListe ($direction = null, $order = null, $limit = null)
	{
		$direction = ($direction!=null) ? $direction : self::DEFAULT_DIRECTION;
		$order = ($order!=null) ? $order : self::DEFAULT_ORDER;
		//
		$result = $this->db->prepare("SELECT * FROM ".PREFIX_TABLE."annonces ORDER BY ".$direction." ".$order);
		$result->closeCursor();
		$result->execute();
		$result = $result->fetchAll(PDO::FETCH_OBJ);		

		if(isset($result) and is_array($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result->errorInfo());
	}
	
	
	
	public function getAnnonceName () {
		return $this->nom;
	}
	 
	/*
	 * Retourne une Annonce 
	 * @param id
	 */	
	public function getAnnonce ($id)
	{

		$result = $this->db->prepare("SELECT * FROM ".PREFIX_TABLE."annonces WHERE id =:id ");
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->closeCursor();
		$result->execute();
		//var_dump($result->debugDumpParams());
		$result = $result->fetch(PDO::FETCH_OBJ);		

		if(isset($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result);
	}	 
	
	
	/*
	 * Retourne une Annonce 
	 * @param id
	 */	
	public function getAnnonceBySocieteId ($idSociete)
	{

		$result = $this->db->prepare("SELECT * FROM ".PREFIX_TABLE."annonces WHERE id_societe =:id ");
		$result->bindParam(':id', $idSociete, PDO::PARAM_INT);
		$result->closeCursor();
		$result->execute();
		//var_dump($result->debugDumpParams());
		$result = $result->fetch(PDO::FETCH_OBJ);		

		if(isset($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result);
	}	
	
	 
	/*
	 * Enregistre une Annonce 
	 * @param nom
	 * 
	 */	
	public function postAnnonce (array $annonceInfos )
	{
		$result = $this->db->prepare("INSERT INTO `".PREFIX_TABLE."annonces` (nom, adresse, cp, ville, url, type, note, date) VALUES (:nom, :adresse, :cp, :ville, :url, :type, :note, NOW()) ");
		$result->bindParam(':nom', $annonceInfos['nom'], PDO::PARAM_STR);
		$result->bindParam(':adresse', $annonceInfos['adresse'], PDO::PARAM_STR);
		$result->bindParam(':cp', $annonceInfos['cp'], PDO::PARAM_STR);
		$result->bindParam(':ville', $annonceInfos['ville'], PDO::PARAM_STR);
		$result->bindParam(':url', $annonceInfos['url'], PDO::PARAM_STR);
		$result->bindParam(':type', $annonceInfos['type'], PDO::PARAM_INT);
		$result->bindParam(':note', $annonceInfos['note'], PDO::PARAM_STR);
		$result->closeCursor();	
		$result->execute();
		

		if(isset($result) and $result == TRUE)
			return $this->db->lastInsertId('id');
		else
			throw new Exception($result->errorInfo());
	}
	
	/*
	 * Update une annonce 
	 * @param array
	 * 
	 */	
	public function putannonce (array $annonceInfos )
	{			
		$result = $this->db->prepare("UPDATE `".PREFIX_TABLE."annonces` SET nom=:nom, adresse=:adresse, cp=:cp, ville=:ville, url=:url, type=:type, note=:note, date=NOW() WHERE id=:id");
		$result->bindParam(':id', $annonceInfos['id'], PDO::PARAM_INT);
		$result->bindParam(':nom', $annonceInfos['nom'], PDO::PARAM_STR);
		$result->bindParam(':adresse', $annonceInfos['adresse'], PDO::PARAM_STR);
		$result->bindParam(':cp', $annonceInfos['cp'], PDO::PARAM_STR);
		$result->bindParam(':ville', $annonceInfos['ville'], PDO::PARAM_STR);
		$result->bindParam(':url', $annonceInfos['url'], PDO::PARAM_STR);
		$result->bindParam(':type', $annonceInfos['type'], PDO::PARAM_INT);
		$result->bindParam(':note', $annonceInfos['note'], PDO::PARAM_STR);
		$result->closeCursor();		
		$result->execute();
		//
		if(isset($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result->errorInfo());
	}	
	
	/*
	 * Delete une annonce 
	 * @param id
	 * 
	 */	
	public function deleteannonce ( $id )
	{			
		$result = $this->db->prepare("DELETE FROM `".PREFIX_TABLE."annonces` WHERE id=:id");
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->closeCursor();		
		$result->execute();
		//
		if(isset($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result->errorInfo());
	}


}