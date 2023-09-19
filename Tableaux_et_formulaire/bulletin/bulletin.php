<!DOCTYPE html>
<html lang="fr">
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
         body{
            font-family: "Garamond";
        }
        h3{
            margin-left: 50px;
        }
        .table1{
            margin-top: -140px;
        }
        .table2{
            margin-top: -70px;
        }
        .table3{
            margin-top: -40px;
        }
        .notes1{
            padding-left: 141px;
        }
         .notes2{
             padding-left: 200px;
         }
         .notes3{
             padding-left: 50px;
         }

    </style>
</head>
<body>
<h2>Bulletin ICH</h2>


<?php
require_once("tableau.inc.php");
// création des 3 moyennes compétences informatique
$moyich = 0;
$moycie = 0;

$nbnoteich = count($ICH) - 1;
$nbnotecie = count($CIE) - 1;

//afficher les modules en parcourant les deux tableaux et création du tableau pour les mettre en ligne
echo "<h3>Modules de compétences en informatique</h3>";
echo "<table class='table1'>";
for ($i = 0; $i <= $nbnoteich ; $i++) {
    foreach ($ICH[$i] as $def => $note) {
        echo "<tr>";
            echo "<td>".$def."</td>";
            echo "<td class='notes1'>".$note."</td>"."<br>";
            $moyich += $note;
        echo "</tr>";
    }
}
echo "</table>";

echo "<h3>Cours inter-entreprise</h3>";
echo "<table class='table2'>";
for ($i = 0; $i <= $nbnotecie; $i++) {
    foreach ($CIE[$i] as $def => $note) {
        echo "<tr>";
            echo "<td>".$def."</td>";
            echo "<td class='notes2'>".$note."</td>"."<br>";
            $moycie += $note;
        echo "</tr>";
    }
}
echo "</table>";


echo "<h3>Compétences en informatique</h3>";


//calcul des différentes moyennes
$moyich = $moyich / count($ICH);
$moycie =  $moycie / count($CIE);
$moyinfo = ($moycie + $moyich) / 2;


//affichage des différentes moyennes dans un tableau
echo "<table class='table3'>";
echo "<tr>";
echo "<td>Modules de compétences en infotrmatique</td>";
echo "<td class='notes3'>".number_format($moyich, 2)."</td>";
echo "</tr><br><tr>";
echo "<td>Cours interentreprises</td>";
echo "<td class='notes3'>".number_format($moycie, 2)."</td>";
echo "</tr><br><tr>";
echo "<td>Moyenne</td>";
echo "<td class='notes3'>".number_format($moyinfo, 2)."</td>";
echo "</tr>";
echo "</table>";

// note de TPI
echo "<h3>TPI</h3>";
$moytpi = 4.8;
echo "moyenne = ".$moytpi;


// calcul de la note globale
echo "<h3>Note globale</h3>";
$moyenne = ($moytpi +$moyinfo) / 2;
echo "Moyenne = ".number_format($moyenne, 2);
?>
</body>
</html>