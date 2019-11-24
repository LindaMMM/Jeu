$(document).ready(function (e) {



    console.log("jours");
    var code = 0;
    var msg = 'No response';
    var connection = {};


    $.ajax({dataType: "JSON",
        type: "GET", url: "./Src/ajax/jours.php",
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




    $("#jouer").on('click', (function (e) {
        console.log("jouer");
        var code = 0;
        var msg = 'No response';
        var connection = {};


        event.preventDefault();  // Empêcher le rechargement de la page.
        $.ajax({dataType: "JSON",
            type: "POST", url: "../../Src/ajax/loterie.php",
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
                $('#res_jouer').html(connection);
                if (code > 0)
                {
                    //ok
                } else
                {

                }
            }
        });
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();

    }));

});