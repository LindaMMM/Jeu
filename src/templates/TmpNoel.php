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
        <link rel="icon" href="favicon.png" />
        <link rel="apple-touch-icon" href="favicon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" 
              href="css/mystyles.css">


        <meta name="theme-color" content="#fafafa">
    </head>
    <body>

        <section class="hero is-fullheight">
            <div class="pageloader is-active"><span class="title">Tu me vois... tu ne me verras plus.</span></div>
            <div class="snow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
                <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
                <g id="snow-bottom-layer">
                <ellipse cx="6" cy="1009.5" rx="6" ry="5.5"/>
                <ellipse cx="138" cy="1110.5" rx="6" ry="5.5"/>
                <ellipse cx="398" cy="1055.5" rx="6" ry="5.5"/>
                <ellipse cx="719" cy="1284.5" rx="6" ry="5.5"/>
                <ellipse cx="760" cy="1155.5" rx="6" ry="5.5"/>
                <ellipse cx="635" cy="1459.5" rx="6" ry="5.5"/>
                <ellipse cx="478" cy="1335.5" rx="6" ry="5.5"/>
                <ellipse cx="322" cy="1414.5" rx="6" ry="5.5"/>
                <ellipse cx="247" cy="1234.5" rx="6" ry="5.5"/>
                <ellipse cx="154" cy="1425.5" rx="6" ry="5.5"/>
                <ellipse cx="731" cy="773.5" rx="6" ry="5.5"/>
                <ellipse cx="599" cy="874.5" rx="6" ry="5.5"/>
                <ellipse cx="339" cy="819.5" rx="6" ry="5.5"/>
                <ellipse cx="239" cy="1004.5" rx="6" ry="5.5"/>
                <ellipse cx="113" cy="863.5" rx="6" ry="5.5"/>
                <ellipse cx="102" cy="1223.5" rx="6" ry="5.5"/>
                <ellipse cx="395" cy="1155.5" rx="6" ry="5.5"/>
                <ellipse cx="826" cy="943.5" rx="6" ry="5.5"/>
                <ellipse cx="626" cy="1054.5" rx="6" ry="5.5"/>
                <ellipse cx="887" cy="1366.5" rx="6" ry="5.5"/>
                <ellipse cx="6" cy="241.5" rx="6" ry="5.5"/>
                <ellipse cx="138" cy="342.5" rx="6" ry="5.5"/>
                <ellipse cx="398" cy="287.5" rx="6" ry="5.5"/>
                <ellipse cx="719" cy="516.5" rx="6" ry="5.5"/>
                <ellipse cx="760" cy="387.5" rx="6" ry="5.5"/>
                <ellipse cx="635" cy="691.5" rx="6" ry="5.5"/>
                <ellipse cx="478" cy="567.5" rx="6" ry="5.5"/>
                <ellipse cx="322" cy="646.5" rx="6" ry="5.5"/>
                <ellipse cx="247" cy="466.5" rx="6" ry="5.5"/>
                <ellipse cx="154" cy="657.5" rx="6" ry="5.5"/>
                <ellipse cx="731" cy="5.5" rx="6" ry="5.5"/>
                <ellipse cx="599" cy="106.5" rx="6" ry="5.5"/>
                <ellipse cx="339" cy="51.5" rx="6" ry="5.5"/>
                <ellipse cx="239" cy="236.5" rx="6" ry="5.5"/>
                <ellipse cx="113" cy="95.5" rx="6" ry="5.5"/>
                <ellipse cx="102" cy="455.5" rx="6" ry="5.5"/>
                <ellipse cx="395" cy="387.5" rx="6" ry="5.5"/>
                <ellipse cx="826" cy="175.5" rx="6" ry="5.5"/>
                <ellipse cx="626" cy="286.5" rx="6" ry="5.5"/>
                <ellipse cx="887" cy="598.5" rx="6" ry="5.5"/>
                </g>
                </g>
                <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
                <g id="snow-top-layer">
                <circle cx="8" cy="776" r="8"/>
                <circle cx="189" cy="925" r="8"/>
                <circle cx="548" cy="844" r="8"/>
                <circle cx="685" cy="1115" r="8"/>
                <circle cx="858" cy="909" r="8"/>
                <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)"/>
                <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)"/>
                <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)"/>
                <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)"/>
                <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)"/>
                <circle cx="8" cy="8" r="8"/>
                <circle cx="189" cy="157" r="8"/>
                <circle cx="548" cy="76" r="8"/>
                <circle cx="685" cy="347" r="8"/>
                <circle cx="858" cy="141" r="8"/>
                <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)"/>
                <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)"/>
                <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)"/>
                <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)"/>
                <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)"/>
                </g>
                </g>
                </svg>
            </div>
            <div class="hero-head" style="z-index:1">
                <a role="button" class="navbar-burger has-text-white is-fixed-top " data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                <nav class="navbar navbar-menu level" style="margin-top:2%;padding:2% 0" id='navMenu'>
                    <div class="level-item has-text-centered is-click">
                        <div>

                            <span>
                                <p class="heading">
                                    <span class="tag is-info has-text-black"><i class="fas fa-calendar-minus" style="font-size: 48px;"></i>&nbsp;Nous sommes le </span></p>
                                <p class="to-hide has-text-black" id="date">01/12/2019</p></span>


                        </div>
                    </div>
                    <a href="?page=accueil#is-the-one" class="level-item has-text-centered is-click">

                        <div>

                            <span><p class="heading"><span class="tag is-success has-text-black"><i class="fas fa-gift has-text-black" style="font-size: 48px;"></i>&nbsp;Le gain est ouvert</span></p>
                                <p class="to-hide has-text-black">Va vite tenter ta chance !</p></span>

                        </div>

                    </a>
                    <p class="level-item has-text-centered">
                        <span class="to-hide title is-1 has-text-white"><?= $title ?></span>
                    </p>
                    <a href="?page=top" class="level-item has-text-centered is-click">

                        <div>

                            <span><p class="heading"><span class="tag is-warning"><i class="fas fa-award" style="font-size: 48px;"></i>&nbsp;Qui a gagné ?</span></p>
                                <p class="to-hide has-text-black">Consultes la liste des gagnants</p></span>

                        </div>

                    </a>

                    <div class="level-item has-text-centered is-click" id="deco">

                        <div>

                            <span><p class="heading"><span class="tag is-danger"><i class="fas fa-sign-out-alt has-text-black" style="font-size: 48px;"></i></i>&nbsp;Se deconnecter</span></p>
                                <p class="to-hide has-text-black">Alors tu nous quittes ? :(</p></span>

                        </div>



                    </div>
                </nav>
            </div>
            <div class="hero-body ">
                <div class="container">
                    <?= $content ?>
                </div>
            </div>
        </section>


        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="src/public/script/modernizr/modernizr-3.7.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../public/script/jquery/jquery-3.4.1.min.js"><\/script>')</script>
        <script src="src/public/script/plugins.js"></script>
        <script src="src/public/script/main.js"></script>
        <script src="src/public/script/jours.js"></script>
        <script src="src/public/script/deco.js"></script>
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
                            $('.to-hide').hide();

                        });
                    });
                    
                }
            });

            $(document).ready(function () {

                $('body').on('click', '#is-the-one', function () {
                    $('.modal').addClass('is-active');
                    $('html').addClass('is-clipped');
                });
                $('body').on('click', '.modal-background', function () {
                    $(this).parent().removeClass('is-active');
                    $('html').removeClass('is-clipped');
                });
                $('body').on('click', '.modal-close', function () {
                    $(this).parent().removeClass('is-active');
                    $('html').removeClass('is-clipped');
                })


            });

            var $loading = $('.pageloader');
            $(document)
                    .ajaxStart(function () {
                        console.log('charge');
                        $loading.addClass('is-active');
                    })
                    .ajaxStop(function () {
                        console.log('fin');
                        $loading.removeClass('is-active');
                    });



        </script>

        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>
</html>