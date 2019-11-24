<?php
header("Pragma:no-cache");
error_log("Grosse bourde !", 0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cogelec - <?= $title ?></title>
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

        <!-- Begin Hero -->
        <section class="hero is-large">
            <div class="hero-head">
                <?= $content ?>
            </div>
            <!-- End Mobile Nav -->
             <!--Begin Hero Content-->
            <div class="hero-body">
                
            </div>
            <!-- End Hero Content-->
            <!-- Begin Hero Menu -->
<!--            <div class="hero-foot ">  
            </div>-->
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- End Main Content -->

    <!-- Begin Footer -->
<!--    <div class="footer">

    </div>-->
    <!-- End Footer -->

    <!-- Scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="Src/public/script/modernizr/modernizr-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../public/script/jquery/jquery-3.4.1.min.js"><\/script>')</script>
    <script src="Src/public/script/plugins.js"></script>
    <script src="Src/public/script/main.js"></script>
    <script src="Src/public/script/login.js"></script>
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
        $(document).ready(function () {

            $('body').on('click', '.delete', function () {
                $(this).parent().remove();
            })

        });

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
