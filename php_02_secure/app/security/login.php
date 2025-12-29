<?php
require_once dirname(__FILE__).'/../../config.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$messages = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $pass  = $_POST['pass'] ?? '';

    if ($login === 'admin' && $pass === 'admin') {
        $_SESSION['role'] = 'admin';
        header("Location: "._APP_URL."/app/calc.php");
        exit();
    } else {
        $messages[] = 'Błędny login lub hasło';
    }
}

include _ROOT_PATH.'/app/security/login_view.php';
