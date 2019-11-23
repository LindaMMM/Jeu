<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../class/config.php");

    $respond->code=0;
    $respond->message="Login n'est pas valide";
    $respond->value=array();
    
try {
    $idUser =$_SESSION["iduser"] ;
  
   

    if (!isset($idUser)) {
        $respond->code=-1;
        $respond->message="Pas de connexion";
        echo json_encode( $respond );
        return;
    }
    
    $jours = UserCtrl::GetJeu($idUser);
    
	if ($jours->isValid()){
		 $respond->code=1;
         $respond->message="Jours charger";
         $respond->value=json_encode($jours);
        
	}
    else
    {
        /* le mot de passe n'est pas valide*/
        $respond->code=-2;
        $respond->message="Pas de jeu";
    }
} 
 catch (Exception $e) {
  $respond->code= -5;
  $respond->message= $e->getMessage();
}

$myResponsJSON = json_encode($respond);
echo $myResponsJSON;	