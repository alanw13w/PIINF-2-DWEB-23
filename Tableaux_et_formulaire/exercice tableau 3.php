<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
$joursem = date("l");
$date = date("d.m.Y");

for ($i = 1; $i <= 6; $i++) {
    echo $date."<br>";
    $date = $date + 1;
}


?>
</body>
</html>