<?php

require_once dirname(__FILE__).'/../config.php';


include _ROOT_PATH.'/app/security/check.php';

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


function process(&$litry,&$kilometry,&$wynik,&$messages){
		global $role;
	$litry = floatval($litry);
	$kilometry = floatval($kilometry);
	if ($role == "kierowca_zawodowy"){
		$wynik = ($litry/$kilometry)*100;	
	}	
	if ($role == "nowy_kierowca"){
		if($kilometry<=100){
			$wynik = ($litry/$kilometry)*100;	
		}else {
				$messages [] = 'Tylko kierowca zawodowy może liczyć powyżej 100 kilometrów !';
			}
	}
	

	
	
}

$litry = null;
$kilometry = null;
$wynik = null;
$messages = array();


getParams($litry,$kilometry);
if ( validate($litry,$kilometry,$messages) ) { 
	process($litry,$kilometry,$wynik,$messages);
}






include 'calc_view.php';