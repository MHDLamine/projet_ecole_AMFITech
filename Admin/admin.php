<?php include '../connexion_php_databases.php';?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion_ecole";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  /* set the PDO error mode to exception */
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO administrateur (adresse_mail_administrateur, mot_de_passe_administrateur)
  VALUES ('mouhamed.ngom50@gmail.com','1111')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Enregistrement réussi";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
