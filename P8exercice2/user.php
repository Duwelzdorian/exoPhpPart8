<?php
// page user.php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice2</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body> <?php
        foreach ($_SESSION as $key => $value):
            ?>
            <p><?= '&#9642; ' . $key . ' : ' . $value ?></p>
            <?php
        endforeach;
        ?>
        <a href="<?= 'index.php?' . SID ?>">Retour à l'accueil</a>

    </body>
</html>