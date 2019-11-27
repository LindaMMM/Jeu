<?php
require_once "src/class/config.php";
require('src/controller/accueil.php');

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