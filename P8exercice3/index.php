<?php
// On démarre les cookies AVANT d'écrire du code HTML
foreach($_GET as $key=>$value):
setcookie($key, $value, time() + 24*3600, '/', 'Part8', false, true); // On écrit un cookie
endforeach;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp3</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" href="exo3.css">
    </head>
    <body> 
        
        <?php
 
 if (isset($_GET['login']) AND isset($_GET['password']))
 {
     ?><p><?= 'Identifiant : '.$_COOKIE['login'];?></p>
         <p><?= 'Mot de passe : '.$_COOKIE['password'];?></p>
             <?php
     
 } else {
     
     ?>      
        <div class="card mx-auto" id="connection" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title font-weight-bolder text-white">Se connecter</h5>
    <form method="get" action="index.php" name="formulaire" id="register_form">
        <p><label for="login"><I>Login</I></label> <input type="text" name="login" id="login" placeholder="Pseudo" required />
    </p>
    
    <p><label for="password"><I>Mot de passe</I></label><input type="password" name="password" id="password" required/></p>
    <p><label for="confirmPassword"><I>Confirmation</I></label><input type="password" name="confirmPassword" id="confirmPassword" required/></p>
    <p class="card-text"><small class="text-white">Entre 8 et 15 caractères, contenant au moins une minuscule et une majuscule, un chiffre et un caractère spécial.</small></p>

    <p><br /><button onclick="checkPassword()" id="submitForm" type="submit" name="button" class="float-right rounded-circle">Valider</button></p>
  </form>
    </div>
</div>
         <?php }
        
        ?>
        
        

<!-- A utiliser dans du php. Cela sert à afficher de façon détaillée ce que contient le tableau POST
var_dump($_POST);-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="exo3.js"></script>
</body>
</html>