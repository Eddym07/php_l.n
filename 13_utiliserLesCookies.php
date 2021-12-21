<?php
    if(!empty($_POST['pseudo'])) { // Pour voir si un champ rentré en paramètre est rempli. Ici c'est le pseudo

        $pseudo = $_POST['pseudo'];

            // Il faut déclarer son cookies avant le html

         setcookie('pseudo', $pseudo, time() + 365 * 24 * 3600); //Toujours créer un cookie avant le html.
    }  //Fonction création de cookie('nom du cookie, valeur)
    


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- @@@@@@@@@@ Je créer mon formulaire @@@@@@@@@@ -->

    <h1>Entrer votre pseudo</h1> 
    <form method ="post" action="13_utiliserLesCookies.php"> <!-- Utiliser la méthode post qui est un poil plus sécurisé que get-->
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo"/></td>
            </tr>
            
        </table>
            <button type="submit">Se connecter</button>
        

        </form>

        <?php
        if(!empty($_COOKIE['pseudo'])){ //verifie si le cookies est existant et si la fonction est remplis
            echo'<h2>Bienvenue '. htmlspecialchars($_COOKIE['pseudo']) . '</h2>';
        }
        ?>


</body>
</html>

