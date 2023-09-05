<!DOCTYPE html>
<html lang="fr">
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

<?php
//invocations du tableau aeroports
require_once("aeroports.inc.php");
require_once ("category.inc.php");



echo "<h3>Informations concernant votre vol au départ de ".$aeroports[$_POST['decolage']]." à ".$aeroports[$_POST['arrivé']]."</h3>";
$_SESSION['vols'][] = $_POST;

echo "Départ : ".$aeroports[$_SESSION['vols'][0]['decolage']]." (".$_SESSION['vols'][0]['decolage'].")"."<br>";
echo "Arrivé : ".$aeroports[$_SESSION['vols'][0]['arrivé']]." (".$_SESSION['vols'][0]['arrivé'].")"."<br>";
echo "Date de départ : ".$_SESSION['vols'][0]['date_depart']."<br>";
echo "Passagers : ".$_SESSION['vols'][0]['Adultes']." Adulte(s), ".$_SESSION['vols'][0]['Enfants']." Enfant(s), ".$_SESSION['vols'][0]['Bébés']." Bébé(s)"."<br>";


echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<br>";
echo "<a href='retour.php'>Réserver un vol retour</a>";
?>
</body>
</html>
