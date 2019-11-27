$(document).ready(function (e) {


    console.log("gagnant");
    var code = 0;
    var msg = 'No response';
    var gagants = [];
   
    $.ajax({dataType: "JSON",
        type: "GET", url: "./src/ajax/gagant.php",
        success: function (response) {
            code = response.code;
            msg = response.message;
            if (code > 0){
                gagants = JSON.parse(response.value);
            }
        },
        error: function (response) {
            code = response.code;
            msg = response.message;
        },
        complete: function () {
            if (code > 0)
            {
<<<<<<< HEAD
                var htmlStr = '';
                $.each(gagants, function(k, v){
                    htmlStr += v.libelle + ' ' + v.gagant + ' ' + v.dateGain + '<br />';
               });
               $("#gagant").html(htmlStr);
               /* html = connection;
                $('#gagant').html(html);*/
=======
                GenerateDiv(connection, 'top');
>>>>>>> refs/heads/feature/v1.0-front
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
