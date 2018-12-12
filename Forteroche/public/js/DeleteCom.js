// supprimer un commentaire via JS 
$('.supprimerCom').click(function(event){
    event.preventDefault();
    var button = $(this);

    if(!confirm('Etes vous sur de vouloir supprimer le commentaire')){
        return;
    }

    $.ajax({
        url: '/Forteroche/admin/deleteCom',
        type: 'POST',
        data: {
            id: button.data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        button.closest('.affichageAllCom').remove();
        alert('Vous avez supprimé le commmentaire !');
    });
});