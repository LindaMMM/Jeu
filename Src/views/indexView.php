<?php $title = 'Le Calendrier de Grogelec'; ?>
<?php ob_start(); ?>

<div class="container">
    <div id="flow">
        <span class="flow-1"></span>
        <span class="flow-2"></span>
        <span class="flow-3"></span>
    </div>
    <div class="section">
        <progress class="progress is-success" value="1" max="25">1er jour</progress>
    </div>
    <div class="section">

        <div class="row columns">
            <div class="column is-two-third">
                <div class="card large">
                    <div class="card-image">
                        <figure class="image">
                            <img src="Src/public/img/back_day.jpg" alt="Image">
                        </figure>
                    </div>
                    <div class="card-content has-background-grey-lighter">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-96x96">
                                    <img src="Src/public/img/pere_noel.jpg" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content ">
                                <p class="title is-4 no-padding">On t'attend !</p>
                                <p><span class="title is-6"><a href="http:///#">ohoho ! Ouvre chenapan</a></span></p>
                                <p class="subtitle is-6">Le père breizh noel</p>
                            </div>
                        </div>
                        <div class="content">
                            Tu as peut être gagné le 4x4 de Roger ou... une clé kibolt.
                            <div class="background-icon"><span class="icon-twitter"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-two-third">
                <div class="card large">
                    <div class="card-image">
                        <figure class="image">
                            <img src="Src/public/img/back_day.jpg" alt="Image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-96x96">
                                    <img src="Src/public/img/elfe.jpg" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4 no-padding">Tu attends !</p>
                                <p><span class="title is-6"><a href="http:///#">Déso... déso </a></span></p>
                                <p class="subtitle is-6">Le lutin du malheur</p>
                            </div>
                        </div>
                        <div class="content">
                            Bon... écoute. On n'est pas prêt... Ouais je sais, t'aimerai mais que veux tu...
                            Avec la crise c'est chaud mais on a des éléphant Jumbo en consolation
                            <div class="background-icon"><span class="icon-facebook"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-two-third">
                <div class="card large">
                    <div class="card-image">
                        <figure class="image">
                            <img src="Src/public/img/back_day.jpg" alt="Image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-96x96">
                                    <img src="Src/public/img/elfe.jpg" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4 no-padding">Tu attends !</p>
                                <p><span class="title is-6"><a href="http:///#">Déso... déso </a></span></p>
                                <p class="subtitle is-6">Le lutin du malheur</p>
                            </div>
                        </div>
                        <div class="content">
                            Bon... écoute. On n'est pas prêt... Ouais je sais, t'aimerai mais que veux tu...
                            Avec la crise c'est chaud mais on a des éléphant Jumbo en consolation
                            <div class="background-icon"><span class="icon-facebook"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $i = 0;
        $first = 0;
        for ($i = 0; $i < 7; $i++) {
            echo '<div class="row columns">';
            ?>
            <div class="row columns">
                <div class="column is-two-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="Src/public/img/back_day.jpg" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="Src/public/img/elfe.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">Tu attends !</p>
                                    <p><span class="title is-6"><a href="http:///#">Déso... déso </a></span></p>
                                    <p class="subtitle is-6">Le lutin du malheur</p>
                                </div>
                            </div>
                            <div class="content">
                                Bon... écoute. On n'est pas prêt... Ouais je sais, t'aimerai mais que veux tu...
                                Avec la crise c'est chaud mais on a des éléphant Jumbo en consolation
                                <div class="background-icon"><span class="icon-facebook"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row columns">
                <div class="column is-two-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="Src/public/img/back_day.jpg" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="Src/public/img/elfe.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">Tu attends !</p>
                                    <p><span class="title is-6"><a href="http:///#">Déso... déso </a></span></p>
                                    <p class="subtitle is-6">Le lutin du malheur</p>
                                </div>
                            </div>
                            <div class="content">
                                Bon... écoute. On n'est pas prêt... Ouais je sais, t'aimerai mais que veux tu...
                                Avec la crise c'est chaud mais on a des éléphant Jumbo en consolation
                                <div class="background-icon"><span class="icon-facebook"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row columns">
                <div class="column is-two-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="Src/public/img/back_day.jpg" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="Src/public/img/elfe.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">Tu attends !</p>
                                    <p><span class="title is-6"><a href="http:///#">Déso... déso </a></span></p>
                                    <p class="subtitle is-6">Le lutin du malheur</p>
                                </div>
                            </div>
                            <div class="content">
                                Bon... écoute. On n'est pas prêt... Ouais je sais, t'aimerai mais que veux tu...
                                Avec la crise c'est chaud mais on a des éléphant Jumbo en consolation
                                <div class="background-icon"><span class="icon-facebook"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            echo '</div>';
        }
        ?>
    </div>
</div>
        <?php $content = ob_get_clean(); ?>

<?php require('./src/templates/TmpNoel.php'); ?>