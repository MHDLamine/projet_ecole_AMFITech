<?php
include '../connexion_php_databases.php';

// var_dump($_GET["id"]);die;

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if(!empty($id) && is_numeric($id)){
            include("connexion_php_databases.php");
                $list = "UPDATE eleves SET archive = '1' where id_eleves=$id";
                $result = $conn->query($list);
                header("Location:liste.php");
        }
    }

?>