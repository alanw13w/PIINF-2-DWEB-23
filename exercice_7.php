<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        td, table {
            border: 1px solid black;
        }
        td{
            width:30px;
        }

    </style>
</head>
<body>
<?php
echo "<table>";
for($i=1;$i<=12;$i++){
    echo "<tr>";

    for($j=1;$j<=12;$j++){
        echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>"
?>
</body>
</html>