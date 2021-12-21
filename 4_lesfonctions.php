<!--@@@@@@@@@@########## Les fonctions ##########@@@@@@@@@@-->

<?php

function Hello($prenom) {
    echo 'Bonjour ' . $prenom;
}
Hello("Eddy");   
?>

<!--@@@@@@@@@@########## Les fonctions qui retourne une valeur ##########@@@@@@@@@@-->

<?php
function Formule($x,$y) { //je créer une fonction qui a en paramètre $x $y
    $temp = $x * $y; //Je créer une variable $temp qui contient les résultats des calcul suivant
    $temp /= 5;
    $temp = $x + $temp - ($x + $y);
    return $temp;   //  je retourne ce qu'il y a dans la variable $temp //Le return sert en quelque sorte à retenir 
                    // la valeur de la variable $temp pour s'en servir ensuite. Le "return $temp" est en quelque sorte le 
                    //résultat de la function "Formule($x, $y)"  
} 
    $resultat = Formule(52, 74);    // Je créer une variable $resultat qui va contenir, ou qui va me retourner ce qu'il ce 
                                     // trouve dans dans la fonction Formule 

    echo $resultat
?>

<!--@@@@@@@@@@########## Exercice sur Les fonctions  ##########@@@@@@@@@@-->

<?php
//Définir une fonction qui permet de calculer les racines d'une équation ax²+bx+c = 0
