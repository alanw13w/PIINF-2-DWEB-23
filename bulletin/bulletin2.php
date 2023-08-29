<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
include_once("tableau2.inc.php");

foreach ($tab_notes['ci']['modules'][117] AS $what => $def){
    echo $what." = ".$def."<br>";
}
foreach ($tab_notes['ci']['modules'][431] AS $what => $def){
    echo $what." = ".$def."<br>";
}

?>
</body>
</html>