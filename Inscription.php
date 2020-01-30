<?php
    include("Nav.html");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Inscription.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>e-Dev | Inscription</title>
</head>
<body>
    <main class="main_property">
        <h1>Inscription année 2020-2021</h1>
        <ul>
            <li>Vous allez, après inscription, être amenés à passer un examen sous forme de QCM dans l’école. <br>
                Des documents de cours vous seront mis à disposition pour vous préparer. <br>
                Une fois l'inscription complétée, vous aurez une semaine pour réviser et, à terme, restituer ce que vous avez appris.
            </li>

            <li>La date et l’heure vous seront communiqués sous 48H.
                Rendez-vous au 48 rue du Payet, Paris 75023
            </li>

            <li>
                Bonne chance !
            </li>
        </ul>

        <div class="formulaire">


            <form method="post">
                <fieldset>
                    <legend>Vos coordonnées :</legend>

                    <label for="Nom">Nom :</label>
                    <input type="text" name="Nom" placeholder="ex: Dupond"/>

                    <label for="Prenom">Prenom :</label>
                    <input type="text" name="Prenom" placeholder="ex: Marie"/>

                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="mail" placeholder="ex: marie.dupond@gmail.com"/>

                    <label for="INE">Numéro INE :</label>
                    <input type="text" name="INE" placeholder="ex: 1234567890G"/>


                    <button class="small_bouton_bleu">
                        <a href="thx.php" >Valider</a>
                    </button>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>
