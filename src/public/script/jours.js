$(document).ready(function (e) {



    console.log("jours");
    var code = 0;
    var msg = 'No response';
    var connection = {};


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




    $("body").on('click', '#is-the-one', (function (e) {
        console.log("jouer");
        var code = 0;
        var msg = 'No response';
        var connection = {};


        event.preventDefault();  // Empêcher le rechargement de la page.
        setTimeout(function () {
            $.ajax({dataType: "JSON",
                type: "POST", url: "./src/ajax/loterie.php",
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
//                $('#res_jouer').html(connection);
                    if (code > 0)
                    {
                        html = '<div class="notification is-info">\n\
                            ' + connection + '\n\
                            </span>\n\
                        </div>';
                        $('#res_jouer').html(html);
                    } else
                    {
                        html = '<div class="notification is-danger">\n\
                            ' + msg + '\n\
                            </span>\n\
                        </div>';
                        $('#err_jouer').html(html);
                    }
                }
            })
        }, 2000);
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();

    }));

});