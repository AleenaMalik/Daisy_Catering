<?php

class Event{
	var $EventID, $EventType, $Edate; 
	
	 function __construct($eventId,$date,$eventType){
		 $this->EventID = $eventId;
		 $this->Edate = $date;
		 $this->EventType = $eventType;
	 }
	 
	 #-------------GETTER/SETTERS------------
	 
	 function setEventID($eventId){
		 $this->EventID = $eventId;
	 }
	 
	 function getEventID(){
		 return $this->EventID;
	 }
	 
	 	 function setEdate($date){
		 $this->Edate = $date;
	 }
	 
	 function getEdate(){
		 return $this->Edate;
	 }
	 
	 	 function setEventType($eventType){
		 $this->EventType = $eventType;
	 }
	 
	 function getEventType(){
		 return $this->EventType;
	 }
	 
	 #-------------------SELECT/ADD/DELETE---------------------
}
