$(document).ready(function (e) {



    $("#idform").on('submit', (function (e) {
        var code = 0;
        var msg = 'No response';
        login = $('input[name=ssoid]').val();
        pwd = $('input[name=pwd]').val();
        event.preventDefault(); // Empêcher le rechargement de la page.
        $.ajax({dataType: "JSON",
            type: "POST", url: "./Src/ajax/login.php", data: {'ssoid': login, 'pwd': pwd},
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
                    window.location = './index.php?page=accueil';
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
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    }));
});