<?php
                if($_SESSION['adresse_mail_administrateur'] !== ""){
                    session_unset();
                    header("location:login_admin.php");
                    session_destroy(); 
                  }
?> 
        
