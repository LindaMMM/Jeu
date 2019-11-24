<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function accueil() {
    if (isset($_SESSION["ssoid"]) && $_SESSION["iduser"]) {
        require('./src/views/indexView.php');
    } else {
        require('./src/views/loginView.php');
    }
}

function login() {
    if (isset($_SESSION["ssoid"]) && $_SESSION["iduser"]) {
        require('./src/views/indexView.php');
    } else {
        require('./src/views/loginView.php');
    }
}
