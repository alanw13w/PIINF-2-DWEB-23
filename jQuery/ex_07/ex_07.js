$(function(){

    $( "img" ).on( "click", function() {
        $( "img" ).fadeOut( 4000 );
    });

    $("img").on( "click", function() {
        $( "img" ).fadeIn( 300 );
    } );

    $('p').tooltip();
    $('img').tooltip();
});
