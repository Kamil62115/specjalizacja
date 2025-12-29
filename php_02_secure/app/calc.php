<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

$spalanie = $_REQUEST['spalanie'] ?? null;
$paliwo   = $_REQUEST['paliwo']   ?? null;
$messages = [];
$result   = null;

if ($spalanie !== null && $paliwo !== null){
	if ($spalanie=='' || $paliwo==''){
		$messages[]='Uzupełnij dane';
	} elseif (!is_numeric($spalanie) || !is_numeric($paliwo)){
		$messages[]='Muszą być liczby';
	} else {
		$result = ($paliwo/$spalanie)*100;
	}
}

include _ROOT_PATH.'/app/calc_view.php';
