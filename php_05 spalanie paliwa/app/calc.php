<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

use Smarty\Smarty;

//pobranie parametrów
function getParams(&$form){
	$form['kilometry'] = isset($_REQUEST['kilometry']) ? $_REQUEST['kilometry'] : null;
	$form['litry'] = isset($_REQUEST['litry']) ? $_REQUEST['litry'] : null;
	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['kilometry']) && isset($form['litry']))) 	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kilometry'] == "") $msgs [] = 'Nie podano liczby kilometrów';
	if ( $form['litry'] == "") $msgs [] = 'Nie podano liczby litrów ';
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $kilometry i $litry są liczbami całkowitymi
		if (! is_numeric( $form['litry'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą';
		if (! is_numeric( $form['kilometry'] )) $msgs [] = 'Druga wartość nie jest liczbą';
		
		if ( $form['litry'] == 0) {
		$msgs [] = 'litry nie mogą mieć zerowej wartości   ';
		}
		if ($form['kilometry']== 0) {
		$msgs [] = 'kilometry nie mogą mieć zerowej wartości ';
		}
		if ( $form['litry'] < 0) {
		$msgs [] = 'litry nie mogą być na minusie  ';
		}
		if ( $form['kilometry']< 0) {
		$msgs [] = 'kilometry nie mogą być na minusie ';
		}
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na int
	$form['kilometry'] = floatval($form['kilometry']);
	$form['litry'] = floatval($form['litry']);
	
	$result = ($form['litry']/$form['kilometry'])*100;
	
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');