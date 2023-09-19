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


echo "<h2>Choix des options</h2>";
echo "<form action='result.php' method ='post'>";


foreach ($tab_options AS $question){
    echo $question." :";
    echo "<input type='checkbox' name=".$question." value='1'>";
    echo "<br>";
}


echo "<input type='submit' name='send' value='Envoyer'>";


echo "</form>";
?>
</body>
</html>