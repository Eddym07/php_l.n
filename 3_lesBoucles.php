<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- @@@@@@@@@@########## Les boucles While ##########@@@@@@@@@@ -->
 <!-- La boucle while sert lorsque l'on ne sait pas le nombre de fois que l'on répéter les instructions-->
<?php

    // $ligne = 0; 
    // while ($ligne < 10){       /* Tant que (ceci est vrai) {alors fais ça}*/
    // echo "Voici le numéro de la ligne :".($ligne+1).'<br/>';
    // $ligne++;
    // }
?>
<!-- @@@@@@@@@@########## Les boucles for ##########@@@@@@@@@@ -->
<!--la boucle for sert lorsque l'on sait combien de fois utliser le traitement-->
<?php

for($i = 0; $i < 10; $i++){     //(Initialisation de la variable i qui est égale à 0; je pose une condition  
    echo "Voici le numéro de la ligne :".($i+1)."</br>";    // c'est a dire , tant que $i < X ; incrémente la variable i de 1
}

?>

<!-- @@@@@@@@@@########## Les boucles foreach ##########@@@@@@@@@@ -->
<!-- qui veut dire "pour chaque"-->
<?php
// $user = array('Nicolas', 'Georges', 'Marc', 'Emmanuel', 'Stendhal');
// for ($i = 0; $i < 5; $i++){
//     echo $user[$i] ."</br>";
// }

// OU =>

$user = array('Nicolas', 'Georges', 'Marc', 'Emmanuel', 'Stendhal');

foreach($user as $name){ //Dans la variable user, tu va me parcourir chaque élément du tableau que tu vas mettre dans 
    echo $name.'</br>';   // la variable name
}

//  Avec tableau personnalisé =>
$nicolas = array(
    'Prénom' =>'Nicolas', 
    'nom' => 'Georges', 
    'age' => 20
);
foreach ($nicolas as $item) {
    echo $item. '<br/>';
} 

?>
<!-- @@@@@@@@@@########## Les boucles imbriquées ##########@@@@@@@@@@ -->

<?php
// for($i = 0; $i <= 5; $i++){
//     for($j = 0; $j <= 5; $j++){
//         echo $i * $j.' ' ;
//     }
//     echo '</br>';
// }
// echo "</br>"
?>

<!-- @@@@@@@@@@########## Tableaux de multiplivité ##########@@@@@@@@@@ -->
<?php
echo '<table border style="border-collapse: collapse;">
        <tr>
            <th></th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>6</th>
            <th>9</th>
            <th>10</th>
        </tr>';
for($i = 1; $i <= 10; $i++)
{
    echo '<tr><th>' .$i.'</th>';
    for($j = 1; $j <= 10; $j++)
    {
        echo  "<td>" .$i*$j."</td> ";
    }
    echo "</br>";
}

?>
<!-- @@@@@@@@@@########## Projet ##########@@@@@@@@@@ -->

<?php
//faire un tableau avec les nombres de 1 à 10, dans la deuxième colonne , faire le carré du nombre à gauche, 
// et dans la dernière colonne, mettre la racine du premier nombre.

                    /*ceci sert à faire une table*/ //<th> => table header
    echo '<table border>    
            <tr>
            <th>Nombre</th>
            <th>Carré</th>
            <th>Racine</th>
            
        </tr>';
        for($i = 1; $i < 51 ; $i++) {
        
        echo '<tr>
                <td>' . $i . '</td>
                <td>' . $i * $i . '</td>
                <td>' . sqrt($i) . '</td>

            </tr>';
        }
    echo '</table>';
?>

</body>
</html>
