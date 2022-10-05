<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion_ecole";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Gestion_ecole", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " <h1>Bienvenu a la base de donnée de l'établissement</h1> <br>";
} catch(PDOException $e) {
  echo "Connection échouée: " . $e->getMessage();
}
?>