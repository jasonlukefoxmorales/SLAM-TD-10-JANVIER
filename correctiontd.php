<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // Je commence par la connexion avec la BDD
    $connexion = new mysqli('localhost: 3300', 'root', 'prs_shop');
    // Définir la requête SQL pour lister nos produits 
    $req = 'SELECT *FROM `products`';
    // Executer cette requête sql 
    $products = $connexion->query($req);

    foreach ($product as $product):

        ?>


        <h2>Nom du produit :
            <?= $product['name'] ?>
        </h2>
        <h2>Catégorie :
            <?= $product['category'] ?>
        </h2>
        <h2>Prix :
            <?= $product['price'] ?>
        </h2>


    <?php endforeach ?>

</body>

</html>