<?php

require_once dirname(__FILE__).'/../config.php';




function getParams(&$x,&$y){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	
}


function validate(&$x,&$y,&$messages){

	if ( ! (isset($x) && isset($y) )) {
		
		return false;
	}

	if ( $x == "") {
		$messages [] = 'Nie podano liczby litrów';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano liczby kilometrów';
	}


	if (count ( $messages ) != 0) return false;
	

	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}


function process(&$x,&$y,&$wynik){
	
	$x = intval($x);
	$y = intval($y);
	
		$wynik = ($x/$y)*100;
	
}

$x = null;
$y = null;
$wynik = null;
$messages = array();


getParams($x,$y);
if ( validate($x,$y,$messages) ) { 
	process($x,$y,$wynik);
}






include 'calc_view.php';