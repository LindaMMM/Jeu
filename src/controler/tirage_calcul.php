<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../class/config.php");
    
try {
    $dateCal = new DateTime();
    // $dateCal = date('Y-m-d');
    // $dateCal = date('2019-12-02');
    error_log("lancement du calcul".var_dump($dateCal), 0);
    $output = UserCtrl::CalculTirage($dateCal);
    error_log(var_dump($output));
    	 
} 
 catch (Exception $e) {
  $respond->code= -5;
  error_log(var_dump($e.getMessage()));
  $respond->message= "Le site a rencontré un problème.";
}

echo "Fin";