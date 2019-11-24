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
        <section class="hero is-fullheight stars">
            <div class="hero-head">

                <div class="navbar-brand">
                    <a class="navbar-item" href="../">
                        <h1 class="title is-1 has-text-white"><?= $title ?></h1>
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <span class="navbar-item">

                            <span><p class="heading has-text-white">Nous sommes le </p>
                                <p class="title has-text-white">1er Décembre</p></span>

                        </span>
                        <span class="navbar-item">

                            <span><p class="heading"><span class="tag is-success">Le gain est ouvert</span></p>
                                <p class="title has-text-white"><progress class="progress" value="1" max="25">1er jour</progress></p></span>

                        </span>

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
                (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    $notification = $delete.parentNode;
                    $delete.addEventListener('click', () => {
                        $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>

        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>
</html>