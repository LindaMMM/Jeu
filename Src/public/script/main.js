
function GenerateDiv(json, type = 'jours') {
    obj = jQuery.parseJSON(json);
    first = '<div class="row columns">';
    last = '</div>';
    html = first;
    old = true;
    for (var k in obj) {

        if (old && obj[k] != 'N') {
            old = false;;
        }
        
html += '<div class="column is-two-third">\n\
            <div class="card large' ;if (obj[k] != 'N') {
            html += ' is-click';
        }
        html += '"';
        if (obj[k] != 'N') {
            html += 'id= "is-the-one"';
        }
        html += '><div class="card-image">';
        if(!old){
		html += '<div class="title day-number">\n\
            JOUR<br/>';
        html += '<span class="day_detail"> ' + k +'</span>';
        html += '</div>';
		}
        html +=    '<figure class="image">';
		if(old){
			html += '<img src="Src/public/img/fond-end.png" alt="Image">';
		}else if(obj[k] != 'N'){
			html += '<img src="Src/public/img/fond-curr.png" alt="Image">';
		}else{ html += '<img src="Src/public/img/fond-fut.png" alt="Image">'; }
        html += '</figure>\n\
            </div>';
        if(!old){
        html += '<div class="card-content';
        if (obj[k] != 'N') {
            $('#date').html(k+'/12/2019');
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
        html += '</div>';
        }
        html += '</div></div>';
        
        
        
        if (k % 3 == 0) {
            html += last;
            html += first;
        }
    }
    html += last;
    $('#res_jours').html(html);

}