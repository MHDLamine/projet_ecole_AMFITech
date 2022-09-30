<?php include '../connexion_php_databases.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="i_style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="post" action="inscription.php" class="row g-3">
    <div class="col-md-6">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div class="col-md-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">mot de passe</label>
        <input type="password" class="form-control" id="inputPassword4" name="mdp">
    </div>
    <div class="col-6">
        <label for="date_naissance" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance" >
    </div>
    <div class="col-6">
        <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
        <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" >
    </div>

    <div class="col-md-6">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse">
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Profil</label>
        <select id="inputState" class="form-select" name="profil">
        <option selected>...</option>
        <option >enseignant</option>
        <option>surveillant</option>
        
        </select>
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Matière enseignée</label>
        <select id="inputState" class="form-select" name="matiere">
        <option selected>...</option>
        <option>français</option>
        <option>Anglais</option>
        <option>mathématique</option>
        <option>physique-chimie</option>
        <option>Histoire-Géographie</option>
        <option>education physique</option>
        <option>Arabe</option>
        </select>
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
    </form>

</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>
</body>
</html>