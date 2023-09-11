<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test végétarien</title>
</head>
<body>
<h2>Testez votre capacité à devenir végétarien</h2>
<?php
require_once("includes/data.inc.php");

if(isset($_POST['prenom'])){
    $_SESSION['vegi'] = array();
    $_SESSION['vegi']['reponses'] = array("A" =>0, "B" => 0, "C" => 0);
    $_SESSION['vegi']['prenom'] = $_POST['prenom'];
    $_SESSION['vegi']['num_question'] = 0;
    $num_question = $_SESSION['vegi']['num_question'];
}
elseif (isset($_POST['next'])){
    $_SESSION['vegi']['num_question']++;
    $num_question = $_SESSION['vegi']['num_question'];
    $_SESSION['vegi']['reponses'][$_POST['reponse']]++;
}





if(isset($_SESSION['vegi']['prenom'])) {

    if($num_question <9) {
        echo "<h3>Question " . ($num_question + 1) . "</h3>";
        echo "<p>" . $tab['question'][$num_question]['texte'] . "</p>";
        echo "<input type='radio' name='reponse' checked='checked' value='A'>" . $tab['question'][$num_question]['rep_1'];
        echo "<br><input type='radio' name='reponse' value='B' >" . $tab['question'][$num_question]['rep_2'];
        echo "<br><input type='radio' name='reponse' value='C' >" . $tab['question'][$num_question]['rep_3'];
        echo "<br><input type='submit' name='next' value='question suivante' >";
    }
    else{
        echo "<h3>Résultat du test</h3>";
        $resultat = $_SESSION['vegi']['reponses']['A'];
        $label = 'A';

        if($_SESSION['vegi']['reponses']['B'] > $resultat){
            $resultat = $_SESSION['vegi']['reponses']['B'];
            $label = 'B';
        }
        if($_SESSION['vegi']['reponses']['C'] > $resultat){
            $label = 'B';
        }

        echo "<p>Vous avez obtenu un maximum de ".$label."</p>";
        echo "<h2>".$tab['resultat'][$label]['titre']."</h2>";
        echo "<p>".$tab['resultat'][$label]['details']."</p>";
        session_destroy();
    }
}
else {
    echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>";
    echo "prénom" . "<input type='text' name='prenom' id='prenom'>" . "<br>";
    echo "<input type='submit' value='Débuter le test'>";
}




echo "<pre>";
echo "<h2>Contenu de la session</h2>";
print_r($_SESSION);
echo "</pre>";


echo "</form>";
?>

</body>
</html>