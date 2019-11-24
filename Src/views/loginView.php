<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>

<div class="container has-text-centered">
    <div class="column is-4 is-offset-4">
        <h1 class="title is-1 has-text-white"><?= $title ?></h1>
        <hr class="login-hr">
        <p class="subtitle has-text-white">Votre calendrier de l'avent - Cogelec</p>
        <div class="box">
            <figure class="avatar">
                <img src="Src/public/img/pere_noel.jpg">
            </figure>
            <div id="err"></div>
            <form id="idform">
                <div class="field">
                    <div class="control has-icons-left">
                        <input name="ssoid" class="input is-large" type="text" placeholder="Votre identifiant" autofocus="">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>

                </div>

                <div class="field">
                    <div class="control has-icons-left">
                        <input  name="pwd" class="input is-large" type="password" placeholder="Votre Mot de passe">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>

                </div>
                
<!--                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox">
                        Se souvenir de moi
                    </label>
                </div>
                <a href="?page=accueil">test</a>-->

                <button class="button is-block is-info is-large is-fullwidth">Connexion <i class="fas fa-sign-in-alt"></i></button>
            </form>

        </div>
        <p class="has-text-grey">
            <a href="../">Sign Up</a> &nbsp;·&nbsp;
            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
            <a href="../">Need Help?</a>
        </p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./src/templates/TmpLogin.php'); ?>