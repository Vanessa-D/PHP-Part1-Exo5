<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 5</title>
</head>
<body>
    <p>
        Créer une variable âge et une variable genre. Afficher aléatoirement s'il s'agit d'une meuf, d'un mec ou d'une personne non-binaire de x ans : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            /* Variables random */
            /*$randomAge = mt_rand(0,115);
            $gender = mt_rand(1,3);

            echo "Tu es :</br>";

            if($gender == 1){
                echo "Une meuf de $randomAge ans</br>";
            }elseif($gender == 2){
                echo "Un mec de $randomAge ans</br>";
            }else{
                echo "Une personne non-binaire de $randomAge ans</br>";
            }*/

            $randomAge = rand(1,115);
            $sex = array('Meuf', 'Mec', 'Non-binaire'); /*$sex = ['Meuf', 'Mec', 'Non-binaire'];*/
            $gender = $sex[rand(0,2)];

            echo $gender. ' de ' .$randomAge. ' ans';
        ?>
    </div>
</body>
</html>