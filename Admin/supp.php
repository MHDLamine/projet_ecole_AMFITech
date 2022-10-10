<?php include '../connexion_php_databases.php';?>

  <?php

if(isset($_GET["id"]))
  {
    $id= $_GET["id"];
    if(!empty($id) && is_numeric($id))
      {
        $query="delete from eleves where id=$id";
        $conn->exec($query);
      }
  }

  ?>
