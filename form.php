<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<h2> Exercice révision</h2>

<form action="formresult.php" method="post">

    nom : <input type="text" name="nom">
    <br>
    email : <input type="text" name="email">
    <br>
    <select name="note">
        <option value="1">Insuffisant (1)</option>
        <option value="2">Suffisant (2)</option>
        <option value="3">Bien (3)</option>
        <option value="4">Très bien (4)</option>
    </select>
    <br>



    <input type="radio" name="sexe" value="male">Homme<br>
    <input type="radio" name="sexe" value="female">Femme<br>

    Je souhaite m'inscrire à la newsletter <input type="checkbox" name="newsletter" value="1">
    <br>
    <input type="submit" value="envoyer">

</form>

</body>
</html>
