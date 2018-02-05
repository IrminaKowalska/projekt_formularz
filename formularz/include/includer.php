<?php

header('Content-type: text/html; charset=UTF-8');


//Dane konfiguracyjne
include_once('include/config.php');

//Połączenie do bazy
include_once('include/mysqlconnection.php');

//Sesja
include_once('include/session.php');

//Funkcje
include_once('include/function.php');


$data = date('Y-m-d H:i:s');
$blad='Wystąpił nieoczekiwany błąd. Skontaktuj się z administratorem.';
?>