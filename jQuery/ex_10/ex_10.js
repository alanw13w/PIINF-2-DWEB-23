$('td').each(function (index, element) {


        $('img').mouseenter(function () {
            var nom_alt = $(this).attr('alt');
            $(this).css('height', '250px');
            $('h1').html(nom_alt);
        });
        $('img').mouseleave(function () {
            $(this).css('height', '200px');
            $('h1').html(' ');
        });

});
