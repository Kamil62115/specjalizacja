<?php
require_once 'config.php';

$bledy = [];

$zuzycie = $_POST['zuzycie'];
$paliwo = $_POST['paliwo'];

if ($zuzycie == "") {
    $bledy[] = 'Nie podano spalania.';
}
if ($paliwo == "") {
    $bledy[] = 'Nie podano paliwa.';
}

if (empty($bledy)) {
    
    $zuzycie_liczba = floatval($zuzycie);
    $paliwo_liczba = floatval($paliwo);
    
    if ($zuzycie_liczba <= 1 || $zuzycie_liczba > 30) {
        $bledy[] = 'Spalanie musi być sensowne (między 1 a 30 l/100km).';
    }
    
    if ($paliwo_liczba <= 0 || $paliwo_liczba > 150) {
        $bledy[] = 'Paliwo musi być sensowne (między 1 a 150 litrów).';
    }
}

if (empty($bledy)) { 
    
    $wynik = ($paliwo_liczba / $zuzycie_liczba) * 100;
}

$messages = $bledy;

include 'dystans_view.php';
?>