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
                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start ">
                        <div class="navbar-item">
                            <i class="fas fa-gift has-text-black"></i>&nbsp;Le gain est ouvert
                        </div>
                        <div class="navbar-item">
                            <i class="fas fa-award"></i>&nbsp;Qui a gagné ?
                        </div>
                    </div>
                </div>
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

        </script>

        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>
</html>