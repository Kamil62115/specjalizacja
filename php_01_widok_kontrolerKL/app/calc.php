<?php
require_once dirname(__FILE__).'/../config.php';


$spalanie = $_REQUEST['spalanie'] ?? null;  
$paliwo = $_REQUEST['paliwo'] ?? null;      


if (!isset($spalanie) || !isset($paliwo)) {
    $messages[] = 'Brak jednego z parametrów.';
}

if ($spalanie === "") {
    $messages[] = 'Nie podano średniego spalania.';
}
if ($paliwo === "") {
    $messages[] = 'Nie podano ilości paliwa w baku.';
}

if (empty($messages)) {
    if (!is_numeric($spalanie) || $spalanie <= 0) {
        $messages[] = 'Średnie spalanie musi być liczbą dodatnią.';
    }
    if (!is_numeric($paliwo) || $paliwo < 0) {
        $messages[] = 'Ilość paliwa musi być liczbą nieujemną.';
    }
}


if (empty($messages)) {
    $spalanie = floatval($spalanie);
    $paliwo = floatval($paliwo);

    $result = ($paliwo / $spalanie) * 100;
}


include 'calc_view.php';
