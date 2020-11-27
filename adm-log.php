<?php

require_once "src/class/config.php";
require('src/controller/accueil.php');
date_default_timezone_set('Europe/Paris');

$dateSrc = '2019-11-30';
$date1 = new DateTime("now");
$date2 = new DateTime($dateSrc);


login();
