<?php $title = 'Jouez'; ?>
<?php ob_start(); ?>

<div class="column is-4 is-offset-4 has-text-centered">
    <h1 class="title is-1 has-text-white"><?= $title ?></h1>
    <hr class="login-hr">
    <p class="subtitle has-text-white">Votre calendrier de l'avent - Cogelec</p>
</div>

<div class="box">

    <button id="jours">jours</button>
    <div id="res_jours"></div>

    <div class="notification stars">
        <button class="delete"></button>
        <div class="box">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img src="Src/public/img/pere_noel.jpg" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>Le père breizh noel</strong> <small>@breizhnoel</small> <small>31m</small>
                            <br>
                            Ohohoh (géééééééééant vert)<br/>
                            Salut mes gars ! Chaque jour, ici, vous pourrez jouer et gagner un lot.
                            Vu que c'est avant Noel, te plains pas si tu as perdu et que tu n'as pas de cadeau !
                            Ca viendra le 25.<br/>
                            Je t'en prie, fais toi plaisir.
                        </p>
                    </div>
                </div>
            </article>
            <div class="navbar-menu">
                <div class="navbar-end ">
                    <span class="navbar-item item-bottom">

                        <span>
                        <p class="heading">
                            <span class="tag is-info has-text-black"><i class="fas fa-calendar-minus" style="font-size: 48px;"></i>&nbsp;Nous sommes le </span></p>
                        <div class="level">
                            <div class="level-left"><div class="level-item box has-text-black">01</div></div> / <div class="level-right"><div class="level-item box has-text-black">12</div></div>
                        </div>
                        </span>


                    </span>
                    <span class="navbar-item item-bottom">

                        <span><p class="heading"><span class="tag is-success has-text-black"><i class="fas fa-gift has-text-black" style="font-size: 48px;"></i>&nbsp;Le gain est ouvert</span></p>
                            <p class="has-text-black">Va vite tenter ta chance !</p></span>

                    </span>

                    <span class="navbar-item item-bottom">

                        <span><p class="heading"><span class="tag is-warning"><i class="fas fa-award" style="font-size: 48px;"></i>&nbsp;Qui a gagné ?</span></p>
                            <p class="has-text-black">Consultes la liste des gagnants</p></span>

                    </span>

                    

                </div>
            </div>
            
        </div>
        <div class="subtitle">Progession des cadeaux / Il reste X cadeaux.</div>
        <p class="title has-text-white"><progress class="progress" value="1" max="100">1er jour</progress></p></span>
    </div>
    <div class="section">

        <div class="row columns">
            <div class="column is-two-third">
                <div class="card large is-the-one">
                    <div class="card-image has-text-centered">
                        <div class="title is-1 day-number">
                            Jour <br/>01/12
                        </div>
                        <figure class="image">
                            <img src="Src/public/img/back_day.jpg" alt="Image">
                        </figure>
                    </div>
                    <div class="card-content has-background-warning">
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
            <div class="column is-two-third is-disabled">
                <div class="card large">
                    <div class="card-image">
                        <div class="title is-1 day-number">
                            Jour <br/>02/12
                        </div>
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

            <div class="column is-two-third">
                <div class="card large">
                    <div class="card-image">
                        <figure class="image">
                            
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

            <?php
            echo '</div>';
        }
        ?>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./src/templates/TmpNoel.php'); ?>