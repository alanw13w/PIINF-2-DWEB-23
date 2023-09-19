<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WIEDMER</title>
</head>
<body>
<?php
require_once("data.inc.php");
echo "<h1>Mes options</h1>";


foreach ($_POST AS $info => $value){
    $test = strtolower($info);
    echo $tab_options[$test];
    echo "<br>";
}


if(count($_POST) - 1 <= 0){
    echo "Aucune option sélectionée";
}
else{
    echo "Nombre d'options sélectionnées : ".count($_POST) - 1;
}

?>
</body>
</html>