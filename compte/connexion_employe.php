<?php include '../connexion_php_databases.php';?>

<?php 

$compte = false;
    if(isset($_POST['email']) && $_POST['mdp'])
    {

      $email = htmlspecialchars($_POST['email']);
      $mdp = htmlspecialchars($_POST['mdp']);
      $verif = $conn -> query("SELECT adresse_mail_employes, mot_de_passe from employes where adresse_mail_employes='$email' AND mot_de_passe='$mdp'");

if($verif->rowCount() > 0) {

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
<html lang="en">

<head>

    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/c_employe.css">
</head>
<body>
<a href="../site/index.php" class="button">Retour à l'acceuil</a>
<style>
.button {
  background-color: #1c87c9;
  border: none;
  color: white;
  padding: 20px 34px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<?php
  if (isset($message)) {
       foreach ($message as $message) {
    
            echo '<div class="message_">'. $message . '</div>';
        }
          
       }
    
    ?>
    <div class="box">
       <div class="login">

        <h1 class="text-center">Bonjour</h1>

        <form method='post' action="" class="needs-validation">
            <div class="form-group ">
                <label class="form-label" for="email">Adresse mail</label>
                <input class="form-control" type="text" id="email" name='email' required>
            </div>
            <div class="form-group ">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" id="password" name='mdp' required>
            </div>
            <input class="btn" type="submit" value="S'identifier">


        </form>
    </div>
  </div>
</body>
</html>

