$(function (){

    var timeo = 0;


    if(timeo === 0){
        $('td').click(function(){
            $(this).addClass("croix");
            $(this).addClass("symbole_1");
            timeo ++;
        });

    }

    else if(timeo === 1){
        $('td').click(function() {
            $(this).addClass("rond");
            $(this).addClass("symbole_0");
        });
        timeo = 0;
    }


});

