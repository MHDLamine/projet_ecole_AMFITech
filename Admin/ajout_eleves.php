<?php include '../connexion_php_databases.php';?>
<?php
  /*Insertion au niveau de la BD*/
  if($_POST)
  { 
    $prenom = $_POST['prenom'];
    $recup=$conn->exec("INSERT INTO eleves (prenom_eleves, nom_eleves,date_naissance_eleves,lieu_naissance_eleves,cycle_eleves,sexe, classe_eleves, date_inscription_eleves, montant_inscription_eleves)  
    VALUES('$_POST[prenom]','$_POST[nom]','$_POST[date_naissance_eleves]','$_POST[lieu_naissance_eleves]','$_POST[cycle_eleves]','$_POST[sexe]','$_POST[classe]','$_POST[date_inscrip]','$_POST[montant]')");
    echo  '<div style="background: green; padding: 5px;"> l\'eleve a bien été ajouté</div>' .'<br>'; 

    $sql = "SELECT id_eleves FROM `eleves` WHERE  prenom_eleves = '$prenom' ";
    $id = $conn->prepare($sql);
    $id->execute();
    $row = $id->fetch(PDO::FETCH_ASSOC);
    //on modifie le matricule
    $matricule = date('Y-', time()).$row['id_eleves'].'-EDR';
    //on modifie la derniere matricule du BD
    $sql2 = "UPDATE eleves  SET  matricule_eleves = '$matricule' WHERE prenom_eleves = '$prenom' ";
    $matricule2 = $conn->prepare($sql2);
    $matricule2->execute();
    $message []  = "inscription reussi, votre matricule: ". $matricule;
    $compte = true; 

  }
  /**Recuperation */
/*   $recup=$conn->query("SELECT * FROM eleves");
  $contenu = $recup->fetch(PDO::FETCH_ASSOC); */
  /**Affichage */
/*    $present = '';
  $absent = '';
  echo "<table border= 2px> <tr>";
  for($i=0; $i < $recup->columnCount(); $i++) 
  {
    $Nom_colonne = $recup->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }
    echo $present .='<th>Present</th>';
    echo $absent .='<th>Abcent</th>';
    echo "</tr>"; 
  while($ligne = $recup->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    foreach($ligne as $indice => $information)
    {
      echo '<td>' .$information . '</td>';
    }
    $action = 'Action';
    echo '<td>' . $action . '</td>';
    echo '<td>' . $action . '</td>';
    echo '</tr>';
  }
  echo '</table><br>'; */ 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajour élève</title>
</head>
<body>
<<<<<<< HEAD
</br>
</br>
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
=======



>>>>>>> main
<a class="btn btn-primary" href="../Admin/principale.php" role="button">Retour</a>

</br></br>
<h1 align=center> Ajout d'un nouveau élève</h1>
</br>

  <div class="container">

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
        <label for="inputEmail4" class="form-label">Date de nassance</label>
        <input type="date" class="form-control" id="inputEmail4" name="date_naissance_eleves" required>
    </div>
    <div class="col-md-3">
        <label for="inputPassword4" class="form-label">lieu de naissance</label>
        <input type="text" class="form-control" id="inputPassword4" name="lieu_naissance_eleves" required>
    </div>
        <div class="col-md-3">
        <label for="inputState" class="form-label">Cycle</label>
        <select id="inputState" class="form-select" name="cycle_eleves" required>
        <option value=" " selected></option>
        <option value="primaire">primaire</option>
        <option value="collège">collège</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Sexe</label>
        <select id="inputState" class="form-select" name="sexe" required>
        <option value=" " selected></option>
        <option value="M">Masculin</option>
        <option value="F">Féminin</option>
        </select>
    </div>
        <div class="col-md-3">
        <label for="inputState" class="form-label">Classe</label>
        <select id="inputState" class="form-select" name="classe" required>
        <option value=" " selected></option>
      <option value="CI">CI</option>
      <option value="CP">CP</option>
      <option value="CE1">CE1</option>
      <option value="CE2">CE2</option>
      <option value="CM1">CM1</option>
      <option value="CM2">CM2</option>
      <option value="6 ième">6 ième</option>
      <option value="5 ième">5 ième</option>
      <option value="4 ième">4 ième</option>
      <option value="3 ième">3 ième</option>
        </select>
    </div> 
    <div class="col-md-3">
        <label for="matricule" class="form-label">Date d'inscription</label>
        <input type="date" class="form-control" id="date_inscrip" name="date_inscrip"  required>
    </div>
    <div class="col-md-3">
        <label for="montant" class="form-label">Montant</label>
        <input type="number" class="form-control" id="date_naissance" name="montant" required>
    </div>
    <div class="col-12">
        <input type="submit" name="submit" class="btn btn-primary" value="Valider">
    </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>
</div>
<style>
  h1{
    color: white;
  }
  </style>
</body>
</html>
