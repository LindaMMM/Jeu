
function GenerateDiv(json, type = 'jours') {
    obj = jQuery.parseJSON(json);
    first = '<div class="row columns">';
    last = '</div>';
    html = first;
    for (var k in obj) {
        console.log(obj[k]);
        html += '<div class="column is-two-third">\n\
            <div class="card large"';
        if (obj[k] != 'N') {
            html += 'id= "is-the-one"';
        }
        html += '>\n\
            <div class="card-image has-text-centered">\n\
            <div class="title is-1 day-number">\n\
            Jour';
        html += '<br/>' + k;
        html += '</div>\n\
            <figure class="image">';
        html += '<img src="Src/public/img/back_day.jpg" alt="Image">';
        html += '</figure>\n\
            </div>';
        html += '<div class="card-content';
        if (obj[k] != 'N') {
            html += ' has-background-warning';
        }
        html += '"><div class="media">\n\
            <div class="media-left"><figure class="image is-96x96">';
        if (obj[k] == 'N') {
            html += '<img src="Src/public/img/elfe.jpg" alt="Image">';
        } else {
            html += '<img src="Src/public/img/pere_noel.jpg" alt="Image">';
        }
        html += '</figure>\n\
            </div>';
        if (obj[k] == 'N') {
            html += '<div class="media-content">\n\
                <p class="title is-4 no-padding">Tu attends !</p>\n\
                <p><span class="title is-6"><a href="http:///#">Déso... déso </a></span></p>\n\
                <p class="subtitle is-6">Le lutin du malheur</p>\n\
                </div></div><div class="content">Bon... écoute. On n\'est pas prêt... Ouais je sais, t\'aimerai mais que veux tu... Avec la crise c\'est chaud mais on a des éléphant Jumbo en consolation\n\
                <div class="background-icon"><span class="icon-facebook"></span></div></div>';
        } else {
            html += '<div class="media-content">\n\
                <p class="title is-4 no-padding">On t\'attend !</p>\n\
                <p><span class="title is-6"><a href="http:///#">ohoho ! Ouvre chenapan</a></span></p>\n\
                <p class="subtitle is-6">Le père breizh noel</p>\n\
                </div></div><div class="content">Tu as peut être gagné le 4x4 de Roger ou... une clé kibolt.\n\
                <div class="background-icon"><span class="icon-facebook"></span></div></div>';
        }
        html += '</div></div></div>';
        if (k % 3 == 0) {
            html += last;
            html += first;
        }
    }
    html += last;
    $('#res_jours').html(html);

}