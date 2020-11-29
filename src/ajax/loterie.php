<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../class/config.php");

    $respond->code=0;
    $respond->message="Aucune saisie valide";
    $respond->value = array();

    
try {
    $idUser = $_SESSION["iduser"] ;
    
    if (!isset($idUser)) {
        $respond->code=-1;
        $respond->message="Pas de connexion";
        echo json_encode( $respond, JSON_INVALID_UTF8_IGNORE );
        return;
    }
    
    $jeu = UserCtrl::Jouer($idUser);
   
	if ($jeu->isValid()){
		 $respond->code=1;
         $respond->message="bien jouer";
         $respond->value=json_encode($jeu, JSON_INVALID_UTF8_IGNORE);
        
	}
    else
    {
        /* le mot de passe n'est pas valide*/
        $respond->code=-2;
        $respond->message="Le site a rencontré un problème";
    }
} 
 catch (Exception $e) {
  $respond->code= -5;
  $respond->message= "Le site a rencontré un problème";
}

$myResponsJSON = json_encode($respond);
echo $myResponsJSON;	