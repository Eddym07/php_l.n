<?php
// Fonctons en PHP Natives

$string = "BIENVENUE SUR LA FORMATION ultime en PHP et MySQL";

//STRLEN
echo 'Nombre de caractères : '.strlen($string); // Fonction qui compte le nombre de caractère 
'<br />';

//str_replace

echo 'La string  transformée : '.str_replace('Bienvenue', 'Welcome', $string).'<br/>';
// Fonction qui remplace un mot par un autre, ici "Bienvenue" sera "remplacée par "Welcome".

// STRTOLOWER met la string en minuscule

echo strtolower($string) . "<br/>";

//STRTOUPPER met les caractère en majuscule

echo strtoupper($string) . '<br/>';

//SUBSTR pour couper une chaîne de caractère
echo substr($string, 0, 9 ).'<br/>'; //En premier paramètre, je donne ma chaîne de caractère, en deuxième paramètre, je dis a partir
        //d'où je prend la phrase, de quel caractère; en troisième paramètre, je décide jusqu'où, jusqu'à quel caractère.

    /*@@@@@@@@@@ Les fonctions pour les maths @@@@@@@@@@*/

    //ABS permet de retourner la valeur absolue d'un nombre c'est a dire son positif

    echo abs(-82).'<br/>';

    //MAX pour retourner la valeur maximum d'un ensemble de nombre

    echo max(3,9,5,19).'<br/>';

    //MIN pour retourner la valeur minimum d'un ensemble de nombre

    echo min(34,6,23,10).'<br/>';

    //RAND pour générer un nombre aléatoire

    echo rand(0,3).'<br/>'; //On vat donc avoir un nombre aux hasard entre 0 et 3

    //ROUND permet d'arrondir un nombre

    echo round(3.479)."</br>";//si je veux arrondir avec deux chiffre aprés la virgule, j'écris round(3.479, 2)


    /*@@@@@@@@@@ Fonctions pour les tableaux @@@@@@@@@@ */

    $array = array("Stendhal", "Arnold", "Steve");
    // array_flip, pour inverser ma clé et ma valeur.

    $array_two = array_flip($array);
    echo $array_two["Arnold"].'</br>';  //ici, Arnold devient la clé, et la valeur devient 1

    // array_key_exists Ce qui permet de voir si la clé existe dans le tableau

    if(array_key_exists(0, $array)) { //Je demande si l'index 0 existe dans mon tableau.
        echo'yes'.'<br/>';
    }

    // COUNT permet de compter le nombre d'item que j'ai dans mon tableau

    echo count($array).'<br/>';

    // SORT pour réagencer le tableau dans l'ordre alphabétique

    sort($array);

    foreach($array as $name) {
        echo $name. '<br/>';

    }
?>