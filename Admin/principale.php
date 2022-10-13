<?php include '../connexion_php_databases.php';?>
<?php
$message []  = "Ajouter un élève";
?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
       <!--  <link rel="stylesheet" href="style.css" media="screen" type="text/css" /> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" /> -->
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>

   
        <div class="img"></div>
   
       <!--  <div class="img" ></div>
        <img src="../img/logo-lareussite.png" alt="logo_page" width=90px>
        <a class="btn btn-primary" href="../site/index.php"  role="button">Accueil</a>

        <div id="content">
        <button><a href="../Admin/ajout_eleves.php" text-décoration="none">Ajouter un élève</a></button>
        <button><a href="../Admin/deconnect.php">Déconnecter</a></button> -->
        
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-primary" href="../site/index.php" role="button">Acceuil</a>
        </li>
        <li style="margin-left: 10px;" class="nav-item">
           <a class="btn btn-primary" href="../Admin/ajout_eleves.php" role="button">Ajout élève</a>
        </li>
        <li style="margin-left: 10px;" class="nav-item">
           <a class="btn btn-primary" href="../Admin/liste.php" role="button">Voir la liste des élèves inscrit</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
         <a class="btn btn-primary" href="../Admin/deconnect.php" role="button">Déconnexion</a>
      </form>
    </div>
  </div>
</nav>
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



    </body>
</html>