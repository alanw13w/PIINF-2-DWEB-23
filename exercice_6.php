<!DOCTYPE html>
<html lang="fr">
	<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	</head>
	<body>
    <?php
    $mois = date("m");
    switch($mois){
        case 1:
            echo "nous sommes en janvier";
            break;
        case 2:
            echo "nous sommes en février";
            break;
        case 3:
            echo "nous sommes en mars";
            break;
        case 4:
            echo "nous sommes en avril";
            break;
        case 5:
            echo "nous sommes en mai";
            break;
        case 6:
            echo "nous sommes en juin";
            break;
        case 7:
            echo "nous sommes en juillet";
            break;
        case 8:
            echo "nous sommes en août";
            break;
        case 9:
            echo "nous sommes en septembre";
            break;
        case 10:
            echo "nous sommes en octobre";
            break;
        case 11:
            echo "nous sommes en novembre";
            break;
        case 12:
            echo "nous sommes en décembre";
            break;
    }
    ?>
	</body>
</html>