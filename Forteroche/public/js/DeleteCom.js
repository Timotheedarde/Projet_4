// supprimer un commentaire par JS 
$('.supprimerCom').click(function(event){
    event.preventDefault();
    $.ajax({
        url: '/Forteroche/admin/deleteCom',
        type: 'POST',
        data: {
            id: $(this).data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        alert('Vous avez supprimé le commmentaire !');
    });
});