<?php
require_once dirname(__FILE__).'/../config.php';

function getParams(&$spalanie, &$paliwo) {
    $spalanie = isset($_REQUEST['spalanie']) ? $_REQUEST['spalanie'] : null;
    $paliwo = isset($_REQUEST['paliwo']) ? $_REQUEST['paliwo'] : null;
}


function validate(&$spalanie, &$paliwo, &$messages) {
    if (! (isset($spalanie) && isset($paliwo))) {
        return false;
    }

    if ($spalanie === "") {
        $messages[] = 'Nie podano średniego spalania.';
    }
    if ($paliwo === "") {
        $messages[] = 'Nie podano ilości paliwa.';
    }

    if (count($messages) != 0) return false;

    if (!is_numeric($spalanie) || $spalanie <= 0) {
        $messages[] = 'Średnie spalanie musi być liczbą dodatnią.';
    }
    if (!is_numeric($paliwo) || $paliwo < 0) {
        $messages[] = 'Ilość paliwa musi być liczbą nieujemną.';
    }

    if (count($messages) != 0) return false;
    else return true;
}


function process(&$spalanie, &$paliwo, &$messages, &$result) {
    $spalanie = floatval($spalanie);
    $paliwo = floatval($paliwo);
    $result = ($paliwo / $spalanie) * 100;
}



$spalanie = null;
$paliwo = null;
$result = null;
$messages = array();

getParams($spalanie, $paliwo);
if (validate($spalanie, $paliwo, $messages)) {
    process($spalanie, $paliwo, $messages, $result);
}


include 'calc_view.php';
