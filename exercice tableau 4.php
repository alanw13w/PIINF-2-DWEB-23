<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        tr{
            text-align: left;
        }
    </style>
</head>
<body>
<?php
$tab = array("nom" => "Alan", "prenom" => "Wiedmer","adresse" => "Epines 6","npa" => "2746", "ville" => "Crémines","email" => "alan.wiedmer@ceff.ch");

 echo "<table>";
echo "<th> Clé </th>";
echo "<th> Valeur </th>";
foreach ($tab AS $key => $val){
    echo "<tr>";
    echo "<th>".$key."</th>";
    echo "<th>".$val."</th>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
