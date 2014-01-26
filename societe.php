<?php
require_once('include/config.php');
include("include/Utils.class.php");
include("include/AutoLoad.php");


try {
/*     $DB = new PDO('mysql:host=localhost ;dbname=recherche', 'web', 'web') ; */
	$db = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe,   array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch(PDOException $e) {
    echo "Impossible de se connecter!";
}



$param = $_GET;


try{
	$societe = new Societe($db);	
	
	if(isset($_POST) and !empty($_POST)) {		
		
		$societeForm = $_POST;
		
		//Control formulaire
		
		//
		switch($societeForm['action']){
			
			case 'post':
				$id = $societe->postSociete($societeForm);
				$societeInfo = $societe->getSociete($id);
				echo json_encode(array('codeRetour'=>0, 'message'=>'La fiche de la société <b>'.$societeInfo->nom.'</b> a bien été ajoutée'));
				exit;
				break;
			case 'put':
				$societe->putSociete($societeForm);
				$societeInfo = $societe->getSociete($param['id']);
				echo json_encode(array('codeRetour'=>0, 'message'=>'La fiche de la société <b>'.$societeInfo->nom.'</b> a bien été mis à jour'));
				exit;
				break;
			case 'delete':
				$societe->deleteSociete($societeForm['id']);
				echo json_encode(array('codeRetour'=>0, 'message'=>'Societe supprimer'));
				exit;
				break;
		}
		
			
	}
	//
	if(isset($param['action'])){
		//check action
		$actions = array('post', 'put', 'get', 'delete');
	}
	//
	if(isset($param['id'])) {
		try{
			// fiche societe
			$societeInfo = $societe->getSociete($param['id']);
			$smarty->assign('societe', $societeInfo);
		}
		catch(Exception $e){
			Utils::get404($smarty);
		}
		//
		$contact = new Contact($db);		
		$smarty->assign('contacts', $contact->getContactListe($param['id']));		
	}
	$smarty->assign('type', $societe->getSocieteType());
}
catch(Exception $e){
/* 	var_dump(); */
	echo json_encode(array('codeRetour'=>1, 'message'=>$e->getMessage()));
	exit;
}




$smarty->display('societe.tpl');