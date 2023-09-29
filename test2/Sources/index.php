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
   
        echo "<div id=\"panier\">";

        echo "<h2>Votre panier contient : </h2>";
        echo $articles[1]['nom']." ".$articles[1]['prix']." => CHF ".$articles[1]['prix']."<br>";
        echo $articles[2]['nom']." ".$articles[2]['prix']." => CHF ".$articles[2]['prix']."<br>";
        echo $articles[3]['nom']." ".$articles[3]['prix']." => CHF ".$articles[3]['prix']."<br>";
        echo $articles[4]['nom']." ".$articles[4]['prix']." => CHF ".$articles[4]['prix']."<br>";
        echo $articles[5]['nom']." ".$articles[5]['prix']." => CHF ".$articles[5]['prix']."<br>";
        echo "total : CHF ";

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
            $_SESSION[] = $articles[$id+1];
        }

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        //session_destroy();
        echo "</table>";
        ?>


    </body>
</html>
