<?php
header("Pragma:no-cache");

require_once 'Src/class/config.php';

if(!isset($_SESSION['ssoid'])){
	$res=header('Location:Src/views/login.php');
    echo '$res';
}else{
  echo $_SESSION['ssoid'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon CSE</title>
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        <span style="color: blue">Hello</span> World
      </h1>
      <p class="subtitle" style="color: purple">
        My first website with <strong>Bulma</strong>!
      </p>
    </div>
  </section>
  </body>
</html>
