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



//On utilise une variable de demande "$requete" qui va contenir notre object pdo '$bdd' et la requete 'query' la flêche 
    //sert à utiliser une méthode de l'objet '$bdd'
// entre parenthèse je selectionne 'SELECT' tout ce qui ce trouve '*' dans la table 'users'


    //Ajouter un métier

    // $requete = $bdd->exec('INSERT INTO Jobs(id_user, metier)
    //                        VALUES(1, "Ecrivain")');
                        
    // $requete = $bdd->exec('INSERT INTO Jobs(id_user, metier)
    //                     VALUES(2, "Danseuse")');

    // $requete = $bdd->exec('INSERT INTO Jobs(id_user, metier)
    //                     VALUES(3, "Programmeur")');

    // $requete = $bdd->exec('INSERT INTO Jobs(id_user, metier)
    //                     VALUES(4, "PDG")');
        
    
        //Lire des informations avec des jointures internes.

        // $requete = $bdd->query('SELECT prenom, nom, serie_preferee, metier 
        //                         FROM Users
        //                         INNER JOIN Jobs 
        //                         ON Users.id = Jobs.id_user');


    //Lire des informations avec des jointures externes

    $prenom = 'Alain';
        $requete = $bdd->prepare('SELECT prenom, nom, serie_preferee, metier
                                FROM Users
                                LEFT JOIN Jobs
                                ON Users.id = Jobs.id_user
                                WHERE prenom = ?');
            
        $requete->execute(array($prenom));

//Je créé un tableau pour récupérer mes éléments et les mettre en forme.
    echo'<table border>
            <tr>
                <th>Pseudo</th>
                <th>Nom</th>
                <th>Série préférée</th>
                <th>Mot de passe</th>
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
                            <td>' . sha1($donnees['metier']) .'dsj28j</td> 
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
<!-- -->    

</body>
</html>