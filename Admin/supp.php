<?php include '../connexion_php_databases.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
</body>
</html>