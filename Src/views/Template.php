<?php
header("Pragma:no-cache");
error_log("Grosse bourde !", 0);
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

    <section class="hero has-background-grey is-fullheight ">
    <div class="hero-body">
    <div class="container has-text-centered">
    
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-light">Connexion</h3>
                    <p class="subtitle has-text-light">Entrez vos login et mot de passe.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="./public/images/logo_150.png">
                        </figure>
                        <form action="" method="post">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large"  name="ssoId" type="username" placeholder="Votre login" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" name="password" type="password" placeholder="Votre mot de passe">
                                </div>
                            </div>
                            <button class="button is-block is-light is-large is-fullwidth" type="submit" value="Sign In">Entrer</button>
                        </form>
                    </div>
                </div>
    </div>
    </div>
    </section>
    </body>
    </html>