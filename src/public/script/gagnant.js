$(document).ready(function (e) {


    console.log("gagnant");
    var code = 0;
    var msg = 'No response';
    var connection = {};


    $.ajax({dataType: "JSON",
        type: "GET", url: "./src/ajax/gagant.php",
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
                GenerateDiv(connection, 'top');
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

});
