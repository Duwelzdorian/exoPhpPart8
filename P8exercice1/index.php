<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <div>
        <form action="user.php" method="GET">
            <p><strong> &#9642; User agent : </strong><?= $_SERVER[HTTP_USER_AGENT]; ?></p>
            <p><strong> &#9642; Adresse IP : </strong><?= $_SERVER[SERVER_ADDR]; ?></p>
            <p><strong> &#9642; Nom du serveur : </strong><?= $_SERVER[SERVER_NAME]; ?></p>              
        </form>
	</div>
    </body>
</html>


