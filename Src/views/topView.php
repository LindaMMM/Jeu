<?php $title = '<i class="fas fa-award has-text-dark" style="font-size: 48px;"></i>&nbsp;Qui a gagné ?'; ?>
<?php ob_start(); ?>

<div class="box">
    <div id="err"></div>
    <div class="notification stars has-background-warning">
        <button class="delete"></button>
        <div class="box">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img src="Src/public/img/breiznoel-info.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>Le père breizh noel</strong> <small>@breizhnoel</small> <small>31m</small>
                            <br>
                            Benlors on s'est perdu ?<br/>
                            Aaaah Non, tu cherches à savoir qui a gagné. Prépare ton mouchoir si tu n'as pas jouer, tu n'as pas gagné. Ca ne sert à rien de rafraichir cette page.<br/>
                            Profite du bonheur des autres ou savoure bien de te voir nomé sur la page. Ca fait du bien de se faire mousser  !
                        </p>
                    </div>
                </div>
            </article>


        </div>
    </div>


    <div class="subtitle">Progession des cadeaux / Il reste X cadeaux.</div>
    <p class="title has-text-white"><progress class="progress" value="1" max="100">1er jour</progress></p>

    <div class="section" id="jours">
        <div id="gagant"></div>
        <div class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <p class="image is-4by3">
                    <img src="Src/public/img/present.gif" alt="">
                </p>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./src/templates/TmpNoel.php'); ?>