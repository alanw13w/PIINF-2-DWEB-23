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

//invocations du tableau aeroports et catégories
require_once("aeroports.inc.php");
require_once ("category.inc.php");

//bloc d'instruction pour voir si la dimentions 'vols' existe
if(array_key_exists('vols', $_SESSION)){
    echo "<h2>Réservez vol retour</h2>";
}
else {
    echo "<h2>Réservez votre vol allé</h2>";
}




//création du formulaire
echo "<form action='swissresult.php' method ='post'>";
//bloc d'instruction pour l'allé/retour
if(array_key_exists('vols', $_SESSION))
{
    // importation du tableau en haut dans le champ select
    echo "De" . "<select name='decolage'>";
    foreach ($aeroports as $key => $dest) {
        echo "<option value=" . $key . ">" . $dest . "</option>";
    }
    //faire une autoselection de notre des anciennes arrivées/décolages
    echo "<option selected>" . $aeroports[$_SESSION['vols'][0]['arrivé']] . "</option>";
    echo "</select>";


    echo "À" . "<select class='À' name='arrivé'>";
    foreach ($aeroports as $key => $dest) {
        echo "<option value=\"" . $key . "\">" . $dest . "</option>";
    }
    echo "<option selected>" . $aeroports[$_SESSION['vols'][0]['decolage']] . "</option>";
    echo "</select>" . "<br>";
}



else {
    //création d'une constante par défaut (Genève)Cours inter-entreprise
    define("pardefaut", "GVA");
    // importation du tableau en haut dans le champ select
    echo "De" . "<select name='decolage'>";
    foreach ($aeroports as $key => $dest) {
        echo "<option value=" . $key . ">" . $dest . "</option>";
    }
    //faire une autoselection de notre constante Genève
    echo "<option selected>" . pardefaut . "</option>";
    echo "</select>";


    echo "À" . "<select class='À' name='arrivé'>";
    foreach ($aeroports as $key => $dest) {
        echo "<option value=\"" . $key . "\">" . $dest . "</option>";
    }
    echo "</select>" . "<br>";
}




//date d'aujourd'hui
$date = date("Y-m-d");
echo "Date "."<input type='date' name='date_depart' value=$date><br><br>";




//bloc d'instruction pour reprendre le même nombre de personnes ou les mettre à zero
if(array_key_exists('vols', $_SESSION))
{
    echo $category['adultes']."<input type='number' name='Adultes' value=".$_SESSION['vols'][0]['Adultes']." min='1' max='4'>"."<br>";
    echo $category['enfants']."<input type='number' name='Enfants' value=".$_SESSION['vols'][0]['Enfants']." min='0' max='4'>"."<br>";
    echo $category['bebes']."<input class='bebe' type='number' name='Bébés' value=".$_SESSION['vols'][0]['Bébés']." min='0' max='4'>"."<br><br>";
}



else{
    echo $category['adultes']."<input type='number' name='Adultes' value='1' min='1' max='4'>"."<br>";
    echo $category['enfants']."<input type='number' name='Enfants' value='0' min='0' max='4'>"."<br>";
    echo $category['bebes']."<input class='bebe' type='number' name='Bébés' value='0' min='0' max='4'>"."<br><br>";
}



//la checkbox
echo "<input type='checkbox' name='reserver_siège' value='1'>"."Réserver votre siège ?"."<br>"."<br>";

//le bouton submit
echo "<input type='submit' name='Recherche' value='Rechercher votre vol' class='center'>";

echo "</form>";
?>
</body>
</html>