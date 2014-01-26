<?php
require_once('include/config.php');
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
	$order = '';
	$direction = '';
	
	
	$current = $param['page'];
	$bypass = 5;
	$listLength = 5;
	$from = ($current*$bypass)-$bypass;
	$total = $societe->getTotalSocietes();
	
	//public function getSocietesListe ($direction = null, $order = null, $from = 0, $offset=self::DEFAULT_MAX)
	$societesListe = $societe->getSocietesListe($direction, $order, $from, $listLength);
	
	$arrayPagination = Utils::getGenericPagination($current, $total['val'], $bypass, $listLength, $showLast = true, $use_icon = true);

	$smarty->assign('last', count($arrayPagination)-1);
	$smarty->assign('current', $current);
	
	$smarty->assign('arrayPagination', $arrayPagination);
	
	$smarty->assign('societesListe', $societesListe);

	$smarty->assign('type', $societe->getSocieteType());
	
}
catch(Exception $e){
/* 	var_dump(); */
	echo json_encode(array('codeRetour'=>1, 'message'=>$e->getMessage()));
	exit;
}




$smarty->display('societes.tpl');