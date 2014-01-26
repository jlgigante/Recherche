<?php



class Societe extends Exception{
	
	private $db;
	
	var $nom = '';
	var $adresse = '';
	
	
	
	const DEFAULT_ORDER = 'DESC';
	const DEFAULT_DIRECTION = 'date';
	const DEFAULT_MAX = '5';
	
	
	public function getDBAndSocietes()
    {
        return '`anc_societes`';
    }

	public function getDBAndTypeSocietes()
    {
        return '`anc_type_soc`';
    }
 	
	
	
	function __construct ($db)
	{
		$this->db = $db;		
	}
	
	public function test(){
		return $this->nom;
	}
	
	
	public function getSocieteType()
	{
		//$typeSocete = array('', "Angence de comm'", 'Agence Web', 'SSII', 'Editeur');
		
		$result = $this->db->prepare("SELECT * FROM " . self::getDBAndTypeSocietes());
		$result->closeCursor();
		$result->execute();
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;		
	}
	
			
	/*
	 *
	 */	
	public function getSocietesListe ($direction = null, $order = null, $from = 0, $offset=self::DEFAULT_MAX)
	{
		$direction = ($direction!=null) ? $direction : self::DEFAULT_DIRECTION;
		$order = ($order!=null) ? $order : self::DEFAULT_ORDER;
		//
		//$result = $this->db->prepare("SELECT * FROM ".self::PREFIX_TABLE."societes ORDER BY ".$direction." ".$order);
		
		$result = $this->db->prepare("
			SELECT s . * , t.type FROM " . self::getDBAndSocietes() . " AS s 
			LEFT JOIN anc_type_soc AS t ON s.id_type = t.id 
			ORDER BY ".$direction." ".$order." LIMIT ".$from.", ".$offset
			);
		
		$result->closeCursor();
		$result->execute();
		$result = $result->fetchAll(PDO::FETCH_OBJ);		
		

		if(isset($result) and is_array($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result->errorInfo());
	}
	
	/*
	 * Retourne le nb de d'enregistrement
	 * @
	 * return 
	 */	
	public function getTotalSocietes ()
	{
		$result = $this->db->prepare("SELECT COUNT(id) as val FROM " . self::getDBAndSocietes());				
		$result->closeCursor();
		$result->execute();
		$result = $result->fetch(PDO::FETCH_ASSOC);		

		if(isset($result) and $result == TRUE)
			return $result;
		else
			throw new Exception($result->errorInfo());
	}	
	
	
	public function getSocieteName () {
		return $this->nom;
	}
	
	
	
	
	 
	/*
	 * Retourne une societe 
	 * @param id
	 * @return objet
	 */	
	public function getSociete ($id)
	{

		$result = $this->db->prepare("SELECT * FROM " . self::getDBAndSocietes() . " WHERE id =:id ");
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
	public function postSociete (array $societeInfos )
	{
		$result = $this->db->prepare("INSERT INTO " . self::getDBAndSocietes() . " (nom, adresse, cp, ville, url, id_type, note, date) VALUES (:nom, :adresse, :cp, :ville, :url, :id_type, :note, NOW()) ");
		$result->bindParam(':nom', $societeInfos['nom'], PDO::PARAM_STR);
		$result->bindParam(':adresse', $societeInfos['adresse'], PDO::PARAM_STR);
		$result->bindParam(':cp', $societeInfos['cp'], PDO::PARAM_STR);
		$result->bindParam(':ville', $societeInfos['ville'], PDO::PARAM_STR);
		$result->bindParam(':url', $societeInfos['url'], PDO::PARAM_STR);
		$result->bindParam(':id_type', $societeInfos['id_type'], PDO::PARAM_INT);
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
		$result = $this->db->prepare("UPDATE " . self::getDBAndSocietes() . " SET nom=:nom, adresse=:adresse, cp=:cp, ville=:ville, url=:url, id_type=:id_type, note=:note, date=NOW() WHERE id=:id");
		$result->bindParam(':id', $societeInfos['id'], PDO::PARAM_INT);
		$result->bindParam(':nom', $societeInfos['nom'], PDO::PARAM_STR);
		$result->bindParam(':adresse', $societeInfos['adresse'], PDO::PARAM_STR);
		$result->bindParam(':cp', $societeInfos['cp'], PDO::PARAM_STR);
		$result->bindParam(':ville', $societeInfos['ville'], PDO::PARAM_STR);
		$result->bindParam(':url', $societeInfos['url'], PDO::PARAM_STR);
		$result->bindParam(':id_type', $societeInfos['id_type'], PDO::PARAM_INT);
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
		$result = $this->db->prepare("DELETE FROM " . self::getDBAndSocietes() . " WHERE id=:id");
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