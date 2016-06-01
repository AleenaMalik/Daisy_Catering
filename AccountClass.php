<?php

class User{
	 var $createMemberId, $firstName,$lastName, $NIC, $email, $phoneNo, $password;
	 
	 function __construct( $memID, $fname, $lname, $nic, $email, $phoneNo, $password ) {
	   $this->createMemberId = $memID;
	   $this->firstName = $fname;
	   $this->lastName = $lname;
	   $this->NIC = $nic;
	   $this->email = $email;
	   $this->phoneNo = $phoneNo;
	   $this->password = $password;}
	   
	   #---------------------------GETTER/SETTERS----------------------------
	  
	function setMemberId($memID){
		$this->createMemberId = $memID;}
	   
	function getMemberId(){
		return $this->createMemberId;}
		
	function setFirstName($fname){
		$this->firstName = fname;}
	   
	function getFirstName(){
		return $this->firstName;}
	
	function setLastName($lname){
		$this-> lastName= lname;}
		
	function getLastName(){
		return $this->lastName;}
		
	function setNIC($nic){
		$this->NIC = nic;}
		
	function getNIC(){
		return $this->NIC;}
		
	function setEmail($email){
		$this->email = email;}
		
	function getEmail(){
		return $this->email;}
		
	function setPhoneNo($phoneNo){
		$this->phoneNo = phoneNo;}
		
	function getPhoneNo(){
		return $this->phoneNo;}
		
	function setPassword($password){
		$this->password = password;}
		
	function getPassword(){
		return $this->password;}
	
	
		
	  
	#-------------------------------CREATE USER------------------------------	
		
	   
	function saveUser( ){
		 
		 $connection = new mysqli('localhost','Aleena','','daisycatering');
		if($connection->connect_error) die($connection->connect_error);
   
                    $query= "INSERT INTO account(`MemberID`, `First_Name`, `Last_Name`, `NIC`, `Email`, `phoneNo`, `Password`) 
                    VALUES('".$this->createMemberId."', '".$this->firstName."', '".$this->lastName."', '".$this->NIC."', '".$this->email."', '".$this->phoneNo."', '".$this->password."')";
                    $result = $connection->query($query);
					
                    if(!$result)
			return "error";
		else
			return "done";
 
		$connection->close();
		}
                
                #-------------------------------Load User----------------------------------------------------------
        
        function loadUser(){
            $connection = new mysqli('localhost','Aleena','','daisycatering');
            if($connection->connect_error){ die($connection->connect_error);}
            
            $query= "SELECT * FROM account WHERE MemberID='$this->createMemberId'";
            
            $result= $connection->query($query);
            
            $result->data_seek(0);
            
            $data= $result->fetch_array(MYSQLI_ASSOC);
            
            $this->NIC=$data['NIC'];
            $this->firstName=$data['First_Name'];
            $this->lastName=$data['Last_Name'];
            $this->email=$data['Email'];
            $this->phoneNo=$data['phoneNo'];
            $this->password=$data['Password'];

        }
		#-------------------------------Edit phoneNo, Email, Password---------------------------------------
		function editUserPhoneNo($phoneNo){
			$connection = new mysqli('localhost','Aleena','','daisycatering');
                         if($connection->connect_error){ die($connection->connect_error);}
			
			$updatePhoneNo = "UPDATE account SET phoneNo='$phoneNo' WHERE MemberID ='$this->createMemberId'";
                        $result= $connection->query($update);

		}
                
                function editUserEmail($email){
			$connection = new mysqli('localhost','Aleena','','daisycatering');
                         if($connection->connect_error){ die($connection->connect_error);}
			
			$updateEmail = "UPDATE account SET Email='$email' WHERE MemberID ='$this->createMemberId'";
                        $result= $connection->query($updateEmail);

		}
                
                function editUserPassword($password){
			$connection = new mysqli('localhost','Aleena','','daisycatering');
                         if($connection->connect_error){ die($connection->connect_error);}
			
			$updatePassword = "UPDATE account SET Password='$password' WHERE MemberID ='$this->createMemberId'";
                        $result= $connection->query($updatePassword);

		}
}


?>