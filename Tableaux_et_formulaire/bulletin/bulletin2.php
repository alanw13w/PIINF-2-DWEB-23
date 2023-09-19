<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        body{
            font-family: "Arial";
        }
        td, th, table {
            border: 1px solid black;
        }
        td, th{
            width:30px;
        }
        .tresBon{
            background-color: lightgreen;
        }
        .bon{
            background-color: greenyellow;
        }
        .pasBon{
            background-color: red;
        }
        .invalide{
            background-color: orange;
        }
        tr{
            height: 25px;
        }
    </style>
</head>
<body>
<?php
include_once("tableau2.inc.php");
echo "<pre>";
echo "<h1>Calculateur de la moyenne CFC</h1>";


echo "<table>";
echo "<tr>";
echo "<td>échelle de mesure</td><td class='pasBon'>insuffisant</td><td class='bon'>suffisant</td><td class='tresBon'>largement suffisant</td>";
echo "</tr>";
echo "</table>";


//création de la table où nous allons insérer la descripton, la date, la note du module
echo "<table>";
foreach ($tab_notes AS $abr_domaine => $domaine){

    $nbnotes= 0;
    $sommenotes = 0;

    echo "<tr>";
    echo "<th class='center' colspan='4'>".$domaine ['desc']."</th><br>";
    echo "</tr>";

    foreach ($domaine['modules'] AS $key => $module){
        echo "<tr>";

        echo "<td>".$key."</td>";
        echo "<td>".$module['desc']."</td>";
        echo "<td>".$module['date']."</td>";
        //affichage des couleurs dans les notes
        if($module['note'] > 6){echo "<td class='invalide'>note invalide</td>";}
        else if($module['note'] > 4.5){echo "<td class='tresBon'>".$module['note']."</td>";}
        elseif ($module['note'] <= 4.5 && $module['note'] >= 4){echo "<td class='bon'>".$module['note']."</td>";}
        else{echo "<td class='pasBon'>".$module['note']."</td>";}

        echo "</tr>";

        $nbnotes++;
        $sommenotes += $module['note'];

    }
    //calcul de la moyenne des modules
    $moyenne_ichcie = $sommenotes/$nbnotes;
    $tab_notes[$abr_domaine]['moyenne'] = $moyenne_ichcie;


}
echo "</table><br>";


//création de la table avec les moyenne ci, cie
echo "<table>";
foreach ($tab_notes AS $domaine){
    echo "<tr>";

    echo "<td>".$domaine['desc']."</td>";
    echo "<td>".$domaine['ponderation']."%"."</td>";
    if (round($domaine['moyenne']) > 4.5){echo "<td class='tresBon'>".round($domaine['moyenne'])."</td>";}
    elseif (round($domaine['moyenne']) <= 4.5 && round($domaine['moyenne']) >= 4){echo "<td class='bon'>".round($domaine['moyenne'])."</td>";}
    else{echo "<td class='pasBon'>".round($domaine['moyenne'])."</td>";}

    echo "</tr>";
}


//calcul de la moyenne avec la pondération et insertion dans dans la table
$add_moy = 0;
foreach ($tab_notes AS $domaine) {
    $add_moy += $domaine['moyenne'] * $domaine['ponderation'];
}
$resultat = round($add_moy / 100, 1);

//insertion dans la table
echo "<tr>";

echo "<td><b>Moyenne</b></td>";
if($resultat > 4.5){echo "<th class='tresBon'>".$resultat."</th>";}
elseif ($resultat <= 4.5 && $resultat >= 4){echo "<th class='bon'>".$resultat."</th>";}
else{echo "<th class='pasBon'>".$resultat."</th>";}

echo "</tr>";
echo "</table><br>";


//création de la table tpi
$tpi = 4.5;
echo "<table>";
echo "<tr><th class='center' colspan='4'>"."TPI"."</th></tr>";
echo "<tr>";

echo "<td><b>Moyenne de tpi</b></td>";
if($tpi > 4.5){echo "<th class='tresBon'>".$tpi."</th>";}
elseif ($tpi <= 4.5 && $tpi >= 4){echo "<th class='bon'>".$tpi."</th>";}
else{echo "<th class='pasBon'>".$tpi."</th>";}

echo "</tr>";
echo "</table><br>";


//création de la moyenne global et insertion dans une table
$moyenne_globale = ($tpi + $resultat)/2;
echo "<table>";
echo "<tr>";
echo "<th class='center' colspan='4'>"."Moyenne Globale"."</th>";
echo "<th>"."</th>"."<th>"."</th>"."<th>"."</th>";
echo "<th>".round($moyenne_globale, 1)."</th>";

//bloc d'instruction avec if pour savoir si l'étudiant à réussit son CFC
if($moyenne_globale > 4.5){echo "<th class='tresBon'>Réussit largement, bravo</th>";}
elseif ($moyenne_globale <= 4.5 && $moyenne_globale >= 3.5){echo "<th class='bon'>Réussit</th>";}
else{echo "<th class='pasBon'>Pas réussit</th>";}

echo "</tr>";
echo "</table><br>";
echo "</pre>";
?>
</body>
</html>