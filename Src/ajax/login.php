<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../../../data/protec/conf.php");

    $respond->code=0;
    $respond->message=$lang->err_202;
    $respond->nextAction="";
    
    
try {
    if (!isset($_SESSION['LOGIN_CLT']))
    {
        $respond->code=0;
        $respond->message="La session n'est plus valide";
        $respond->nextAction="$(location).attr('href','../index.php')";
        echo json_encode( $respond );
        return;
    }
    
    $login =$_SESSION['LOGIN_CLT'] ;
    $pdwclt = $_SESSION['PWD_CLT']  ;
    $pwd = $_POST["pwd"];
    $pwd_new = $_POST["pwd_new"];
    if (strcmp($pdwclt, $pwd) == 0)
    {
        $client = $_SERVER['REMOTE_ADDR'];
        $result= ConnexionDistriCtrl::SaveConnexion($login,$pwd_new,$client);
        
        if ($result == ConnexionDistri::CONNEXION_OK)
        {
            $respond->code = 1;
            $respond->message = Traduit('PwdChange');
            $respond->nextAction = "$(location).attr('href','../index.php')";
        }
        else 
        {
            $respond->message = Traduit('PwdChangeErr');
        }
    }
    else
    {
        /* le mot de passe n'est pas valide*/
        $respond->code=-1;
        $respond->message=$lang->err_203;
    }
} 
 catch (Exception $e) {
  $respond->code= -5;
  $respond->message= $e->getMessage();
}

$myResponsJSON = json_encode($respond);
echo $myResponsJSON;	