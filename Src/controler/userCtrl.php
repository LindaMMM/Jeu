<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userCtrl
 *
 * @author lmartin
 */
class UserCtrl {
	
	public static function Check($login,$pwd)
    {
		
        $bd= new Database(DB_CSE);
        $user= new User($bd);
		$user->getbyLogin($login);
		$user->checkPwd($pwd);
		return  $user;
	}
	
    
}
