<?php
$d="";
while(!file_exists($d."index.php"))$d.="../";
define("__DIR_PARENT__",$d);

require __DIR_PARENT__ . 'src/class/ConfigAutoLoader.php';

@session_cache_limiter('nocache'); 
error_reporting(0);

@session_start();

/*-----------------------------------------------------------------*/
/*LES VARIABLES A MODIFIER :
/*-----------------------------------------------------------------*/

$MYSQL_USER="csecogeleocal";	
$MYSQL_PASS="MDnJ73m9y";
$MYSQL_SERVER="csecogeleocal.mysql.db";
$db_login="csecogeleocal";
define('DB_CSE', "$MYSQL_SERVER|$MYSQL_USER|$MYSQL_PASS|$db_login");

?>