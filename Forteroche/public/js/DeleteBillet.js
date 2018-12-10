// supprimer un billet par JS 
$('.supprimerBillet').click(function(event){
    event.preventDefault();
    $.ajax({
        url: '/Forteroche/admin/deleteBillet',
        type: 'POST',
        data: {
            id: $(this).data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        alert('Vous avez supprimé le chapitre !');
    });
});