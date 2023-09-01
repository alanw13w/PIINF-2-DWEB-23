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



echo "<h3>Informations concernant votre vol au départ de ".$aeroports[$_POST['decolage']]." à ".$aeroports[$_POST['arrivé']]."</h3>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
</body>
</html>
