<?php
header("Pragma:no-cache");
require_once '../class/config.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>Connexion Agency </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">
    <link href="./public/css/fonts.googleapis.com.css" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="./public/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/login.css">
    <link rel="stylesheet" href="./public/css/agency.css" />
</head>
<body> 
<?php
    $user = $_SESSION["user"];
    echo var_dump($_SESSION);
?>
<h1>JOUER</h1>
   
    </body>
    </html>