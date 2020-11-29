$(document).ready(function (e) {


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

    var code = 0;
    var msg = 'No response';
    var gagants = [];
   
    $.ajax({dataType: "JSON",
        type: "GET", url: "./src/ajax/gagant.php",
        success: function (response) {
            code = response.code;
            msg = response.message;
            if (code > 0){
                gagants = response.value;
                // gagants = JSON.parse(response.value);
            }
        },
        error: function (response) {
            code = response.code;
            msg = response.message;
        },
        complete: function () {
            if (code > 0)
            {
                GenerateDiv(gagants, 'top');
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
