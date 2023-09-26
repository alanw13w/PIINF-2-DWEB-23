$(function (){
    //ajustements css
    $('td')/*.css('background-color', 'grey')*/.css('height', "256px").css("width", "256px");
    $('table').css('margin', 'auto');

    //lorsqu'on clique sur voiture ou crois/rond, l'icone change dans les case
    $('.bouton1').click(function(){
        $('.symbole_0').css('background-image', 'url("./image/00.png")');
        $('.symbole_1').css('background-image', 'url("./image/01.png")');
    });
    $('.bouton2').click(function(){
        $('.symbole_0').css('background-image', 'url("./image/porsche.png")');
        $('.symbole_1').css('background-image', 'url("./image/lambo.png")');
    });


    //initialisation des variables
    var turn = 1;
    var player = 0;
    var winner;
    var $cell;
    var map = ['2','2','2','2','2','2','2','2','2',];
    var points = [0,0]



    //affichage des croix et des rond un à la fois lorsqu'on clique
    $('td').on('click', function (){
        if($(this).hasClass('symbole_0') == false && $(this).hasClass('symbole_1') == false){

            $(this).addClass('symbole_' +player);

            Calcul();

            if (player == 0){
                player = 1;
            }
            else{
                player = 0;
            }

            turn++;
            UiPlayerTurn();
        }

    });

    //fonction calcul qui permet de placer notre croix/rond dans le tableau
    function Calcul(){

        for (let i = 0; i < 9; i++) {

            $cell = $('td:eq('+i+')');

            if($cell.hasClass('symbole_0')){
                map[i] = 0;
            }
            else if($cell.hasClass('symbole_1')){
                map[i] = 1;
            }
            else{
                map[i] = 2;
            }

        }

        //détection du gagnant avec les élément de test
        if(map[0] == player && map[1] == player && map[2]==player){
            Victoire();
        }
        else if(map[3] == player && map[4] == player && map[5]==player){
            Victoire();
        }
        else if(map[6] == player && map[7] == player && map[8]==player){
            Victoire();
        }
        else if(map[0] == player && map[3] == player && map[6]==player){
            Victoire();
        }
        else if(map[1] == player && map[4] == player && map[7]==player){
            Victoire();
        }
        else if(map[2] == player && map[5] == player && map[8]==player){
            Victoire();
        }
        else if(map[0] == player && map[4] == player && map[8]==player){
            Victoire();
        }
        else if(map[2] == player && map[4] == player && map[6]==player){
            Victoire();
        }
        else if (turn >= 9){
            Egalité();
        }


    }

    //affichage du vainqueur
    function Victoire(){
        winner = player + 1;
        alert('le joueur '+winner+' a gagné');
        Reset();
    }

    //affichage de si il y a une égalité
    function Egalité(){
        alert('Egalité');
        Reset();
    }

    //remise à 0
    function Reset(){
        $('td').removeClass('symbole_0').removeClass('symbole_1');
        map.length = 0;
        turn = 0;
    }



});

