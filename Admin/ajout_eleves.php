<?php include '../connexion_php_databases.php';?>
<?php
  /*Insertion au niveau de la BD*/
  if($_POST)
  {
    $recup=$conn->exec("INSERT INTO eleves (prenom_eleves, nom_eleves,date_naissance_eleves,lieu_naissance_eleves,cycle_eleves,sexe, classe_eleves, date_inscription_eleves, montant_inscription_eleves)  
    VALUES('$_POST[prenom]','$_POST[nom]','$_POST[date_naissance_eleves]','$_POST[lieu_naissance_eleves]','$_POST[cycle_eleves]','$_POST[sexe]','$_POST[classe]','$_POST[date_inscrip]','$_POST[montant]')");
    echo  '<div style="background: green; padding: 5px;"> l\'eleve a bien été ajouté</div>' .'<br>'; 
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
    <div class="col-6">
        <label for="montant" class="form-label">Montant</label>
        <input type="number" class="form-control" id="date_naissance" name="montant" required>
    </div>
    <div class="col-12">
        <input type="submit" name="submit" class="btn btn-primary" value="envoyer">
    </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>

</body>
</html>
