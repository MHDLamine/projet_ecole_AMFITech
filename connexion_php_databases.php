<?php
$servername = "localhost";
$username = "root";
$password = "gahdamns";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Gestion_ecole", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
} catch(PDOException $e) {
  echo "Connection échouée: " . $e->getMessage();
}
?>

