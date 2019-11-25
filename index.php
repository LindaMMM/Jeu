<?php
require_once "Src/class/config.php";
require('Src/controller/accueil.php');

if (isset($_GET['page'])) {
    if($_GET['page'] == 'accueil'){
        accueil();
        return;
    }
    if($_GET['page'] == 'top'){
        top();
        return;
    }
    login();
    return;
}
else {
    login();
}