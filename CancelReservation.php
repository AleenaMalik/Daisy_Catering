<?php


	require '../Classes/ReservationClass.php';
        session_start();
	
	$MemberID =$_SESSION['MemberID'];
	$Date= $_POST['Date'];
	$Time= $_POST['Time'];
	$Event= $_POST['Event'];
	$Venue= $_POST['Venue'];
	$Package=$_POST['Package'];
        $Capacity= $_POST['Capacity'];
        
	


	
	
	$Reservation = new Reservation(NULL,$MemberID,$Date,$Time,$Event,$Venue,$Package,$Capacity);
	
	echo $Reservation->cancelReservationReservation();
        //echo $Reservation->loadReservation();
        
 ?>