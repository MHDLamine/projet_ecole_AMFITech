<?php include '../connexion_php_databases.php';?>
<?php
// ouverture de la connexion
$sql = "UPDATE eleves SET 
            prenom_eleves = :prenom_eleves, 
            nom_eleves = :nom_eleves 
        WHERE id_eleves = :id_eleves";
$statement = $conn->prepare($sql);
foreach ($_POST['id_eleves'] as $id_eleves) {
      $statement->execute(['id_eleves'=>$id_eleves, 'prenom_eleves'=> $_POST['prenom_eleves'][$id_eleves], 'nom_eleves' => $_POST['nom_eleves'][$id_eleves]]);
    }
// modification des données
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // création de la requête
  $sql = "UPDATE eleves SET prenom_eleves = :prenom_eleves, nom_eleves = :nom_eleves WHERE id_eleves = :id_eleves";
  $statement = $conn->prepare($sql);
  // envoi des requêtes
  foreach ($_POST['id_eleves'] as $id_eleves) {
    $nom = $_POST['prenom_eleves'][$id_eleves] ?? '';
    $prenom = $_POST['nom_eleves'][$id_eleves] ?? '';
  }
}
// création de la requête
$sql = "SELECT * FROM eleves";
// envoi de la requête
$statement = $conn->prepare($sql);
$statement->execute();
$liste_eleves = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<form action='' method='post' class="">
    <h1>Page pour la modification</h1>
  <ul>
    <?php foreach ($liste_eleves as $eleves) { ?>
      <li>
        <input type="hidden" value="<?= $eleves->id_eleves; ?>" name="id_eleves[]" />
        <input type="text" value="<?= $eleves->prenom_eleves; ?>" name="prenom_eleves[<?= $eleves->id_eleves; ?>]" />
        <input type="text" value="<?= $eleves->nom_eleves; ?>" name="nom_eleves[<?= $eleves->id_eleves; ?>]" />
      </li>
    <?php } ?>
  </ul>
  <div><input type='submit' value='modifier' /></div>
</form>