<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        td, table, th {
            border: 1px solid lightgray;
        }
        td, th{
            width :100px;
        }
    </style>
</head>
<body>
<?php

echo "<table>";
echo "<th>Clefs</th>";
echo "<th>Valeurs</th>";
foreach ($_POST AS $key => $val){
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$val</td>";
    echo "</tr>";
}
echo "</table>";

echo "<pre>";
    print_r($_POST);
"</pre>";


 echo "<table>";
echo "<th>Clefs</th>";
echo "<th>Valeurs</th>";
foreach ($_GET AS $key => $val){
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$val</td>";
    echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($_GET);
"</pre>";
 ?>
</body>
</html>