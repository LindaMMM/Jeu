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
	
		'Database' => 'src/class/database.php',
		'User' => 'src/class/user.php',
		'Jeu' => 'src/class/jeu.php',
		'Jouer' => 'src/class/jouer.php',
		'Cadeau' => 'src/class/cadeau.php',
		'UserCtrl' => 'src/controler/userCtrl.php',
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