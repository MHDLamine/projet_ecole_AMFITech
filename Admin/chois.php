<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
try  //Connection a la bdd
{
  $bdd = new PDO('mysql:host=localhost;dbname=Gestion_ecole;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM eleves WHERE archive = 0');
while ($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
              {
                echo '<tr>';
                echo '<td class="tdliste">' . $donnees['id_eleves'] . '</td>';
                echo '</tr>';
              }
echo '<a href="supprimer.php? id=' . $donnees["id_eleves"] . ' " onclick="confirmer()"><span class="material-symbols-outlined">
delete
</span></a>';
echo '<a href="liste.php">Annuler</a>';
?>
</body>
</html>