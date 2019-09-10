<?php
// page index.php
session_start(); // Démarre le système de sessions et génére un numéro de session
//appeler cette fonction au tout début de chacune des pages où vous avez besoin des variables de session
// les variables
$_SESSION['lastName'] = 'Duwelz';
$_SESSION['firstName'] = 'Dorian';
$_SESSION['age'] = 30;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice2</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body> 
        <h3>Bienvenue sur notre site <?= $_SESSION['firstName']; ?> !</h3>
        <a href="<?= 'user.php?' . SID ?>">Vos informations.</a>     
    </body>
</html>