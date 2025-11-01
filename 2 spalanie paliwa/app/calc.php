<?php

require_once dirname(__FILE__).'/../config.php';




function getParams(&$litry,&$kilometry){
	$litry = isset($_REQUEST['litry']) ? $_REQUEST['litry'] : null;
	$kilometry = isset($_REQUEST['kilometry']) ? $_REQUEST['kilometry'] : null;
	
}


function validate(&$litry,&$kilometry,&$messages){

	if ( ! (isset($litry) && isset($kilometry) )) {
		
		return false;
	}

	if ( $litry == "") {
		$messages [] = 'Nie podano liczby litrów';
	}
	if ( $kilometry == "") {
		$messages [] = 'Nie podano liczby kilometrów';
	}
	if ( $litry == 0) {
	$messages [] = 'litry nie mogą mieć zerowej wartości   ';
	}
	if ( $kilometry == 0) {
	$messages [] = 'kilometry nie mogą mieć zerowej wartości ';
	}
	if ( $litry < 0) {
	$messages [] = 'litry nie mogą być na minusie  ';
	}
	if ( $kilometry < 0) {
	$messages [] = 'kilometry nie mogą być na minusie ';
	}


	if (count ( $messages ) != 0) return false;
	

	

	if (count ( $messages ) != 0) return false;
	else return true;
}


function process(&$litry,&$kilometry,&$wynik){
	
	$litry = floatval($litry);
	$kilometry = floatval($kilometry);
	
		$wynik = ($litry/$kilometry)*100;
	
}

$litry = null;
$kilometry = null;
$wynik = null;
$messages = array();


getParams($litry,$kilometry);
if ( validate($litry,$kilometry,$messages) ) { 
	process($litry,$kilometry,$wynik);
}






include 'calc_view.php';