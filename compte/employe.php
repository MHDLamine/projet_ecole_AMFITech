<?php include '../connexion_php_databases.php';?>

<?php 
 session_start();

?>

<?php
     $sql = "SELECT * FROM classes";
     $stmt = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../style/employe.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Interface employe</title>
</head>

<body>



<div class="container">

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><?php  echo $_SESSION['email'];  ?></a>
    <form class="d-flex" role="search">
    <button class="btn btn-primary me-md-2" type="button" ><a href="deconnexion_employe.php" style="color:white;text-decoration:none;"> Deconnexion</a></button>
    </form>
  </div>
</nav>

    <div class="row">
        <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Profil</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Liste des classes</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Feuilles de presence</a>
                </div>
        </div>
        <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                          <!-- coté Back-End -->
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                       <!-- coté Back-End -->
                                       <table class="table" >
                                <thead>
                                <tr class="table-danger">
                                <th scope="col">Matricule </th>
                                <th scope="col">Libelés</th>
                                <th scope="col">nombre d'élèves</th>
                                <th>Editer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                                        <tr>
                                        <th><?php echo htmlspecialchars($row['id_classes']); ?></th>
                                        <td><?php echo htmlspecialchars($row['libelle_classes']); ?></td>
                                        <td><?php echo htmlspecialchars($row['nombre_eleve_classes']); ?></td>
                                        <td><span class="material-symbols-outlined" style="color: red;cursor:pointer;">delete</span> || <span class="material-symbols-outlined" style="color:blue;cursor:pointer;">edit_square</span></td>
                                        </tr>
                                        <?php endwhile; ?>
                                        
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                 <!-- coté Back-End -->
                               
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                 <!-- coté Back-End -->
                        </div>
                </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        



<?php include '../connexion_php_databases.php';?>



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







