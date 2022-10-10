<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion_ecole";
try {
  $conn = new PDO("mysql:host=$servername;dbname=Gestion_ecole", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection à la BD échouée: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  
</head>
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
<body>
  
</body>
</html>
  

