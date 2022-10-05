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
  $recup=$conn->query("SELECT * FROM eleves");
  /*$contenu = $recup->fetch(PDO::FETCH_ASSOC);*/
  /**Affichage */
/*   $present = '';
  $absent = '';
  echo "<table border= 2px> <tr>";
  for($i=0; $i < $recup->columnCount(); $i++) 
  {
    $Nom_colonne = $recup->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }
    echo $present .='<th>Present</th>';
    echo $absent .='<th>Abcent</th>';
    echo "</tr>"; */
/*   while($ligne = $recup->fetch(PDO::FETCH_ASSOC))
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
  echo '</table>'; */
?>
   
   <form method="POST" action="">
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" placeholder="prenom" id="prenom" required=""><br><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" placeholder="nom" id="nom" required=""><br><br>
    <label for="date_naissance_eleves">Date de naissance <i></i></label><br>
    <input type="date" name="date_naissance_eleves" placeholder="ex: 2015-07-30" id="date_naissance_eleves"><br><br>
    <label for="nom">lieu de naissance</label><br>
    <input type="text" name="lieu_naissance_eleves" placeholder="lieu" id="lieu_naissance_eleves" required=""><br><br>
    <label for="classe">Cycle</label><br>
    <select name="cycle_eleves">
    <option value=""> </option>  
      <option value="Primaire">Primaire</option>
      <option value="Collège">Collège</option>
    </select><br><br>  
    <label for="sexe">Sexe</label><br>
    Masculin <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="m" checked=""> -
    Feminin <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="f"> <br><br>
    <label for="classe">Classe</label><br>
    <select name="classe">
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
  </select><br><br>
   
    <label for="date_inscrip">Date d'inscription <i></i></label><br>
    <input type="date" name="date_inscrip" placeholder="ex: 2015-07-30" id="prenom"><br><br>
    <label for="montant">Montant</label><br>
    <input type="text" name="montant" placeholder="montant" id="salaire"><br><br>
    <input type="submit"><br><br>
  </form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>
<link rel="stylesheet" href="eleves.css">
</body>
</html>