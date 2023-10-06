<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title> HariShop </title>
        <style>
            #panier{
                position:absolute;
                top:20px;
                right:20px;
                border:3px solid gray;
            }
            form{
                display:inline;
            }
        </style>
    </head>
    <body>
        <?php
        require_once("articles.php");

        if(!isset($_SESSION['panier'])){
            foreach ($articles AS $key => $value){
                $_SESSION['panier'][$key] = 0;
            }
        }


        if(isset($_POST['plus'])){
            //print_r($_POST);
            $_SESSION['panier'][$_POST['id']]++;
        }
        elseif (isset($_POST['moins'])){
            if($_SESSION['panier'][$_POST['id']] > 0){
                $_SESSION['panier'][$_POST['id']]--;
            }
        }

        echo "<div id=\"panier\">";

        echo "<h2>Votre panier contient : </h2>";



        echo "<table";
        $prix_tot = 0;
        foreach ($articles AS $key => $article){
            $nb = $_SESSION['panier'][$key];
            if($nb > 0) {
                $prix = $nb * $article['prix'];
                echo "<tr>";
                echo "<td>" . $nb . "</td>";
                echo "<td>" . $article['nom'] . "</td>";
                echo "<td>(" . $article['prix'] . ")</td>";
                echo "<td> ==> </td>";
                echo "<td>" . $prix . "</td>";
                echo "</tr><br>";
                $prix_tot += $prix;
            }
        }
        echo "</table>";


        echo "Total : CHF ".$prix_tot;

        echo "</div>";


        echo "\n<table border=\"2\">";

        foreach($articles AS $id => $article) {
            echo "\n\t<tr>";

            echo "\n\t\t<td rowspan=\"3\">\n\t\t\t<img src=\"./img/".$id.".jpg\" height=\"100px\">\n\t\t</td>";
            echo "\n\t\t<td>".$article['nom']."</td>";
            echo "\n\t</tr>";
            echo "\n\t<tr>";
            echo "\n\t\t<td>CHF ".$article['prix']."</td>";
            echo "\n\t</tr>";
            echo "\n\t<tr>";
            echo "\n\t\t<td>\n\t\t\t<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">";
            echo "\n\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"".$id."\"/>";
            echo "\n\t\t\t\t<input type=\"submit\" name=\"plus\" value=\"+\"/>";
            echo "\n\t\t\t</form>";
            echo "\n\t\t\t<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">";
            echo "\n\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"".$id."\"/>";
            echo "\n\t\t\t\t<input type=\"submit\" name=\"moins\" value=\"-\"/>";
            echo "\n\t\t\t</form>\n\t\t</td>";

            echo "\n\t</tr>";
        }

        //session_destroy();
        echo "</table>";
        ?>


    </body>
</html>
