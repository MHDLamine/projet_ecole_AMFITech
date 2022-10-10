
        <?php
            
                if($_SESSION['email'] !== ""){
                  session_unset();
                  header("location:connexion_employe.php");
                  session_destroy(); 
                }
        ?> 