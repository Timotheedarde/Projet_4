// ajouter un commentaire par JS (permet d'éviter de recharger la page inutilement)
$('.commentaireForm').submit(function(event){
    event.preventDefault();
    $.ajax({
        url: '/Forteroche/billet/commenter',
        type: 'POST',
        data: {
            id: $('#articleId').val(), // id du chapitre
            auteur: $('#auteur').val(),
            contenu: $('#txtCommentaire').val(),
        }
    }).done(function(data) {
        // fonction appelée après la requète ajax
            $('.comment-block').append(data);
            $('.commentaireForm')[1].reset();
    });
    return false;
});
