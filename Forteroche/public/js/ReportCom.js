// signaler un commentaire par JS
$('.boutonSignaler').click(function(event){
    event.preventDefault();
    var button = $(this);

    if(!confirm('Etes vous sur de vouloir signaler ce commentaire')){
        return;
    }

    $.ajax({
        url: '/Forteroche/billet/signaler',
        type: 'POST',
        data: {
            id: button.data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        alert('Vous avez signaler ce commentaire !');
    });
});
