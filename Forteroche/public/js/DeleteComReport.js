// supprimer un commentaire signalé via JS 
$('.supprimerComReport').click(function(event){
    event.preventDefault();
    var button = $(this);

    if(!confirm('Etes vous sur de vouloir supprimer le commentaire')){
        return;
    }

    $.ajax({
        url: '/Forteroche/admin/deleteComReport',
        type: 'POST',
        data: {
            id: button.data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        button.closest('.affichageComModerate').remove();
        alert('Vous avez supprimé le commmentaire !');
    });
});