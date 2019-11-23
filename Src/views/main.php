<?php
header("Pragma:no-cache");
require_once '../class/config.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>CSE Cogelec </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body> 
<?php
    echo $_SESSION['ssoid'];
?>

<h1>Main page </h1>

<a>Jouer</a>
<a>liste de cadeaux</a>
<a>Admin</a>
    
    </body>
    </html>