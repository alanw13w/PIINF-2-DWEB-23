<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
<?php

if(isset($_POST['reset'])){
    session_destroy();
}

else {
    if (!isset($_SESSION['operation'])) {
        $_SESSION['operation'] = array();
    }

    if (isset($_POST['operator'])) {
        if ($_POST['operator'] == "+") {
            $resultat = $_POST['chiffre_1'] + $_POST['chiffre_2'];
        } else {
            $resultat = $_POST['chiffre_1'] - $_POST['chiffre_2'];
        }
        $tab_calcul['chiffre_1'] = $_POST['chiffre_1'];
        $tab_calcul['chiffre_2'] = $_POST['chiffre_2'];
        $tab_calcul['operator'] = $_POST['operator'];
        $tab_calcul['resultat'] = $resultat;
        $_SESSION['operation'][] = $tab_calcul;
    }

    foreach ($_SESSION['operation'] as $calcul) {
        echo $calcul['chiffre_1'] . " " . $calcul['operator'] . " " . $calcul['chiffre_2'] . " = " . $calcul['resultat'] . "<br>";
        $last_resultat = $calcul['resultat'];
    }


    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="reset" value="réinitialiser">
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="number" name="chiffre_1" value="">

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
    </select>

    <input type="number" name="chiffre_2">
    <input type="submit" value="=">
</form>

</body>
</html>