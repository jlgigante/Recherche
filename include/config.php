<?php
/*
 * Fichier de config
 */


define("SITE_NAME", "Annonces");

/* error_reporting('E_ALL'); */
//
include("include/smarty_conf.php");

$param = $_GET;

//var_dump($_GET);

$lang_authorized = array("fr", "en");



if( @!$param['lang'] && @!in_array($param['lang'], $lang_authorized) ) {
	//die("DDd");
	$param['lang'] = 'fr';
}

define('COUNTRY_CODE',  $param['lang'] ) ;

session_start();


if( $_SERVER["SERVER_NAME"] == 'annonces.jlgigante.fr' ) {

	$baseUrl = "annonces.jlgigante.fr";
	$currentUrl = $baseUrl.$_SERVER["REQUEST_URI"];
	$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
	
	$PARAM_hote='mysql51-53.perso'; // le chemin vers le serveur
	$PARAM_port='3306';
	$PARAM_nom_bd='jlgigante'; // le nom de votre base de données
	$PARAM_utilisateur='jlgigante'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe='methodman19'; // mot de passe de l'utilisateur pour se connecter
}

else {
	
	$serverProt = "";
	if( $_SERVER["SERVER_PORT"] == "8888") {
		$serverProt = ":".$_SERVER["SERVER_PORT"];
	}
	
	$baseUrl = $_SERVER["SERVER_NAME"].$serverProt;
	$currentUrl = $baseUrl.$_SERVER["REQUEST_URI"];
	
	$PARAM_hote='localhost'; // le chemin vers le serveur
	$PARAM_port='3306';
	$PARAM_nom_bd='recherche'; // le nom de votre base de données
	$PARAM_utilisateur='web'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe='web'; // mot de passe de l'utilisateur pour se connecter

}



define("BASE_URL", $baseUrl);
define("CURRENT_URL", $currentUrl);

