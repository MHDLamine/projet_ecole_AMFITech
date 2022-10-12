

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        
    </head>
    
    <body>
    <a class="btn btn-primary" href="../site/index.php" role="button">Retour</a>
        
        <div id="container">
            <!-- zone de connexion -->    
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="adresse_mail_administrateur" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe_administrateur" required>
                <input type="submit" id='submit' value='Se connecter' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>

    <style>
     .button {
  background-color: #1abc9c;
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
</html>