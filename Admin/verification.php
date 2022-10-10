<?php include '../connexion_php_databases.php';?>
<?php
session_start();
if(isset($_POST['adresse_mail_administrateur']) && isset($_POST['mot_de_passe_administrateur']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion_ecole";
$db = mysqli_connect($servername, $username, $password,$dbname)
or die('could not connect to database');

try {
  $conn = new PDO("mysql:host=$servername;dbname=Gestion_ecole", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " <h1>Bienvenu a la base de donnée de l'établissement</h1> <br>";

} catch(PDOException $e) {
  echo "Connection à la BD échouée: " . $e->getMessage();
}
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['adresse_mail_administrateur'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot_de_passe_administrateur']));
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM administrateur where 
              adresse_mail_administrateur = '".$username."' and mot_de_passe_administrateur = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['adresse_mail_administrateur'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>