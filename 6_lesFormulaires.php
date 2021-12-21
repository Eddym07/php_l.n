<?php
/* @@@@@@@@@@ Quleques explications @@@@@@@@@@*/
//Balise <table> permet de représenter un tableau de donées
//Balise <tr> élément HTML définit une ligne de cellule dans un tableau
//Balise <td> élément HTML définit une cellule qui contient des donnés
// Juste pour ma culture, une balise <th> définit une cellule d'un tableau comme cellule d'en tête.

//<td><input type="text" name="prenom"/></td> => Je créé un input pour saisir du texte, qui s'apelle "prénom"

//<button type="submit"> Je créé un button pour soumettre (submit) qui ce nomme "envoyer" 
//une fois le boutton submit activé, je dois indiquer la page cible , <form method="post" action="6_lesFormulaires.php"> ici je reste sur la même.

//Faille XSS est le faite de se servir des input pour rentrer du code 

if (isset($_POST['prenom']) && isset($_POST['nom'])) { // isset va envoyer true ou false si le paramètre passé existe donc, si il y a l'imput 
    
    $prenom = htmlspecialchars($_POST ['prenom']); //Pour contrer la faille XSS, on écrit notre variable avec "htmlspecialchars"
    $nom = htmlspecialchars($_POST ['nom']);
    
    echo'Bonjour' .' '. $_POST['prenom'] .' '. $_POST['nom'] .' !';
}

echo'<form method="post" action="6_lesFormulaires.php">
        <p>
            <table>
                <tr>    
                    <td>Prénom</td>
                    <td><input type="text" name="prenom"/></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom"/></td>
                </tr>
            </table>
            <button type="submit">Envoyer</button>
        </p>
    </form>' ;

    '<br>';

/*@@@@@@@@@@ Envoi fichier en PHP @@@@@@@@@@*/

// enctype="multipart/form-data" => signifie que je dis à mon navigateur de réserver une certaine place, qu'il va devoir envoyer un fichier

//$_FILES['image'] Pour récupérer des contenues relatif à un fichier, on utilise $_FILES; entre crochet on indique le nom de l'input  <input type="file" name="image"/><br/>

    // $_FILES['image']['name']//nom
    // $_FILES['image']['type']//Type (image/png)
    // $_FILES['image']['size']//Taille
    // $_FILES['image']['tmp_name']//Emplacement du fichier temporaire
    // $_FILES['image']['error']//erreur

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){ //1mo = 1 000 000 d'octets
        if ($_FILES['image']['size'] <= 3000000) {
            $informationsImage = pathinfo($_FILES['image']['name']);//Fonction qui va envoyer les information de l'image
            $extensionImage = $informationsImage['extension'];
            $extensionArray = array('png', 'gif', 'jpg', 'jpeg');
            if(in_array($extensionImage, $extensionArray)) {
                move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.time().rand().'.'.$extensionImage);//'upload est le nom de fichier de reception de l'image
                echo 'envoi réussi !'; //move_uploaded_file vat définitivement envoyé l'image sur le serveur avec un identifiant 
                // unique suivi de son nom par défault.
            }
        }

    }

    echo'<form method="post" action="6_lesFormulaires.php" enctype="multipart/form-data">
        <p>
            <h1>Formulaire<h1>
            <input type="file" name="image"/><br/>
            <button type="submit">Envoyer</button>
        </p>

    </form>';
    ?>