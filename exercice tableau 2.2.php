<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$tab = array();
for ($i = 1; $i <=12; $i++){
    $chiffre = $i*7;
    $tab[$i] = ($i*7);
    echo "$i*7 ="."$tab[$i]";
    echo "<br>";
}
?>
</body>
</html>