<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    //Afficher sur l'écran
    echo "Hello World";
    echo '</br>';
    //les variables

    $ageDuLyceen = 18; //Entier (int => integer)
    $ageDuLyceen = 18.5; //Décimal (float)
    $ageDuLyceen = "18.5"; //chaîne de caractère (string)
    $estMajeur = true; //Booléen (bool)

    echo $ageDuLyceen;
    ?>
    </br>
    <?php
    // @@@@@@@@@@########## Concaténation de variables ##########@@@@@@@@@@ //
    $direBonjour = "Hello";
    $destination = "World";

    echo "$direBonjour $destination" . PHP_EOL; //cette technique de concaténation n'est pas jolie est n'est pas à utiliser.
    //.PHP_EOL sert à mette un espace, ici entre cet 'echo' et celui d'aprés.

    echo $direBonjour . ' ' . $destination;

    ?>
    </br>
    <?php
    echo $direBonjour . ' ' . $destination . ' comment allez-vous ?';
    ?>
    </br>
    </br>
    <?php
    // @@@@@@@@@@########## Opérateur en PHP ##########@@@@@@@@@@ //

    /* multiplier => *
           additioner => +
           soustraire +> -
           diviser => / */
    $premiereNombre = 5;
    $deuxiemeNombre = 25;
    echo $premiereNombre * $deuxiemeNombre; //exemple pour la multiplication. Pour les autres opérateur c'est la même méthode.

    echo '</br>';

    $operationCalcul = ((5 * 5) / 5) + 158;
    $operationCalcul = $operationCalcul / 5; // OU, on peut aussi l'écrire comme ca : $operationCalcul /= 5;
    echo $operationCalcul;

    ?>

    </br>

    <?php
    // @@@@@@@@@@########## Les Tableaux ##########@@@@@@@@@@ //

    $identitePersonneA = array(
        'id'     => 15,
        'prenom' => 'Nicolas',
        'nom'    => 'Dupont',
        'age'    => 20
    );



    echo $identitePersonneA['prenom']; // Je récupère ma clé 'prénom' et il affichera 'Nicolas'.
    echo '</br>';
    // on peut concaténer le résultat :
    echo 'Bonjour ' . $identitePersonneA['prenom'] . ' ' . $identitePersonneA['nom'] . '!';
    echo "</br>";

    // La méthode ci-dessous est fonctionnelle, mais moins lisible que la première, qui elle est à priviliégier.
    $identitePersonneA = array(15, 'Nicolas', 'Dupont', 20); //Ici, les clés ont été généré automatiquement soit 0, 1, 2, 3
    echo $identitePersonneA[1];
    echo '</br>';
    // on peut concaténer le résultat :
    echo 'Bonjour ' . $identitePersonneA[1] . ' ' . $identitePersonneA[2] . ' !';
    ?>
    </br>
    </br>
    </br>
    <!-- @@@@@@@@@@########## Exerecice final ##########@@@@@@@@@@ -->
    <?php
    //Enoncé : Faire un tableau(id, prenom, nom, age
    // Afficher l'age de la personne dans 50 ans
    //et faire afficher "Bonjour prenom nom ! Dans 50 ans vous aurez x ans.

    $identite = array(
        'id'     => 1,
        'prenom' => 'Eddy',
        'nom'    => 'Martin',
        'age'    => 20
    );
    $ageEnPlus = 50;
    echo 'bonjour ' . $identite['prenom'] . ' ' . $identite['nom'] . ' ! ' . 'Dans ' . $ageEnPlus . ' ans' . ' ' . ' tu auras ' . $identite['age'] + $ageEnPlus . ' ans.';

    ?>

</body>

</html>