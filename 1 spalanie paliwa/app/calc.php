<?php

require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
if ( ! (isset($x) && isset($y) )) {

	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}


if ( $x == "") {
	$messages [] = 'Nie podano liczby 1';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby 2';
}


if (empty( $messages )) {
	

	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}

if (empty ( $messages )) {
	

	$x = intval($x);
	$y = intval($y);
	

	$wynik = ($x/$y)*100;
	
}


include 'calc_view.php';