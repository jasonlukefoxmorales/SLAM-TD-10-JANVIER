<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema tarif</title>
    <link rel="stylesheet" href="cinema.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="./Bannière 2024-01-10 111433.png" alt="logo">
            <p>DRUMSOCIETY CLUB</p>
        </div>
        <form id='tarifs' method="GET">
            <input type="text" placeholder="Prénom" name="fname">
            <input type="text" placeholder="Nom" name="lname">
            <input type="number" placeholder="Votre age" name="age">
            <input type="submit" name="submit" value="Calculer">
        </form>
        <?php

        // On vérifie que le formulaire est soumis
        if (isset($_GET['submit'])):

            // On vérifie que les champs sont remplis
            if (!empty($_GET['fname']) && !empty($_GET['lname']) && !empty(($_GET['age']))):

                $age = $_GET['age'];
                $fname = $_GET['fname'];
                $lname = $_GET['lname'];

                // On utilise un switch pour déterminer le tarif
                switch ($age) {
                    case ($age < 10):
                        $surnom = 'FUTURHERO';
                        $tarif = 'Enfant';
                        break;
                    case ($age < 16):
                        $surnom = 'MORALES';
                        $tarif = 'Junior';
                        break;
                    case ($age < 25):
                        $surnom = 'FOX';
                        $tarif = 'Étudiant';
                        break;
                    case ($age > 60):
                        $surnom = 'WAYNE';
                        $tarif = 'Senior';
                        break;
                    default:
                        $surnom = 'HERO';
                        $tarif = "Normal";
                }
                ?>

                <!-- On affiche les résultats ainsi que le nom et le prénom -->
                <h2> Bonjour
                    <?= $fname ?>
                    <?= $lname ?>
                </h2>
                <h2> Surnom :
                    <?= $surnom ?>
                </h2>
                <h2> Tarif :
                    <?= $tarif ?>
                </h2>

                <!-- On s'assure que l'age est un chiffre (cas avec e) -->
            <?php elseif ((!is_numeric($_GET['age']))): ?>

                <h2>Veuillez entrer un chiffre correct</h2>

            <?php else: ?>

                <h2>Veuillez remplir tous les champs</h2>

            <?php endif ?>
        <?php endif ?>
    </div>

</body>

</html>