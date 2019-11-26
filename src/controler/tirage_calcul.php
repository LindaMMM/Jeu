<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("../class/config.php");
    
try {
    $dateCal = date('Y-m-d');
    $dateCal = date('2019-12-02');
    $output = UserCtrl::CalculTirage($dateCal);
    Echo  var_dump($output);
    	 
} 
 catch (Exception $e) {
  $respond->code= -5;
  $respond->message= "Le site a rencontré un problème.";
}

echo "Fin";