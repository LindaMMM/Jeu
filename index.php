<?php

require_once "src/class/config.php";
require('src/controller/accueil.php');
date_default_timezone_set('Europe/Paris');

// Date actuel
$dateNow = new DateTime("now");
/*** Attention à supprimer */
// $dateNow = new DateTime("2020-12-02");

// date de la 1er jour du jeu
$datefirstDay = new DateTime($dateNow->format('Y').'-12-01');


if ($datefirstDay <= $dateNow) {
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
} 
else {
    if (isset($_SESSION['test'])) {
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
            return;
        }
    }
}
require ('attente.html');


   