<?php

require_once "src/class/config.php";
require('src/controller/accueil.php');
date_default_timezone_set('Europe/Paris');

$dateSrc = '2019-11-30';
$date1 = new DateTime("now");
$date2 = new DateTime($dateSrc);


if ($date1 < $date2) {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'accueil') {
            accueil();
            return;
        }
        if ($_GET['page'] == 'top') {
            top();
            return;
        }
        login();
        return;
    } else {
        login();
    }
} else {
    require 'attente.html';
}