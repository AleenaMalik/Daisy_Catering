<?php
include '../Classes/AccountClass.php';
session_start();
$connection = new mysqli('localhost','Aleena','','daisycatering');
 
 if($connection->connect_error){ die($connection->connect_error);}
 
        
        $memberId = mysqli_real_escape_string($connection,$_POST['memberId']);
        $password = mysqli_real_escape_string($connection,$_POST['pass']); 

        $query = "SELECT * FROM account WHERE MemberID = '$memberId' AND Password = '$password'";
        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if($count == 1){
            $user = new User($memberId,"","", "",  "", "",  "");
            $user->loadUser();
            
            $_SESSION['User']= $user;            
            $_SESSION['Password'] = $password;
            $_SESSION['MemberID'] = $memberId;
             header('location: ../createReservation.php');}
        
        else{
            
            header('location: C:\wamp64\www\NetBeansProjects\LoginPage.php');
        }
       
                

    
    $connection->close();
    
