<?php

class Venue{
	var $VenueID, $Location, $Capacity;
	
	function __construct($venueID,$location,$capacity){
		$this->VenueID = $venueID;
		$this->Location = $location;
		$this->Capacity = $capacity;
	}
	
	#------------------------GETTER/SETTERS-------------------
	
	function setVenueID($venueID){
            $this->VenueID = $venueID;
	}
	
	function getVenueID(){
            return $this->VenueID;
	}
	
	function setLocation($location){
            $this->Location = $location;
	}
	
	function getLocation(){
            return $this->Location;
	}
	
            function setCapacity($capacity){
            $this->Capacity = $capacity;
	}
	
	function getCapacity(){
            return $this->Capacity;
	}
	
	#--------------------------------------Check/Edit---------------------
        function addVenue(){   
            		 $connection = new mysqli('localhost','Aleena','','daisycatering');
		if($connection->connect_error) die($connection->connect_error);
   
                    $query= "INSERT INTO venue(VenueId, VenueName, Capacity, Location) 
                    VALUES ('".$this->VenueID."', '".$this->Location."', '".$this->Capacity."')";
                    $result = $connection->query($query);
					
                    if(!$result)
			return "error";
		else
			return "done";
 
		$connection->close();
		}
        }
        
        function deleteVenue(){            
        }

?>