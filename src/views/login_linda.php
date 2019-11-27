<?php
header("Pragma:no-cache");
require_once "../class/config.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Connexion Cse </title>
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
$formulaire_envoyé = isset($_POST['password']);
if($formulaire_envoyé)
{
    /*echo "post data \n";
    echo var_dump($_POST);
	*/
	/*
    $connexion = UserCtrl::Check($_POST['ssoId'],$_POST['password']);
	if ($connexion->isValid()){
        echo "Isvalid";
         $_SESSION['ssoid'] = $_POST['ssoId'];
         $_SESSION['user'] = json_encode($connexion) ;
         echo "user";
         $_SESSION['roles'] =  $connexion->getRoles();
         echo var_dump($_SESSION);
	     $host  = $_SERVER['HTTP_HOST'];
	     $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
         $extra = 'main.php';
         // header("Location: http://$host$uri/$extra");
	}
	else{
		echo "Ce login n'est pas valide";
    }
    */
    $jeu = UserCtrl::GetJeu(7);
    echo (json_encode($jeu));

    $count = UserCtrl::GetCountCadeau();
    echo (json_encode($count));
    try{
        echo "ll";
    $jeu = UserCtrl::Jouer(7);
    echo (json_encode($jeu));
    }
    catch (Exception $e) {
        //$respond->code= -5;
       echo $e->get_message();
      }
}
?>
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
                        <form id="idform" action="" method="POST" >
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