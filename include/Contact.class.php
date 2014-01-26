<?php



class Contact {
	
	private $db;
	
	var $nom = '';
	var $adresse = '';
	var $idSociete = '';
	
	
	
	const DEFAULT_ORDER = 'DESC';
	const DEFAULT_DIRECTION = 'date';
	const PREFIX_TABLE = 'anc_';
	
	function __construct ($db)
	{
		$this->db = $db;
		
	}
	
	
	
			
	/*
	 * Recupere la liste de contact
	 * @param $direction champ sur lequel on appliquera l'ordre
	 * @param 
	 */	
	public function getContactListe ($idSociete, $direction = null, $order = null, $limit = null)
	{
		$direction = ($direction!=null) ? $direction : self::DEFAULT_DIRECTION;
		$order = ($order!=null) ? $order : self::DEFAULT_ORDER;
		//
		$result = $this->db->prepare("SELECT * FROM ".self::PREFIX_TABLE."contacts WHERE id_societe = :idSociete");
		$result->bindParam(':idSociete', $idSociete, PDO::PARAM_INT);
		$result->closeCursor();
		$result->execute();
		$result = $result->fetchAll(PDO::FETCH_OBJ);		

		//if(isset($result) and is_array($result) and $result == TRUE)
			return $result;
		
	}
	
	
	 
	/*
	 * Retourne une societe 
	 * @param id
	 */	
	public function getContact ($id)
	{

		$result = $this->db->prepare("SELECT * FROM ".self::PREFIX_TABLE."contact WHERE id =:id ");
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
	 * Enregistre une societe 
	 * @param nom
	 * 
	 */	
	public function postContact (array $societeInfos )
	{
		$result = $this->db->prepare("INSERT INTO `".self::PREFIX_TABLE."societes` (nom, adresse, cp, ville, url, type, note, date) VALUES (:nom, :adresse, :cp, :ville, :url, :type, :note, NOW()) ");
		$result->bindParam(':nom', $societeInfos['nom'], PDO::PARAM_STR);
		$result->bindParam(':adresse', $societeInfos['adresse'], PDO::PARAM_STR);
		$result->bindParam(':cp', $societeInfos['cp'], PDO::PARAM_STR);
		$result->bindParam(':ville', $societeInfos['ville'], PDO::PARAM_STR);
		$result->bindParam(':url', $societeInfos['url'], PDO::PARAM_STR);
		$result->bindParam(':type', $societeInfos['type'], PDO::PARAM_INT);
		$result->bindParam(':note', $societeInfos['note'], PDO::PARAM_STR);
		$result->closeCursor();	
		$result->execute();
		

		if(isset($result) and $result == TRUE)
			return $this->db->lastInsertId('id');
		else
			throw new Exception($result->errorInfo());
	}
	
	/*
	 * Update une societe 
	 * @param array
	 * 
	 */	
	public function putSociete (array $societeInfos )
	{			
		$result = $this->db->prepare("UPDATE `".self::PREFIX_TABLE."societes` SET nom=:nom, adresse=:adresse, cp=:cp, ville=:ville, url=:url, type=:type, note=:note, date=NOW() WHERE id=:id");
		$result->bindParam(':id', $societeInfos['id'], PDO::PARAM_INT);
		$result->bindParam(':nom', $societeInfos['nom'], PDO::PARAM_STR);
		$result->bindParam(':adresse', $societeInfos['adresse'], PDO::PARAM_STR);
		$result->bindParam(':cp', $societeInfos['cp'], PDO::PARAM_STR);
		$result->bindParam(':ville', $societeInfos['ville'], PDO::PARAM_STR);
		$result->bindParam(':url', $societeInfos['url'], PDO::PARAM_STR);
		$result->bindParam(':type', $societeInfos['type'], PDO::PARAM_INT);
		$result->bindParam(':note', $societeInfos['note'], PDO::PARAM_STR);
		$result->closeCursor();		
		$result->execute();
		//
		if(isset($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result->errorInfo());
	}	
	
	/*
	 * Delete une societe 
	 * @param id
	 * 
	 */	
	public function deleteSociete ( $id )
	{			
		$result = $this->db->prepare("DELETE FROM `".self::PREFIX_TABLE."societes` WHERE id=:id");
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