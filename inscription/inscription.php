 <?php include '../connexion_php_databases.php';  ?>

<?php
if (isset($_POST['submit'])) { //isset permet de vérifier si la variable $_POST['submit'] existe
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];       
$email = $_POST['email']; 
$mdp = $_POST['mdp'];
$date_naissance = $_POST['date_naissance'];
$lieu_naissance = $_POST['lieu_naissance'];
$compte = false;
$profil = $_POST['profil'];
$matiere = $_POST['matiere'];
$matricule = /* date('Y- ', time()).$row.' -EDR'; */ 'générer automatiquement';
$select_mail = $conn->prepare("SELECT adresse_mail_Employes FROM `employes` WHERE adresse_mail_Employes = ? ");
$select_mail->execute([$email]);


if ($select_mail->rowCount() > 0)
{
    $message [] = "l'adresse mail existe déja";
}
else {
    //on insert les données dans la base
    $insertion = $conn->prepare("INSERT INTO `employes` (matricule_Employes,prenom_Employes, nom_Employes, 
    date_naissance_Employes, lieu_naissance_Employes,adresse_mail_Employes, profil_Employes, matiere_enseigne_Employes,mot_de_passe) VALUES (?,?,?,?,?,?,?,?,?)");
    $insertion->execute([$matricule, $prenom, $nom, $date_naissance, $lieu_naissance, $email, $profil, $matiere, $mdp ]);
    //on récuperer l'id de enregistrement 
    $sql = "SELECT id_Employes FROM `employes` WHERE  adresse_mail_Employes = '$email' ";
    $id = $conn->prepare($sql);
    $id->execute();
    $row = $id->fetch(PDO::FETCH_ASSOC);
    //on modifie le matricule
    $matricule = date('Y-', time()).$row['id_Employes'].'-EDR';
    //on modifie la derniere matricule du BD
    $sql2 = "UPDATE employes  SET  matricule_Employes = '$matricule' WHERE adresse_mail_Employes = '$email' ";
    $matricule2 = $conn->prepare($sql2);
    $matricule2->execute();

    $message []  = "inscription reussi, votre matricule: ". $matricule;
    $compte = true;  
}

}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="../style/inscription_style.css"> 

    <link rel="stylesheet" href="../style/inscription_style.css">

    <title>Inscription</title>
      
</head>
<body>
    <!--boutton de retour vers index--->
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
<br><br>

<!--*******************************************************************************************************************-->
<div class="container">
    <h3 align=center>S'inscrire</h3>

    <?php
    if (isset($message)) {
       foreach ($message as $message) {
        if ($compte == true) {
            echo '<div class="message">'. $message . '</div>';
        }
        else
        {
            echo '<div class="message_">'. $message . '</div>';
        }
          
       }
    }
    ?>

    <form method="post" action=""  class="row g-3">
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
        <input type="text" class="form-control" id="matricule" name="matricule" value="<?php echo $matricule  ?>" readonly>
    </div>
    <div class="col-6">
        <label for="date_naissance" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
    </div>
    <div class="col-6">
        <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
        <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
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
        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="envoyer">
    </div>
    </form>
     
</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>
</body>

</html>