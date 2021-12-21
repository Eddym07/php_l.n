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


    /* ##########@@@@@@@@@@ PLUSIEURS REQUETE POSSIBLE @@@@@@@@@@########## */

    //Lire des informations

                // $requete = $bdd->query('SELECT * 
                //                         FROM users
                //                         WHERE prenom = "nicolas"');// SELECT pour séléctionner les colonnes, et * pour préciser toute
                //                                                     //FROM pour dire de quel table 
                //                                                     //WHERE pour "quand" le prénom est = / ou quand le nom est =



                // $requete = $bdd->query('SELECT * 
                //                          FROM users
                //                          ORDER BY id'); // ORDER permet de mettre dans l'odre croissant (par default) du champ id 


                // $requete = $bdd->query('SELECT * 
                //                         FROM users
                //                         ORDER BY id DESC'); // DESC permet de mettre dans l'odre décroissant du champ id 



                // $requete = $bdd->query('SELECT * 
                //                         FROM users
                //                         LIMIT 0, 2'); // LIMIT permet de selectionner le nombre de ligne que l'on veut afficher. Ici, les deux premiers.



                // $requete = $bdd->query('SELECT * 
                //                         FROM users
                //                         ORDER BY id DESC 
                //                         LIMIT 0, 1'); // LIMIT permet de selectionner le nombre de ligne que l'on veut afficher. Ici, le dernier, grace 
                                        // au ORDER et au LIMIT.



            

           
        
    //Ajouter un utilisateur

        $requete = $bdd->exec('INSERT INTO Users (prenom, nom, serie_preferee) 
                               VALUES("Mark", "Zuckerberg", "Koh-Lanta")')
                                or die(print_r($bdd->errorInfo())); 
                                // "OR" c'est a dire "si" j'ai fais une erreur, affiche l'erreur qui vient de la bdd
                            
        // la fonction "exect" est prévue pour exécuter des modifications denq la base de donnée
            //"INSERT INTO" insère dans la table "Users" dans les champs..... les "VALEURS" .....



    //Modifier des donées dans une table

    // $requete = $bdd->exec('UPDATE Users SET serie_preferee = "Le rouge et le noir" WHERE prenom = "Alain"');
        //UPDATE pour modifier la table Users et dans Users, le veux modifier "serie_preferee" et NE SURTOUT PAS 
        //OUBLIER le "WHERE"!!


    //Supprimer un utilisateur
        // $requete = $bdd->exec('DELETE FROM Users
        //                         WHERE prenom = "Mark"'); 

        //Lire des informations

        $requete = $bdd->query('SELECT * 
                                FROM users');

            


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