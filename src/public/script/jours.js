$(document).ready(function (e) {



    console.log("jours");
    var code = 0;
    var msg = 'No response';
    var connection = {};
    var compte = {};


    $.ajax({dataType: "JSON",
        type: "GET", url: "./src/ajax/jours.php",
        success: function (response) {
            code = response.code;
            msg = response.message;
            connection = response.value;
        },
        error: function (response) {
            code = response.code;
            msg = response.message;
        },
        complete: function () {
            if (code > 0)
            {
                GenerateDiv(connection, 'jours');
            } else
            {

                html = '<div class="notification is-danger">\n\
                            <button class="delete">\n\
                            </button>' + msg + '\n\
                            </span>\n\
                        </div>';
                $('#err').html(html);

            }
        }
    });


    $.ajax({dataType: "JSON",
    type: "GET", url: "./src/ajax/cadeauprogression.php",
    success: function (response) {
        code = response.code;
        msg = response.message;
        if(code>0){
            compte = JSON.parse(response.value);
            
        }
    },
    error: function (response) {
        code = response.code;
        msg = response.message;
    },
    complete: function () {
        if (code > 0 && compte!=undefined)
        {
            $('#rest_gift').html(compte[0].nbCadeau - compte[0].nbCadeauGagner);
            $('#progress_gift')
                    .val(compte[0].nbCadeauGagner)
                    .attr('max', compte[0].nbCadeau);
        } else
        {

            
        }
    }
});


    $("body").on('click', '#is-the-one', (function (e) {
        console.log("jouer");
        var code = 0;
        var msg = 'No response';
        var lot = {};


        event.preventDefault();  // Empêcher le rechargement de la page.
        setTimeout(function () {
            $.ajax({dataType: "JSON",
                type: "POST", url: "./src/ajax/loterie.php",
                success: function (response) {
                    code = response.code;
                    msg = response.message;
                    if (code > 0) {
                        lot = JSON.parse(response.value);
                    }
                },
                error: function (response) {
                    code = response.code;
                    msg = response.message;
                },
                complete: function () {
//                $('#res_jouer').html(connection);
                    if (code > 0)
                    {
                        if (lot!=undefined && lot.estGagne===true)
                        {
                            $('#present_gif').attr("src", "src/public/img/present-gain.gif");
                            html = '<div class="notification is-info">\n\
                            ' + lot.libGain + '\n\
                            </span>\n\
                            </div>';
                             $('#res_jouer').html(html);
                            
                        }
                        else{
                            $('#present_gif').attr("src", "src/public/img/present-perte.gif");
                            html = '<div class="notification is-danger">\n\
                            ' + lot.libGain +'\n\
                            </span>\n\
                            </div>';
                             $('#res_jouer').html(html);
                        }

                    } else
                    {
                        $('#present_gif').attr("src", "src/public/img/present-perte.gif");
                        html = '<div class="notification is-danger">\n\
                            ' + msg + '\n\
                            </span>\n\
                        </div>';
                        $('#err_jouer').html(html);
                    }
                }
            })
        }, 4000);
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    }));

});
