<?php

// On associe à chaque type de vetements et son prix unitaire 
// dans un tableau associatif :
$basket = [
    "CLASSIQUE" => 30,
    "RETRO" => 15,
    "MORALES" => 50,
    "FOX" => 40
];

// Limite des stocks pour jeans et pantalons
$limitebasket = 135;

// Status de la boutique (ouverte ou fermée)
$open = true;

// Nombre d'items vendus, au départ 0z
$nbrClassiqueVendus = 0;
$nbrRetroVendus = 0;
$nbrMoralesVendus = 0;
$nbrFoxVendus = 0;

// Bénéfices au départ de 0
$benefs = 0;


while ($nbrClassiqueVendus < $limitebasket && $nbrRetroVendus < $limitebasket) {
    $nbrClassiqueVendus++;
    $nbrRetroVendus++;

    $benefs += $vetements['jeans'];

    if ($nbrPantsVendus > 15) {
        $benefs += $vetements['pantalons'] * 0.75;
    } else {
        $benefs += $vetements['pantalons'];
    }
}

echo "Mes benefs sur les jeans ET pantalons avec discount: $benefs euros<br>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>

        <H1> BASKET DRUMSOCIETY SOLDE POUR LES G</H1>
        <img src="Bannière 2024-01-10 111433.png" alt="cassée" href="" target="_blank">LEGOAT > <br>
        <a href="https://www.youtube.com/watch?v=79MQ4_r7QZM&ab_channel=NBA">
            target="_blank">LEEEEEEEEEEEEGGGGGGGOOOOOOOOOOOOOAAAAAAAATTTTTTTTTTTTTTTTT</a>
        <h1>AIR JORDAN CLASSIQUE 17999 $</h1>
        <input type="checkbox" name="Air Jordan OG classique" id="classique"> <br>
        <h1>AIRJORDAN RETRO 14999 $</h1>
        <input type="checkbox" name="Air Jordan retro" id="retro"><br>
        <h1>AIR JORDAN MORALES 12999 $</h1>
        <input type="checkbox" name="Air Jordan Morales Drum Society" id="drumsociety"><br>
        <h1>AIR JORDAN FOX 12999 $</h1>
        <input type="checkbox" name="Air Jordan FOX" id="lefuturfox">
    </nav>
</body>

</html>


<?php 

// 1) Connexion à la BDD
$connexion = new mysqli('localhost', 'root','root', 'basket');
if ($connexion->connect_errno) {
    echo "Echec de la connexion : " . $connexion->connect_error;
    exit();
}

// Autre méthode de connbexion  

// $connexion = mysqli_connect ('Localhost')

$req = 'SELECT * FROM `basket`'; 

// 3) Exécuter la requette précédente 

$villes = $connexion ->query($req);
foreach

print($clients);
echo "<br>"; 

// 5) Pour chaque clients je veux afficher son nom 
foreach ($clients as $clients) {
    echo "Nom du client : " . $client ['name'] . "<br>"; 
}
// 6) Je mets fin à ma connexion 
$connexion->close(); 

