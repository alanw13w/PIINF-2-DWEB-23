<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        body{
            font-family: "Trebuchet MS";
        }
        h3{
            margin-left: 50px;
        }

    </style>
</head>
<body>
<h2>Bulletin ICH</h2>


<?php
require_once("tableau.inc.php");


echo "<h3>Modules de compétences en informatique</h3>";
foreach ($tab["ICH"][117] AS $description => $note){
    echo $description." ".$note."<br>";
}



echo "<h3>Modules de compétences en informatique</h3>";
foreach ($tab["CIE"][293] AS $description => $note){
    echo $description." ".$note."<br>";
}

echo "<h3>Compétences en informatique</h3>";

?>
</body>
</html>
