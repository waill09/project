function translateToArabic() {
    // Récupérez le contenu à traduire
    var content = $('#content').text();

    // Langue source : français (fr), langue cible : arabe (ar)
    var sourceLang = 'fr';
    var targetLang = 'ar';

    // Appel à l'API Google Translate
    $.ajax({
        url: 'https://translate.googleapis.com/translate_a/single',
        type: 'GET',
        dataType: 'json',
        contentType: 'application/json',
        data: {
            client: 'gtx',
            sl: sourceLang,
            tl: targetLang,
            dt: 't',
            q: content
        },
        success: function (response) {
            // Récupérez la traduction à partir de la réponse
            var translation = response[0][0][0];

            // Affichez la traduction
            $('#content').text(translation);
        },
        error: function (error) {
            console.error('Erreur de traduction:', error);
        }
    });
}
