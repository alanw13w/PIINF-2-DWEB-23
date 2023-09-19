$(function (){
    alert('Formatage');
    $('td').addClass('size');
    alert('Inversion des cellules');

    $('.rouge').css('color', 'green').css('background', 'white');
    $('.vert').css('color', 'red').css('background', 'white');

    alert('Ré inversion des cellules');

    $('.rouge').css('color', 'red').css('background', 'white');
    $('.vert').css('color', 'green').css('background', 'white');


    alert('Suppression des classes "couleur"');

    $('td').removeClass("rouge").removeClass("vert");
});