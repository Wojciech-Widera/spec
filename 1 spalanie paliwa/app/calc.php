<?php

require_once dirname(__FILE__).'/../config.php';

$litry = $_REQUEST ['litry'];
$kilometry = $_REQUEST ['kilometry'];
if ( ! (isset($litry) && isset($kilometry) )) {

	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}


if ( $litry == "") {
	$messages [] = 'Nie podano litrów  ';
}
if ( $kilometry == "") {
	$messages [] = 'Nie podano kilometrów';
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





if (empty ( $messages )) {
	

	$litry = floatval($litry);
	$kilometry = floatval($kilometry);
	

	$wynik = ($litry/$kilometry)*100;
	
}


include 'calc_view.php';