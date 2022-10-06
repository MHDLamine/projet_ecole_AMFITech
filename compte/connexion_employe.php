<?php include '../connexion_php_databases.php';?>

<?php 

    if(isset($_POST['adresse_mail_Employes']) && $_POST['mot_de_passe'])
    {

      $email = htmlspecialchars($_POST['adresse_mail_employes']);
      $mdp = htmlspecialchars($_POST['mot_de_passe']);
      $verif = $bdd -> prepare("SELECT adresse_mail_employes, mot_de_passe from employes where adresse_mail_employes = ? AND mot_de_passe = ?");
      $verif -> execute(array('adresse_mail_employes', 'mot_de_passe'));
      $data = $verif -> fetch();

      if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $mdp != $data["mot_de_passe"])
      {
          echo 'mail ou Mot De Passe incorrect.<br/>';
      }
      else
      {
          echo 'Vous êtes connecté ! :-)<br/>';
      }
      $req->closeCursor();
  }
  else
  {
      echo 'Renseignez un mail et un Mot De Passe.<br/>';
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
    <div class="login">

        <h1 class="text-center">Bonjour</h1>

        <form method='post' class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Adresse mail</label>
                <input class="form-control" type="email" id="email" required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" id="password" required>
               
            </div>
            <input class="btn" type="submit" value="S'identifier">
        </form>

    </div>

</body>

</html>