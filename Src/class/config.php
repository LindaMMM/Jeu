<?php
$d="";
while(!file_exists($d."index.php"))$d.="../";
define("__DIR_PARENT__",$d);

require __DIR_PARENT__ . 'class/ConfigAutoLoader.php';

@session_cache_limiter('nocache'); 
error_reporting(0);

@session_start();
/*-----------------------------------------------------------------*/
/*LES VARIABLES A MODIFIER :
/*-----------------------------------------------------------------*/

$MYSQL_USER="root";	
$MYSQL_PASS="";
$MYSQL_SERVER="localhost";
$db_agence="agencedb";
define('DB_AGENCE', "$MYSQL_SERVER|$MYSQL_USER|$MYSQL_PASS|$db_agence");

?>