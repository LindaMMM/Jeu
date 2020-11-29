<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../class/config.php");

    $respond->code=0;
    $respond->message="Login n'est pas valide";
    $respond->nextAction="";
    
try {
    $login =$_POST['ssoid'] ;
    $pwd = $_POST['pwd'];

    if (!isset($login)) {
        $respond->code=-1;
        $respond->message="Le site a rencontré un problème";
        echo json_encode( $respond );
        return;
    }
    
    
	$connexion = UserCtrl::Check($login, $pwd);
	if ($connexion->isValid()){
		 $respond->code=1;
         $respond->message="Login ok ";
         $_SESSION["ssoid"]=$login;
         $_SESSION["iduser"]=$connexion->getId();
	$_SESSION["test"] = $login;
        
	}
    else
    {
        /* le mot de passe n'est pas valide*/
        $respond->code=-2;
        $respond->message="Votre Login ou mot de passe ne sont pas correctes";
    }
} 
 catch (Exception $e) {
  $respond->code= -5;
  $respond->message= "Le site a rencontré un problème";
}

$myResponsJSON = json_encode($respond);
echo $myResponsJSON;	