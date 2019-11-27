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
                        Aaaah Non, tu cherches à savoir qui a gagné. Prépare ton mouchoir si tu n'as pas jouer, tu n'as pas gagné. Ca ne sert à rien de rafraichir cette page.<br/>
                        Profite du bonheur des autres ou savoure bien de te voir nomé sur la page. Ca fait du bien de se faire mousser  !
                    </p>
                </div>
            </div>



        </div>
    </div>
    <div class="section has-text-centered has-background-grey-lighter">
        <div class="box">
            <div class="subtitle is-1"> <span id="rest_gift"></span> <i class="fas fa-gift"></i></div>
            <p class="title has-text-white"><progress class="progress" id="progress_gift">1er jour</progress></p>
        </div>
    </div>
    <div class="section" id="top">
        <div class="pricing-table is-horizontal ">
            <div class="pricing-plan  is-active">
                <div class="plan-header">Nom du gagnant</div>
                <div class="plan-items">
                    <div class="plan-item"></div>
                    <div class="plan-item" style='font-size:15px'><i class="fas fa-grin-beam" ></i>&nbsp;has ganado :</div>
                    <div class="plan-item"></div>
                    <div class="plan-item"></div>
                    <div class="plan-item" style='font-size:15px'>Machine ç café très longue</div>
                    <div class="plan-item"></div>
                </div>
                <div class="plan-footer">
                    <span>
                        <div class="plan-price"><span class="tag is-warning has-text-black"><i class="fas fa-calendar-minus" style="font-size: 48px;"></i>&nbsp;Date du gain : </span></div>
                        <button class="button is-fullwidth has-background-grey-light" disabled="disabled">01/12/2019</button>
                </div>
            </div>

            <div class="pricing-plan is-warning">
                <div class="plan-header">Startups</div>
                <div class="plan-items">
                    <div class="plan-item">20GB Storage</div>
                    <div class="plan-item">25 Domains</div>
                    <div class="plan-item">1TB Bandwidth</div>
                    <div class="plan-item">-</div>
                </div>
                <div class="plan-footer">
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>40</span>/month</div>
                    <button class="button is-fullwidth">Choose</button>
                </div>
            </div>

            <div class="pricing-plan is-active">
                <div class="plan-header">Growing Team</div>
                <div class="plan-items">
                    <div class="plan-item">200GB Storage</div>
                    <div class="plan-item">50 Domains</div>
                    <div class="plan-item">1TB Bandwidth</div>
                    <div class="plan-item">100 Email Boxes</div>
                </div>
                <div class="plan-footer">
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>60</span>/month</div>
                    <button class="button is-fullwidth">Choose</button>
                </div>
            </div>

            <div class="pricing-plan is-danger">
                <div class="plan-header">Enterprise</div>
                <div class="plan-items">
                    <div class="plan-item">2TB Storage</div>
                    <div class="plan-item">100 Domains</div>
                    <div class="plan-item">1TB Bandwidth</div>
                    <div class="plan-item">1000 Email Boxes</div>
                </div>
                <div class="plan-footer">
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>100</span>/month</div>
                    <button class="button is-fullwidth">Choose</button>
                </div>
            </div>
        </div>
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