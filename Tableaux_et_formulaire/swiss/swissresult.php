<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

<?php
//invocations des tableau aeroports et category
require_once("aeroports.inc.php");
require_once ("category.inc.php");


//on met les information du $_POST dans la $_SESSION
$_SESSION['vols'][] = $_POST;

if(array_key_exists(1, $_SESSION['vols'])){
    echo "<h3>Informations concernant votre vol au départ de ".$_SESSION['vols'][1]['decolage']." à ".$_SESSION['vols'][1]['arrivé']."</h3>";

}
else {
    echo "<h3>Informations concernant votre vol au départ de " . $aeroports[$_SESSION['vols'][0]['decolage']] . " à " . $aeroports[$_SESSION['vols'][0]['arrivé']] . "</h3>";
}




//On écris de ou on part, le nombre de personnes etc.
$personnes = ($_SESSION['vols'][0]['Adultes']) + ($_SESSION['vols'][0]['Enfants']) + ($_SESSION['vols'][0]['Bébés']);
echo "Départ : ".$aeroports[$_SESSION['vols'][0]['decolage']]." (".$_SESSION['vols'][0]['decolage'].")"."<br>";
echo "Arrivé : ".$aeroports[$_SESSION['vols'][0]['arrivé']]." (".$_SESSION['vols'][0]['arrivé'].")"."<br>";
echo "Date de départ : ".$_SESSION['vols'][0]['date_depart']."<br>";
echo "Passagers : ".$_SESSION['vols'][0]['Adultes']." Adulte(s), ".$_SESSION['vols'][0]['Enfants']." Enfant(s), ".$_SESSION['vols'][0]['Bébés']." Bébé(s)"."<br>";

echo "<br>";

if(array_key_exists(1, $_SESSION['vols'])){
    echo "Départ :  ".$_SESSION['vols'][1]['decolage']."<br>";
    echo "Arrivé : ".$_SESSION['vols'][1]['arrivé']."<br>";
    echo "Date de départ : ".$_SESSION['vols'][1]['date_depart']."<br>";
    echo "Passagers : ".$_SESSION['vols'][1]['Adultes']." Adulte(s), ".$_SESSION['vols'][1]['Enfants']." Enfant(s), ".$_SESSION['vols'][1]['Bébés']." Bébé(s)"."<br>";
}




//on imprime le tableau $_SESSION
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<br>";



//bloc d'instruction pour savoir si on a fini notre "commande". Si oui on détruit la session
if(array_key_exists(1, $_SESSION['vols'])){
    session_destroy();
    echo "<a href='swiss.php'>Terminer ma commande</a>";
}


else {
    echo "<a href='swiss.php'>Réserver un vol retour</a>";
}
?>
</body>
</html>
