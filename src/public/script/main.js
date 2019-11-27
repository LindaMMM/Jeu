
function GenerateDiv(json, type = 'jours') {
    var obj = jQuery.parseJSON(json);
    var k = 0;
    if (type == 'jours') {

        var first = '<div class="row columns">';
        var last = '</div>';
        var html = first;

        var choosen = false;
        for (var k in obj) {

            var click = '';
            var id = '';
            var back = '';
            var fond_url = '';
            var perso_url = '';
            var title = '';
            var subtitle = '';
            var perso = '';
            var text = '';
            var div = '';
            if (!choosen && obj[k] != 'E') {
                click = ' is-click';
                id = 'is-the-one';
                fond_url = 'src/public/img/fond-curr.png';
                back = ' has-background-warning';
                perso_url = 'src/public/img/breiznoel.png';
                title = 'On t\'attend !';
                subtitle = 'ohoho ! Ouvre !';
                perso = 'Le père breizh noel';
                text = 'Tu as peut être gagné le 4x4 de Roger ou... une clé kibolt.<br/>Ouvre vite pour savoir !';
                $('#date').html(k + '/12/2019');
                choosen = true;
            } else if (choosen && obj[k] != 'E') {
                console.log('second');
                fond_url = 'src/public/img/fond-fut.png';
                perso_url = 'src/public/img/lutin.png';
                title = 'Tu attends !';
                subtitle = 'Déso... déso ';
                perso = 'Le lutin du malheur';
                text = 'Bon... écoute. On n\'est pas prêt...<br/>T\'as ton éléphant Jumbo pour t\'aider à décompresser et patienter ?';
            } else {
                fond_url = 'src/public/img/fond-end.png';

            }

            divsCard = new DivsCards();
            divsCard.jours(click, id, back, fond_url, perso_url, title, subtitle, perso, text, k);

            if (choosen) {
                div = divsCard.getComplet();
            } else {
                div = divsCard.getPartial();
            }



            html += div;



            if (k % 3 == 0) {
                html += last;
                html += first;
            }

        }
        html += last;
        $('#res_jours').html(html);

    }
    if (type == 'top') {
        var first = '<div class="pricing-table is-horizontal ">';
        var last = '</div>';
        var html = first;
        for (var k in obj) {
            divsCard = new DivsCards();
            divsCard.top(obj[k].gagant, obj[k].libelle, obj[k].dateGain);
            html += divsCard.getTop();
        }
        html += last;
        $('#top').html(html);
}

}


class DivsCards {

    constructor() {
        this.click = '';
        this.id = '';
        this.back = '';
        this.fond_url = '';
        this.perso_url = '';
        this.title = '';
        this.subtitle = '';
        this.perso = '';
        this.text = '';
        this.k = '';
        this.divComplet = '';
        this.divPartial = '';
        this.name = '';
        this.libelle = '';
        this.date = '';
        this.divTop = '';
    }

    jours(click = '', id = '', back = '', fond_url = '', perso_url = '', title = '', subtitle = '', perso = '', text = '', k = '') {
        this.click = click;
        this.id = id;
        this.back = back;
        this.fond_url = fond_url;
        this.perso_url = perso_url;
        this.title = title;
        this.subtitle = subtitle;
        this.perso = perso;
        this.text = text;
        this.k = k;
        this.divComplet = '';
        this.divPartial = '';
        this.generateJours();
    }

    top(name = '', libelle = '', date = '') {
        this.name = name;
        this.libelle = libelle;
        this.dateGain = this.getDate(date);
        this.generateTop();
    }
    
    getDate(date){
        var dates = date.split('-');
        return dates[2]+'/'+dates[1]+'/'+dates[0];
        
    }

    generateTop() {
        var div_picing = '<div class="pricing-plan  is-active">\n\
            <div class="plan-header">' + this.name + '</div>\n\
                <div class="plan-items">\n\
                    <div class="plan-item"></div>\n\
                    <div class="plan-item" style="font-size:15px"><i class="fas fa-grin-beam" ></i>&nbsp;has ganado :</div>\n\
                    <div class="plan-item"></div>\n\
                    <div class="plan-item"></div>\n\
                    <div class="plan-item" style="font-size:15px">' + this.libelle + '</div>\n\
                    <div class="plan-item"></div>\n\
                </div>\n\
                <div class="plan-footer">\n\
                    <span>\n\
                        <div class="plan-price"><span class="tag is-warning has-text-black"><i class="fas fa-calendar-minus" style="font-size: 48px;"></i>&nbsp;Date du gain : </span></div>\n\
                        <button class="button is-fullwidth has-background-grey-light" disabled="disabled">' + this.dateGain + '</button>\n\
                </div>\n\
            </div>';
        this.divTop = div_picing;
    }

    generateJours() {

        var div_head_start = '<div class="column is-two-third">';
        var div_card_start = '<div class="card large ' + this.click + '" id="' + this.id + '">';
        var div_card_image_start = '<div class="card-image">';
        var div_card_day = '<div class="title day-number">\n\
                            JOUR<br/>\n\
                            <span class="day_detail"> ' + this.k + '</span>\n\
                          </div>';
        var div_card_figure = '<figure class="image"><img src="' + this.fond_url + '" alt="' + this.title + '"></figure>';
        var div_card_image_end = '</div>';
        var div_card_content_start = '<div class="card-content ' + this.back + '">';
        var div_card_content_media_start = '<div class="media">';
        var div_card_content_media_img = '<div class="media-left"><figure class="image portrait"><img src="' + this.perso_url + '" alt="' + this.perso + '"></figure></div>';
        var div_card_content_media_content = '<div class="media-content">\n\
                                    <p class="title is-4 no-padding">' + this.title + '</p>\n\
                                    <p class="subtitle is-6">' + this.perso + '</p></div></div>\n\
                                    <div class="content">' + this.text + '</div>\n\
                                </div>';
        var div_card_content_media_end = '';
        var div_card_content_end = '';
        var div_card_end = '</div>';
        var div_head_end = '</div>';

        this.divComplet =
                div_head_start +
                div_card_start +
                div_card_image_start +
                div_card_day +
                div_card_figure +
                div_card_image_end +
                div_card_content_start +
                div_card_content_media_start +
                div_card_content_media_img +
                div_card_content_media_content +
                div_card_content_media_end +
                div_card_content_end +
                div_card_end +
                div_head_end;
        this.divPartial = div_head_start +
                div_card_start +
                div_card_image_start +
                div_card_day +
                div_card_figure +
                div_card_image_end +
                div_card_end +
                div_head_end;
    }

    getTop() {
        return this.divTop;
    }

    getComplet() {
        return this.divComplet;
    }

    getPartial() {
        return this.divPartial;
    }

}

