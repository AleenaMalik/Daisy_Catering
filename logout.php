
<?php

session_start();
$connection = new mysqli('localhost','Aleena','','daisycatering');
 
 
     
           
            if(isset($_GET["logout"]) && $_GET["logout"] === "yes")
            {
            session_destroy();
            unset($_SESSION['MemeberID']);
            
            }
            
            header('location: ../index.php');

           
    
?>

