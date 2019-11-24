<?php
require('src/controller/accueil.php');

if (isset($_GET['page'])) {
    if($_GET['page'] == 'accueil'){
        accueil();
        return;
    }
    login();
    return;
}
else {
    login();
}