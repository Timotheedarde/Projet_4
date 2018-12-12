// supprimer un billet par JS 
$('.supprimerBillet').click(function(event){
    event.preventDefault();
    var button = $(this);

    if(!confirm('Etes vous sur de vouloir supprimer le chapitre')){
        return;
    }

    $.ajax({
        url: '/Forteroche/admin/deleteBillet',
        type: 'POST',
        data: {
            id: button.data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        button.closest('.affichageBilletAdmin').remove();
        alert('Vous avez supprimé le chapitre !');
    });
});