$(document).ready(function() {
    var img = $('.img-thumbnail'),
        large = $('#large');
    //lorsqu'on clique sur l'image sa change l'image principal 
    $(img).each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            var src = $(this).attr('src') //recupere l'image et stocker dans src
            $(large).attr('src', src); //modifie l'image en grand format lorqu'on selectionne une image
            $(large).parent().attr('href', src); //modifie l'image aggrandi
        });

    });

});