<?php
        //LES SESSIONS

        /*Les sessions permette de creer un identifiant unique qui s'appel PHPSESSID qui va 
            permettre de s'identifier sur chacune des pages du site internet
            
            session_start(); ceci permet de d'initialiser la session avec un ID unique
            
            $_SESSION['nom']; On peux renfermer plein de paramettre; on peut créer un $_SESSION qui sera égale 
                                a une certaine valeur que l'on pourra réutiliser partout sur notre site internet comme
                                un cookies   
            
            session_destroy(); pour fermer la session, ou en fermant le navigateur*/

session_start();    //Pour initialiser la session
session_destroy();  //Pour la detruire

    if(!empty($_POST['pseudo'])) { // Pour voir si un champ rentré en paramètre est rempli. Ici c'est le pseudo

        $pseudo = $_POST['pseudo'];
        $_SESSION['pseudo'] = $pseudo;
    }
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
    <form method ="post" action="14_utiliserLesSessions.php"> <!-- Utiliser la méthode post qui est un poil plus sécurisé que get-->
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo"/></td>
            </tr>
            
        </table>
            <button type="submit">Se connecter</button>
        

        </form>

        <?php
        if(!empty($_SESSION['pseudo'])){ //verifie si la session est existante et si la fonction est remplis
            echo'<h2>Bienvenue '. htmlspecialchars($_SESSION['pseudo']) . '</h2>';
        }
        ?>


</body>
</html>

