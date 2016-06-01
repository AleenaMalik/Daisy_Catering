<?php

class Reservation{
    var $ReservationID,$MemberID,$rDate,$rTime,$EventID,$VenueID,$PackageID,$Capacity;
    
     function __construct( $reservationID,$memberID, $rdate, $rtime, $eventID, $venueID, $packageID, $capacity ) {
	   $this->ReservationID = $reservationID;
           $this->MemberID= $memberID;
	   $this->rDate = $rdate;
	   $this->rTime = $rtime;
	   $this->EventID = $eventID;
	   $this->VenueID = $venueID;
	   $this->PackageID = $packageID;
           $this->Capacity = $capacity;
     }

           #---------------------------GETTER/SETTERS----------------------------
	 function setReservationID($reservationID) {
               $this->ReservationID = $reservationID;
           }

           function setMemberID($memberID) {
               $this->MemberID = $memberID;
           }

           function setRDate($rDate) {
               $this->rDate = $rDate;
           }

           function setRTime($rTime) {
               $this->rTime = $rTime;
           }

           function setEventID($eventID) {
               $this->EventID = $eventID;
           }

           function setVenueID($venueID) {
               $this->VenueID = $venueID;
           }

           function setPackageID($packageID) {
               $this->PackageID = $packageID;
           }
           
           function getReservationID() {
               return $this->ReservationID;
           }

           function getMemberID() {
               return $this->MemberID;
           }

           function getRDate() {
               return $this->rDate;
           }

           function getRTime() {
               return $this->rTime;
           }

           function getEventID() {
               return $this->EventID;
           }

           function getVenueID() {
               return $this->VenueID;
           }

           function getPackageID() {
               return $this->PackageID;
           }
           
           function getCapacity(){
               return $this->Capacity;
           }
           
            function setCapacity($Capacity) {
               $this->Capacity = $Capacity;
           }
          

           		
	  
	#-------------------------------CREATE PACKAGE------------------------------
                
        	function saveReservation(){
		 
                $connection = new mysqli('localhost','Aleena','','daisycatering');
                    if($connection->connect_error){ die($connection->connect_error);}

                  $sql = "INSERT INTO `reservation`(`ReservationID`, `MemberID`, `rDate`, `rTime`, `EventType`, `VenueName`, `PackageID`, `Capacity`) VALUES"
                          ."( NULL, '".$this->MemberID."', '".$this->rDate."', '".$this->rTime."', '".$this->EventID."', '".$this->VenueID."', '".$this->PackageID."', '".$this->Capacity."')";

                  $result=$connection->query($sql);
                  
                     if($result)
			return "done";
                    else
                        echo "Error: " . $sql . "<br>" . $connection->error;
			


                    $connection->close();
            
         
                }  
             #-------------------------------Load Package----------------------------------------------------------
        
                
        function loadReservation(){
            $connection = new mysqli('localhost','Aleena','','daisycatering');
            if($connection->connect_error){ die($connection->connect_error);}
            
            $query= "SELECT * FROM `reservation` WHERE  MemberID='$this->MemberID'";
            
            $result= $connection->query($query);
            
            $result->data_seek(0);
            
            $data= $result->fetch_array(MYSQLI_ASSOC);
            
            echo $this->ReservationID=$data['ReservationID'];
            echo $this->MemberID=$data['MemberID'];
            echo $this->rDate=$data['rDate'];
            echo $this->rTime=$data['rTime'];
            echo $this->EventID=$data['EventType'];
            echo $this->VenueID=$data['VenueName'];
            echo $this->PackageID=$data['PackageID'];
            echo $this->Capacity=$data['Capacity'];

        }
        #------------------------------------------Cancel Package----------------------------
        
        function cancelReservation(){
            $connection = new mysqli('localhost','Aleena','','daisycatering');
            if($connection->connect_error){ die($connection->connect_error);}
            
            $query= "UPDATE `reservation` SET `Status`=0 WHERE MemberID='$this->ReservationID'";           
            $result= $connection->query($query);
             if($result){
                return "done";}
             else{
                echo "Error: " . $query ."<br>" . $connection->error;}
			

                    $connection->close();
            
        }
     }

    