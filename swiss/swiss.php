<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        img.center{
            display: block;
            margin-left: 100px;
            width: auto;
        }
        input.center{
            border: lightgray 2px solid;
            margin-left: 200px;
            display:block;
        }

        h2{
            margin-left: 50px;
        }
        select{
            margin-left: 35px;
            margin-right: 60px;
        }
        .bebe{
            margin-left: 10px;
        }
        .À{
            margin-left:53px;
        }
    </style>
</head>
<body>
<?php
echo "<img src='logo-swiss.png' alt='logo swiss air' class='center'>";
echo "<h2>Réservez vol aller</h2>";
//echo "<h2>Réservez votre vol</h2>";


//invocations du tableau aeroports et catégories
require_once("aeroports.inc.php");
require_once ("category.inc.php");


echo "<form action='swissresult.php' method ='post'>";

//création d'une constante par défaut (Genève)Cours inter-entreprise
define("pardefaut", "GVA");

// importation du tableau en haut dans le champ select
echo "De"."<select name='decolage'>";
foreach($aeroports AS $key => $dest){
    echo "<option value=\"".$key."\">".$dest."</option>";
}

//faire une autoselection de notre constante Genève
echo "<option selected>".pardefaut."</option>";
echo "</select>";

echo "À"."<select class='À' name='arrivé'>";
foreach($aeroports AS $key => $dest){
    echo "<option value=\"".$key."\">".$dest."</option>";
}
echo "</select>"."<br>";


$date = date("d.m.Y");
$demain = date("d") + 1  .".".date("m").".".date("Y");
echo "Vol aller"."<input type='date' name='date_depart' value=$date><br><br>";
//echo "Vol retour"."<input type='text' name='date_retour' value=$demain>"."<br>"."<br>";


echo $category['adultes']."<input type='number' name='Adultes' value='1' min='1' max='4'>"."<br>";
echo $category['enfants']."<input type='number' name='Enfants' value='0' min='0' max='4'>"."<br>";
echo $category['bebes']."<input class='bebe' type='number' name='Bébés' value='0' min='0' max='4'>"."<br><br>";


echo "<input type='checkbox' name='reserver_siège' value='1'>"."Réserver votre siège ?"."<br>"."<br>";


echo "<input type='submit' name='Recherche' value='Rechercher votre vol' class='center'>";

echo "</form>";
?>
</body>
</html>