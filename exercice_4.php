<!DOCTYPE html>
<html lang="fr">
	<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	</head>
	<body>
        <?php
        $rayon = 5;
        define("PI", 3.1415);
        $aire = $rayon*$rayon*constant("PI");
		$circ = $rayon*2*constant("PI");
		$diam = $rayon*2;
		echo "le diamètre est de $diam et la circonferencre de $circ et l'aire est de ".number_format($aire, 2);
        ?>
	</body>
</html>