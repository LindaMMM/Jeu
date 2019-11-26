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
    //$gagant = UserCtrl::GetAllCadeau();
    $gagant = UserCtrl::GetAllCadeauGagner();
    $output = array();
    if ($gagant!=false)
    {
        foreach ($gagant as $value){
          
           $arrayVar = array(
                'libelle' => $value->cadeau,
                'gagant' => $value->gagant,
				'dateGain' => $value->dateGain
             );
			 array_push($output,$arrayVar);
            
        }
		
        $respond->code=1;
        $respond->message="bien jouer";
        $respond->value = json_encode($output, JSON_INVALID_UTF8_IGNORE);;
    }
    else{
        $respond->code=-1;
        $respond->message="Rien a été touvé";
    }
	
		 
} 
 catch (Exception $e) {
  $respond->code= -5;
  $respond->message= "Le site a rencontré un problème.";
}

$myResponsJSON = json_encode($respond);
echo $myResponsJSON;	