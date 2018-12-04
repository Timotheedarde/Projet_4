// ajouter un commentaire par JS (permet d'éviter de recharger la page inutilement)
$('.caseCommentaireVueBillet').submit(function(event){
    event.preventDefault();
    $.ajax({
        url: '/Forteroche/billet/signaler',
        type: 'POST',
        data: {

        }
    }).done(function(data) {
        // fonction appelée après la requète ajax

    });
    return false;
});
