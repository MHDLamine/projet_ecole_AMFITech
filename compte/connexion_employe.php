<?php include '../connexion_php_databases.php';?>

<?php 

$compte = false;
    if(isset($_POST['email']) && $_POST['mdp'])
    {

      $email = htmlspecialchars($_POST['email']);
      $mdp = htmlspecialchars($_POST['mdp']);
      $verif = $conn -> query("SELECT adresse_mail_employes, mot_de_passe from employes where adresse_mail_employes='$email' AND mot_de_passe='$mdp'");
      $pseudo = $conn -> query("SELECT prenom_Employes from employes where adresse_mail_employes='$email' AND mot_de_passe='$mdp'");
      $row = $pseudo->fetch(PDO::FETCH_ASSOC);
      
if($verif->rowCount() > 0) {
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['mot_de_passe'] = $mdp;
  header('location:employe.php');
}
else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $message [] = 'mail invalide';   
    }
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
       $message [] = 'mot de passe invalide';
    }
}
  $verif->closeCursor();   
 
} 
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/i_employee.css">
   
</head>
<body>
<a class="btn btn-primary" href="../site/index.php" role="button">Accueil</a>

    <div class="box">
       <div class="login">

        <h1 class="text-center">Connexion</h1>
        <form method='post' action="" class="needs-validation">
            <div class="form-group ">
                <label class="form-label" for="email">Adresse mail</label>
                <input class="form-control" type="text" id="email" name='email' required>
            </div>
            <div class="form-group ">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" id="password" name='mdp' required>
            </div>
            <input class="btn1" type="submit" value="S'identifier">


        </form>
    </div>
  </div>
</body>
</html>



<?php
  if (isset($message)) {
       foreach ($message as $message) {
    
            echo '<div class="message_">'. $message . '</div>';
        }
          
       }
    
    ?>

        </form>
    </div>
  </div>
</body>
</html>


