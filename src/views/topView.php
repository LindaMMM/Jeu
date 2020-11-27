<?php $title = '<i class="fas fa-award has-text-dark" style="font-size: 48px;"></i>&nbsp;Qui a gagné ?'; ?>
<?php ob_start(); ?>

<div class="box">
    <div id="err"></div>
    <div class="notification stars has-background-warning">
        <button class="delete"></button>
        <div class="box has-background-warning">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-128x128">
                        <img src="src/public/img/breiznoel-info.png" alt="Image">
                    </figure>
                </div>
            </article>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Le père breizh noel</strong> <small>@breizhnoel</small> <small>31m</small>
                        <br>
                        Benlors on s'est perdu ?<br/>
                        Aaaah Non, tu cherches à savoir qui a gagné. Prépare ton mouchoir si tu n'as pas joué, tu n'as pas gagné. Ca ne sert à rien de rafraichir cette page.<br/>
                        Profite du bonheur des autres ou savoure bien de te voir nommé sur la page. Ca fait du bien de se faire mousser  !

                    </p>
                </div>
            </div>



        </div>
    </div>
    <div class="section has-text-centered has-background-grey-lighter")">
        <div class="box">
            <div class="columns">
            	<div class="column has-text-centered is-size-1 is-5">
                    <span id="rest_gift">179</span> pauvres petits cadeaux...
            	</div>
            	<div class="column has-text-centered is-2">
            		<i class="fas fa-tree" style='color:#5CB0A1'></i><i class="fas fa-tree" style='color:#5CB0A1'></i><i class="fas fa-tree" style='color:#5CB0A1'></i><i class="fas fa-tree" style='color:#5CB0A1'></i><i class="fas fa-tree" style='color:#5CB0A1'></i>
            		<div><i class="fas fa-gift" style="width:20px;color:#E61A24" ></i></div>
            		<div><i class="fas fa-road" style="font-size: 48px;"></i></div>
            		<i class="fas fa-male" style="font-size: 48px;color:#41699E"></i>
            	</div>
            	<div class="column has-text-centered is-size-1 is-5">
            		...n'ont toujours pas été gagnés !
            	</div>		
            </div>
            <p class="title has-text-white"><progress class="progress" id="progress_gift" value=100 max=100>1er jour</progress></p>
        </div>
    </div>
    <div class="section" id="top">
        <div id="gagant"></div>
        <div class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <p class="image is-4by3">
                    <img src="src/public/img/present.gif" alt="">
                </p>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php $js = '<script src="src/public/script/gagnant.js"></script>' ?>
<?php require('./src/templates/TmpNoel.php'); ?>