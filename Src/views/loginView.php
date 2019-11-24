<?php $title = 'Votre calendrier de l\'avent - Cogelec'; ?>
<?php ob_start(); ?>

<div class="container has-text-centered">
    <div class="column is-4 is-offset-4">
        <h3 class="subtitle is-1 has-text-white">Connexion</h3>
        <hr class="login-hr">
        <p class="subtitle has-text-white">Please login to proceed.</p>
        <div class="box">
            <figure class="avatar">
                <img src="Src/public/img/pere_noel.jpg">
            </figure>
            <form>
                <div class="field">
                    <div class="control">
                        <input class="input is-large" type="email" placeholder="Votre identifiant" autofocus="">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" type="password" placeholder="Votre Mot de passe">
                    </div>
                </div>
                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox">
                        Se souvenir de moi
                    </label>
                </div>
                <a href="?page=accueil">test</a>
                <button class="button is-block is-info is-large is-fullwidth">Connexion <i class="fa fa-sign-in" aria-hidden="true"></i></button>
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