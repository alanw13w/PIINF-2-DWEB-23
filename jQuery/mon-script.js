// exercice 1
/*$(document).ready(function() {
    // Sélectionnez la balise span avec l'ID "texte"
    var remplacement = $("#texte");

    // Modifier le contenu de la balise span pour afficher "Hello World"
    remplacement.text("Hello World !!");
});*/




//exercice 2
$(document).ready(function() {
    // Sélection de tout les éléments li dans la liste non ordonnée (ul)
    $("ul li").addClass("ma-classe-ul");

    // Sélection de tout les éléments li dans la liste ordonnée (ol)
    $("ol li").addClasse("ma-classe-ol");
});