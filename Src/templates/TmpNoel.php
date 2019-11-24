<?php
header("Pragma:no-cache");
error_log("Grosse bourde !", 0);
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <title>Gralendar - <?= $title ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/night.css">
        <link rel="stylesheet" 
              href="css/mystyles.css">


        <meta name="theme-color" content="#fafafa">
    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="hero-head">
                <a role="button" class="navbar-burger has-text-white" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                <nav class="navbar-menu level" style="margin-top:2%;padding:2% 0" id='navMenu'>
                    <div class="level-item has-text-centered is-click">
                        <div>

                            <span>
                            <p class="heading">
                                <span class="tag is-info has-text-black"><i class="fas fa-calendar-minus" style="font-size: 48px;"></i>&nbsp;Nous sommes le </span></p>
                            <p class="has-text-black" id="date">01/12/2019</p></span>


                        </div>
                    </div>
                    <a href="#is-the-one" class="level-item has-text-centered is-click">

                        <div>

                            <span><p class="heading"><span class="tag is-success has-text-black"><i class="fas fa-gift has-text-black" style="font-size: 48px;"></i>&nbsp;Le gain est ouvert</span></p>
                                <p class="has-text-black">Va vite tenter ta chance !</p></span>

                        </div>

                    </a>
                    <p class="level-item has-text-centered">
                        <span class="title is-1 has-text-white"><?= $title ?></span>
                    </p>
                    <div class="level-item has-text-centered is-click">

                        <div>

                            <span><p class="heading"><span class="tag is-warning"><i class="fas fa-award" style="font-size: 48px;"></i>&nbsp;Qui a gagné ?</span></p>
                                <p class="has-text-black">Consultes la liste des gagnants</p></span>

                        </div>

                    </div>

                    <div class="level-item has-text-centered is-click" id="deco">

                        <div>

                            <span><p class="heading"><span class="tag is-danger"><i class="fas fa-sign-out-alt has-text-black" style="font-size: 48px;"></i></i>&nbsp;Se deconnecter</span></p>
                                <p class="has-text-black">Alors tu nous quittes ? :(</p></span>

                        </div>



                    </div>
                </nav>
            </div>
            <div class="hero-body">
                <div class="container">
                    <?= $content ?>
                </div>
            </div>
        </section>


        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="Src/public/script/modernizr/modernizr-3.7.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../public/script/jquery/jquery-3.4.1.min.js"><\/script>')</script>
        <script src="Src/public/script/plugins.js"></script>
        <script src="Src/public/script/main.js"></script>
        <script src="Src/public/script/jours.js"></script>
        <script src="Src/public/script/deco.js"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function () {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview');

            document.addEventListener('DOMContentLoaded', () => {


                // Get all "navbar-burger" elements
                const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                // Check if there are any navbar burgers
                if ($navbarBurgers.length > 0) {

                    // Add a click event on each of them
                    $navbarBurgers.forEach(el => {
                        el.addEventListener('click', () => {

                            // Get the target from the "data-target" attribute
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);

                            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                            el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');

                        });
                    });
                }
            });
            
            $(document).ready(function () {

                $('body').on('click', '#is-the-one', function () {
                    $('.modal').addClass('is-active');
                    $('html').addClass('is-clipped');
                });
                $('body').on('click', '.modal-background', function(){
                        $(this).parent().removeClass('is-active');
                        $('html').removeClass('is-clipped');
                });

            });

        </script>

        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>
</html>