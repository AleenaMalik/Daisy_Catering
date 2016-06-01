<?php

class Testimonial{
    var $TestID, $Name, $Comment;
    
    function __construct($testid,$name,$comment){
        $this->TestID=$testid;
        $this->Name=$name;
        $this->Comment=$comment;       
        }
        
        #-----------------GETTERS/SETTERS-------------------
         function setTestimonialID($testid) {
               $this->TestID = $testid;
           }

           function setName($name) {
               $this->Name= $name;
           }

           function setComment($comment) {
               $this->Comment = $comment;
           }
            function getTestimonialID() {
               return $this->TestID;
           }
           

           function getName() {
               return $this->Name;
           }

           function getComment() {
               return $this->Comment;
           }
           
           #---------------------------saveTestimonial------------------------
           function saveTestimonial(){
		 
                $connection = new mysqli('localhost','Aleena','','daisycatering');
                    if($connection->connect_error){ die($connection->connect_error);}

                  $sql = "INSERT INTO `testimonials`(`TestID`, `Name`, `Comment`) VALUES"
                          ."( NULL,'".$this->Name."', '".$this->Comment."')";

                  $result=$connection->query($sql);
                  
                     if($result)
			return "done";
                    else
                        echo "Error: " . $sql . "<br>" . $connection->error;
			


                    $connection->close();
            
         
                }  
}

