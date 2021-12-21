<?php
//pour ce connecter, on a besoin d'un hote, ici localhost, mais cela peut-être par exemple: 
        //sql.monserveur.com cela dépend de la configuration.
//Le nom de la base de donnée, ici : formation_users
// Login : root
// MDP :root (pour mac, sinon : "")





//ci dessous, le "try" sert a tester de faire le traitement dans l'accolade, et si celà ne fonctionne pas,
    //il exécute le code qui ce trouve dans "catch" c'est a dire que l'on va attraper l'erreur et la mettre
    //dans la variable "$e" et l'afficher => die('Erreur : '.$e->getMessage()
// on créé une variable '$bdd' qui va nous permette de faire les requètes
//ensuite, new PDO => création d'un objet qui va nous permettre de nous connecter.
// entre paranthèse, on dit que l'on utilise une conexion mysql en utilsant l'extension pdo; en suite on lui dit que l'hote 
// s'appelle 'localhost', que le nom de la bd s'appel formation_users et que l'encodage est du charset utf8.
//ensuite on indique notre login et mdp, sur mac c'est root et root.

try {$bdd = new PDO('mysql: host=localhost; dbname=formation_users; charset=utf8','root','root');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}


    //Ajouter un utilisateur avec GET ou POST
    //POST passe par le serveur
    //GET passe par l'url

    if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['serie'])) { //On vérifie si il existe un champ 
        //de formulaire POST qui s'appel prenom etc et qui est en train d'être envoyé.
        $prenom = $_GET['prenom'];        //ici je change POST par GET 
        $nom = $_GET['nom'];               //ici je change POST par GET
        $serie = $_GET['serie'];           //ici je change POST par GET

        $requete = $bdd->prepare('INSERT INTO Users(prenom, nom, serie_preferee) VALUES(?, ?, ?)')
                                    or die(print_r($bdd->errorInfo()));
        $requete->execute(array($prenom, $nom, $serie));

        header('location:../'); // Location recréer une redirection vers la page d'accueil.
                                //cela permet de ne pas créer le personnage à chaque actualisation de la page.
    }


        // Affiche les informations
        $requete = $bdd->query('SELECT prenom, nom, serie_preferee
                                FROM Users');
            

//Je créé un tableau pour récupérer mes éléments et les mettre en forme.
    echo'<table border>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Série préférée</th>
            </tr>';

            // Tant qu'il y a une entrée ('fetch' permet de récupéré une entrée) alors on exécute ce qu'il y a entre accolade 
            // et entre les accolade, on lui dt qu'a chaque fois qu'il fait un tour de boucle, il affiche une ligne en plus.
            //Balise <table> permet de représenter un tableau de donées
            //Balise <tr> élément HTML définit une ligne de cellule dans un tableau
            //Balise <td> élément HTML définit une cellule qui contient des donnés
            // Juste pour ma culture, une balise <th> définit une cellule d'un tableau comme cellule d'en tête.

                 while($donnees = $requete->fetch()) {

                    echo '<tr>
                            <td>' . $donnees['prenom'] .' </td>
                            <td>' . $donnees['nom'] .' </td>
                            <td>' . $donnees['serie_preferee'] .' </td>
                          </tr>';

            }
                    //Pour crypter des donner, il faut mettre "sha1() comme au dessus , et rajouter des caractère 
                    //(son grain de sel), par ex: "dsj28j" en plus que l'on peut faire générer aléatoirement pour chaque utilisateur

            $requete->closeCursor();


        echo '</table>';

    


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

    <h1>Ajouter un utilisateur</h1> 
    <form method ="get" action="11_donneesViaFormulaires.php"> <!-- ici je change post par get-->
        <table>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom"/></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom"/></td>
            </tr>
            <tr>
                <td>Série préférée</td>
                <td><input type="text" name="serie"/></td>
            </tr>

        </table>
            <button type="submit">Ajouter</button>
        

        </form>


</body>
</html>

