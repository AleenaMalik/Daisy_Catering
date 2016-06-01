<?php
	require '../Classes/AccountClass.php';;
	$FirstName= $_POST['FirstName'];
	$LastName= $_POST['LastName'];
	$NIC= $_POST['NIC'];
	$PhoneNo= $_POST['PhoneNo'];
	$Email= $_POST['Email'];
	$CreateMemberID= $_POST['CreateMemberID'];
	$Password= $_POST['Password'];
	


	
	
	$user = new User($CreateMemberID,$FirstName,$LastName, $NIC,  $Email, $PhoneNo,  $Password);
	
	
	echo $user->saveUser();
        header('location: ../LoginPage.php');
	

?>