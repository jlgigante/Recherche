<?php
require_once('include/config.php');
//include("include/Utils.class.php");
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


try{
	$societe = new Societe($db);
	$order = '';
	$direction = '';
	
	//$order = ($_GET['order']!=null) ? $_GET['order'] : null;
	//
	$societesListe = $societe->getSocietesListe($direction, $order, 0, 5);
	
	$total = $societe->getTotalSocietes();
	
	$smarty->assign('societeCount', $total['val']);
	$smarty->assign('societesListe', $societesListe);

		
	
}
catch(Exception $e){
	var_dump($e);
}




$smarty->display('index.tpl');