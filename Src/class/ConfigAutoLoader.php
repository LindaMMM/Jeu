<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(array('ConfigAutoLoader', 'autoload'));

/**
 * Class autoloader. 
 */
class ConfigAutoLoader {
	
	/** Maps classnames to files containing the class. */
	private static $classes = array(
	
		'Database' => 'Src/class/database.php',
		'User' => 'Src/class/user.php',
		'Jeu' => 'Src/class/jeu.php',
		'UserCtrl' => 'Src/controler/userCtrl.php',
   
	);
	
	/**
	 * Loads a class.
	 * @param string $className The name of the class to load.
	 */
	public static function autoload($className) {
		if(isset(self::$classes[$className])) {
			if (!include(__DIR_PARENT__. self::$classes[$className]))
                        {
                                die('Error.'. __DIR_PARENT__ . self::$classes[$className]);
                        }
		}
	}
}