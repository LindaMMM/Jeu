<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function accueil() {
    if(isset($_SESSION["ssoid"]) && $_SESSION["iduser"]){
        require('./src/views/indexView.php');
    }else{
       require('./src/views/loginView.php'); 
    }
}

function login() {
//    $connexion = UserCtrl::Check('Administrateur', 'toto@85Adm');
//    if ($connexion->isValid()) {
//        echo "Ce login est valide";
//    } else {
//        echo "Ce login n'est pas valide";
//    }
    require('./src/views/loginView.php');
}
