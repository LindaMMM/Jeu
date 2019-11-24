<?php $title = 'Jouez'; ?>
<?php ob_start(); ?>

<div class="box">
    <div id="err"></div>
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


        </div>
    </div>


    <div class="subtitle">Progession des cadeaux / Il reste X cadeaux.</div>
    <p class="title has-text-white"><progress class="progress" value="1" max="100">1er jour</progress></p></span>

<div class="section" id="jours">
    <div id="res_jours"></div>
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