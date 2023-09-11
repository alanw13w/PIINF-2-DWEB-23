<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<?php
echo "<h2>Testez votre capacité à devenir végétarien</h2>";

echo "<form action='formulaire.php' method='post'>";
echo "prénom"."<input type='text' name='prenom'>"."<br>";
echo "<input type='submit' name='envoyer' value='Débuter le test'>";
echo "</form>";

echo "<h3>Contenu de la session</h3>";
$_SESSION['vegi'] = $_POST;
$num_question = 0;
$_SESSION['vegi']['num_question'] = $num_question;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>