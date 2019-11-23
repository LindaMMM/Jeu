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
    <script src="../public/script/jquery/jquery-3.3.1.js"></script>
    <script src="../public/script/login.js"></script>
</head>
<body> 
<div>
<h1>Login</h1>
<form id="idform" action="" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large"  name="ssoid" type="username" placeholder="Votre login" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" name="pwd" type="password" placeholder="Votre mot de passe">
                                </div>
                            </div>
                            <button class="button is-block is-light is-large is-fullwidth" type="submit" value="Sign In">Entrer</button>
                        </form>
</div>
<div id="err">
</div>

<h1>Main page </h1>

<a>Jouer</a>
<a>liste de cadeaux</a>
<a>Admin</a>
    
    </body>
    </html>