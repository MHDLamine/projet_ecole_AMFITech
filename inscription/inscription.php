<?php include '../connexion_php_databases.php';?>

<?php
if (isset($_POST['submit'])) {
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$matricule = $_POST['matricule'];
$date_naissance = $_POST['date_naissance'];
$lieu_naissance = $_POST['lieu_naissance'];
$adresse = $_POST['adresse'];
$profil = $_POST['profil'];
$matiere = $_POST['matiere'];

$select_matricule = $conn->prepare("SELECT matricule_Employes FROM `employes` WHERE matricule_Employes = ? ");
$select_matricule->execute([$matricule]);
if ($select_matricule->rowCount() > 0)
{
    $message [] = "compte existante";
}
else {
    $insertion = $conn->prepare("INSERT INTO `employes` (matricule_Employes,prenom_Employes, nom_Employes, 
    date_naissance_Employes, lieu_naissance_Employes,adresse_mail_Employes, profil_Employes, matiere_enseigne_Employes,mot_de_passe) VALUES (?,?,?,?,?,?,?,?,?)");
    $insertion->execute([$matricule, $prenom, $nom, $date_naissance, $lieu_naissance, $adresse, $profil, $matiere, $mdp ]);
    $message []  = "inscription reussi";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
      
</head>
<body>
 
    <!--**********************************************************formulaire ******************************************-->
   <div class="container">
            <form> 
            <br><br>
            <div class="mb-3">
            <div class="row">
             <div class="col">
            <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom">
    </div>
  <div class="col">
      <input type="text" class="form-control" placeholder="Nom" aria-label="Nom">
  </div>
</div>

  
  <div class="mb-3">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="mb-3">
    <label for="validationCustom04" class="form-label">Sexe</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected enable value="">M</option>
      <option>F</option>
    </select>
    <div class="invalid-feedback">
      Merci de définir votre sexe.
    </div>
  </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">addresse mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
            </form>

            <h4><p> Date de naissance     :   </h4></p>    <input type="text" name="date" class="calendrier" ><br/>
            <h4><p>Adresse             :   </h4></p>     <input type="text" name="adresse"><br/>
            <h4><p>Telephone          :    </h4></p>    <input type="text" name="phone"><br/>
            <h4><p>pseudo            :      </h4></p>  <input type="text" name="pseudo"><br/>
            <h4><p>mot de passe      :     </h4></p>   <input type="password" name="mdp"><br/>
   </div>
    

</body>

<?php include("index.php"); ?>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/i_style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h3>S'inscrire</h3>

    <?php
    if (isset($message)) {
       foreach ($message as $message) {
        if ($message  == "inscription reussi") {
            echo '<div class="message">'. $message . '</div>';
        }
        else
        {
            echo '<div class="message_">'. $message . '</div>';
        }
          
       }
    }
    ?>

    <form method="post" action="" enctype="multipart/form-data" class="row g-3">
    <div class="col-md-6">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="col-md-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" required>
    </div>
    <div class="col-md-3">
        <label for="inputPassword4" class="form-label">mot de passe</label>
        <input type="password" class="form-control" id="inputPassword4" name="mdp" required>
    </div>
    <div class="col-md-3">
        <label for="matricule" class="form-label">matricule</label>
        <input type="text" class="form-control" id="matricule" name="matricule" required>
    </div>
    <div class="col-6">
        <label for="date_naissance" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
    </div>
    <div class="col-6">
        <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
        <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
    </div>

    <div class="col-md-6">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Profil</label>
        <select id="inputState" class="form-select" name="profil" required>
        <option value=" " selected></option>
        <option value="enseignant">enseignant</option>
        <option value="surveillant">surveillant</option>
        
        </select>
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Matière enseignée</label>
        <select id="inputState" class="form-select" name="matiere" required>
        <option value=" " selected></option>
        <option>français</option>
        <option>Anglais</option>
        <option>mathématique</option>
        <option>physique-chimie</option>
        <option>Histoire-Géographie</option>
        <option>education physique</option>
        <option>Arabe</option>
        </select>
    </div>
    
    <div class="col-12">
        <input type="submit" name="submit" class="btn btn-primary" value="envoyer">
    </div>
    </form>
 

</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>
</body>

</html>