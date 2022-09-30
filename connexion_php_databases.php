<?php
$serveur = "localhost:8090";
$utilisateur = "root";
$mpd = "";

// Create connection
$conn = new mysqli($serveur, $utilisateur, $mpd);

// Check connection
if ($conn->connect_error) {
  die("Connexion échouée: " . $conn->connect_error);
}
echo "BD Connecté";
?>