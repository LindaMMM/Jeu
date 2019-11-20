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

        <link rel="stylesheet" href="Src/public/css/normalize.css">
        <link rel="stylesheet" href="Src/public/css/main.css">
        <link rel="stylesheet" href="Src/public/css/night.css">
        
        <link rel="stylesheet" 
              href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

        <meta name="theme-color" content="#fafafa">
    </head>
    <body>
        
        <div class="stars">
        <div class="twinkling"><?= $content ?></div>
        </div>
        
        

        <script src="../public/script/modernizr/modernizr-3.7.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../public/script/jquery/jquery-3.4.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function () {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>
</html>