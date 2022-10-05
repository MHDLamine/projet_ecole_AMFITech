<?php
$message []  = "Ajouter un élève";
?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <img src="../img/logo-lareussite.png" alt="logo_page">
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['adresse_mail_administrateur'] !== ""){
                    $user = $_SESSION['adresse_mail_administrateur'];
                    // afficher un message
                    echo " <h1>Bonjour $user, vous êtes connecté <br> Bienvenu, vous avez le droit d'ajouter un élève </h1> " ;        
                }
            ?>
        </div>
        <button><a href="ajout_eleves.php" text-décoration="none">Ajouter un élève</a></button>
        <button><a href="deconnect.php">Déconnecter</a></button>
    </body>
</html>