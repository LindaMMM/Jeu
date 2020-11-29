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
	
	public static function GetJeu($idUser)
    {
        $bd= new Database(DB_CSE);
        $Jeu= new Jeu($bd);
		$Jeu->getbyUserid($idUser);
		return  $Jeu;
	}
	
	public static function Jouer($idUser)
    {
        $bd= new Database(DB_CSE);
		$Jeu= new Jouer($bd);
		$Jeu->Lancer($idUser);
		return  $Jeu;
	}

	public static function GetAllCadeau()
    {
        $bd= new Database(DB_CSE);
		$Cadeau= new Cadeau($bd);
		return $Cadeau->getAll();
	}

	public static function GetAllCadeauGagner()
    {
        $bd= new Database(DB_CSE);
		$Cadeau= new Cadeau($bd);
		return $Cadeau->getAllGagner();
	}

	public static function GetCountCadeau()
    {
        $bd= new Database(DB_CSE);
		$Cadeau= new Cadeau($bd);
		return $Cadeau->getCount();
	}

	public static function CalculTirage($datecal)
	{
		$bd= new Database(DB_CSE);
		$Cadeau= new Cadeau($bd);
		return $Cadeau->calculTirage($datecal);
	}

	public static function GetAllUser()
	{
		$bd= new Database(DB_CSE);
		$user= new User($bd);
		return $user->GetAll();
	}
}
