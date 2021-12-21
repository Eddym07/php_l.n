<?php
// Les conditions Ternaires

//Récupérer (s'il existe bien) le pseudo
//Condition ternaire pour faire cette vérification
//Hello pseudo
//Hello unknow user

$pseudo = (!empty($_GET['pseudo'])) ? $_GET['pseudo']
            : 'unknow user'; // empty signifie vide et le "!" la négation. Donc, si $pseudo n'est pas vide
                                        //renvoyer pseudo 
echo "Hello ". $pseudo;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
    <table>
        <tr>
            <td>Prénom</td>
            <td><input type="text" name="prenom"/></td>
        </tr>

        <tr>
            <td>Nom</td>
            <td><input type="text" name="prenom"/><td>
        </tr>
        
    </table>
    <button type="submit">Ajouter</button>

    
</body>
</html>