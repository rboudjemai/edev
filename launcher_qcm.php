<?php
    include("Nav.html");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="launcher_qcm.css">
    <title>e-Dev | QCM</title>
</head>

<body>
    <main>

        <div class="formulaire">
            <h2>Passer le test d'admission</h2>
            <form method="post">
                <label for="id">Identifiant</label>
                <input type="text" name="id" placeholder="ex: 92md2019"/>
                <label for="id">Mot de passe</label>
                <input type="password" name="mdp" placeholder="********"/>
            </form>

            <a href="Qcm1.php" class="small_bouton_bleu">Valider</a>
        </div>

        <div class="center">
            <a href="cours.php" class="bouton_bleu ">Accès au cours</a>
        </div>

    </main>


</body>
</html>