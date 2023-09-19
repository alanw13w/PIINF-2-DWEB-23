<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>
<h2> Rappel sur les formulaires</h2>

<form action="result.php" method="post">
<select name="formation">
    <option value="ict">Informaticien</option>
    <option value="aut">Automaticien</option>
    <option value="elm">Electronicien en multimédia</option>
</select>
    <br>
    <input type="radio" name="annee" value="1">1ère année<br>
    <input type="radio" name="annee" value="1">2ème année<br>
    <input type="radio" name="annee" value="1">3ème année<br>
    <input type="radio" name="annee" value="1">4ème année<br>

    Maturité : <input type="checkbox" name="matu" value="1">
    <br>
    <br>
    <input type="text" name="nom">
    <br>
    <input type="text" name="prenom">
    <br>
    <input type="submit" value="envoyer">
    <br>
</form>
</body>
</html>
