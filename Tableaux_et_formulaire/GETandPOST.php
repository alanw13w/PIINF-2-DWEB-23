<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
echo "<h3>GET</h3>";
echo "<form action='index.php' method ='get'>";
echo "nom";
echo  "<input type='text' name='nom'>";
echo "<br>";
echo "ville";
echo  "<input type='text' name='ville'>";
echo "<br>";
echo "<input type='submit' name='send_name' value = 'envoyer'>";
echo "</form>"."<br>";

echo "<h3>POST</h3>";
echo "<form action='index.php' method ='post'>";
echo "nom";
echo  "<input type='text' name='nom'>";
echo "<br>";
echo "ville";
echo  "<input type='text' name='ville'>";
echo "<br>";
echo "<input type='submit' name='send_name' value='envoyer'>";
echo "</form>"."<br>";
?>
</body>
</html>