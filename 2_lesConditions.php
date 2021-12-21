<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>

<body>
    <!-- @@@@@@@@@@########## Les conditions "if" ##########@@@@@@@@@@-->
    <?php
    $age = 18;
    //Si age plus que 17
    if ($age > 17) {
        echo "Vous êtes majeur";
    } else { // sinon 
        echo "Vous êtes mineur";
    }
    // Operateurs de conditionnement
    // == Est égal à
    // >  Est supérieur à
    // >= Est supérieur ou égale à
    // <  Est inférieur à
    // <= Est inférieur  ou égale à
    // != Est différent de 

    if ($age < 18) {
        echo "Vous êtes mineur";
    }
    if ($age >= 18) {
        echo "vous êtes majeur";
    }

    ?>
    <!-- @@@@@@@@@@########## Les conditions multiples ##########@@@@@@@@@@ -->

    <?php
    //Pseudo = Tintin
    //MDP = Lune

    $pseudo = "lulu";
    $mdp = "Lune";

    //  &&
    if ($pseudo == "Tintin" && $mdp == "Lune") { //Je vérifie que le pseudo et le mdp corresponde bien.
        echo "Mot de passe valide";
    }
    //  ||
    if ($pseudo == "Tintin" || $mdp == "Lune") { //Je vérifie que SOIT le pseudo, SOIT le mdp soit correct.
        echo "Vous pouvez rentrer !";
    }
    ?>
    <!-- @@@@@@@@@@########### Les conditions ternaires ##########@@@@@@@@@@ -->

    <?php

    // number % 10 == 0
    //echo (condition) ? success : false;
    $number = 10;
    echo ($number % 3 == 0) ? 'true' : 'false'; // si en divisant $number par 3, il reste 0 alors 'true' sinon 'false'; 
    ?>

        <!-- @@@@@@@@@@########### If  &  Else ##########@@@@@@@@@@ -->
    <?php
    $pseudo = "Tintin";
    $mdp = "Lune";

    if($pseudo == "Tintin" && $mdp == "Lune") {
        echo "Mot de passe Valide.";
    }
    else {          // ce qui évite d'utiliser deux fois "if" comme les exemples aux- dessus.
        echo "Mot de passe invalide.";
    }

    ?>

            <!-- @@@@@@@@@@########### elseif ##########@@@@@@@@@@ -->
    
    <?php
    $age = 17;

    if($age >18) {
       echo  "Vous êtes majeur";
    }
    elseif($age == 18){
        echo "Vous êtes enfin majeur";
    }
    else {
        echo "Vous êtes mineur";
    }
    
    ?>

                <!-- @@@@@@@@@@########### SWITCH ##########@@@@@@@@@@ -->

    <?php
    $note = 0;

    switch ($note) {
        case 0:
            echo 'Vous êtes vraiment nul.';
            break;
        case 1:
            echo 'Vous êtes pas bon gone!';
            break;
        default: 
            echo 'Note introuvable';

    }
    ?>
</body>

</html>