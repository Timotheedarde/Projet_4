// signaler un commentaire par JS
$('.boutonSignaler').click(function(event){
    event.preventDefault();
    $.ajax({
        url: '/Forteroche/billet/signaler',
        type: 'POST',
        data: {
            id: $(this).data("id")
        }
    }).done(function() {
        // fonction appelée après la requète ajax
        alert('Vous avez signaler ce commentaire !');
    });
});
