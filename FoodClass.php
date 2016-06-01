<?php

class FoodItems{
    var $PackageID,$Appetizer,$Entree,$SideOne,$SideTwo,$Dessert,$DrinkOne,$DrinkTwo;
    
     function __construct( $packageID,$appetizer, $entree, $sideOne, $sidetwo, $dessert, $drinkOne, $drinkTwo ) {
	   $this->PackageID = $packageID;
           $this->Appetizer = $appetizer;
	   $this->Entree = $entree;
	   $this->SideOne = $sideOne;
	   $this->SideTwo = $sidetwo;
	   $this->Dessert = $dessert;
	   $this->DrinkOne = $drinkOne;
	   $this->DrinkTwo = $drinkTwo;}

           #---------------------------GETTER/SETTERS----------------------------
	  function setPackagID($packageID){
		$this->PackageID = packageID;}
	   
	function getPackageID(){
		return $this->PackageID;}
	
           function setAppetizer($appetizer){
		$this->Appetizer = appetizer;}
	   
	function getAppetizer(){
		return $this->Appetizer;}
		
	function setEntree($entree){
		$this->Entree = entree;}
	   
	function getEntree(){
		return $this->Entree;}
	
	function setSideOne($sideOne){
		$this-> SideOne = sideOne;}
		
	function getSideOne(){
		return $this->SideTwo;}
		
	function setSideTwo($sideTwo){
		$this->SideTwo = sideTwo;}
		
	function getSideTwo(){
		return $this->SideTwo;}
		
	function setDessert($dessert){
		$this->Dessert = dessert;}
		
	function getDessert(){
		return $this->Dessert;}
		
	function setDrinkOne($drinkOne){
		$this->DrinkOne = drinkOne;}
		
	function getDrinkOne(){
		return $this->DrinkOne;}
		
	function setDrinkTwo($drinkTwo){
		$this->DrinkTwo = drinkTwo;}
		
	function getDrinkTwo(){
		return $this->DrinkTwo;}
	
	
		
	  
	#-------------------------------CREATE PACKAGE------------------------------
                
        	function savePackage(){
		 
                $connection = new mysqli('localhost','Aleena','','daisycatering');
                    if($connection->connect_error){ die($connection->connect_error);}

                  $sql = "INSERT INTO `menupackages` (`PackageID`, `Appetizer`, `Entree`, `SideOne`, `SideTwo`, `Dessert`, `DrinkOne`, `DrinkTwo`) VALUES"
               . "(NULL, '".$this->Appetizer."', '".$this->Entree."', '".$this->SideOne."', '".$this->SideTwo."', '".$this->Dessert."', '".$this->DrinkOne."', '".$this->DrinkTwo."')";

                  $result=$connection->query($sql);
                  
                    if ($result) {
                        echo "done";
                    } else {
                        echo "Error: " . $sql . "<br>" . $connection->error;
                    }


                    $connection->close();
            
         
                }  
             #-------------------------------Load Package----------------------------------------------------------
        
                
        function loadPackage(){
            $connection = new mysqli('localhost','Aleena','','daisycatering');
            if($connection->connect_error){ die($connection->connect_error);}
            
            $query= "SELECT * FROM MenuPackages WHERE PackageID='$this->PackageID'";
            
            $result= $connection->query($query);
            
            $result->data_seek(0);
            
            $data= $result->fetch_array(MYSQLI_ASSOC);
            
            echo $this->PackageID=$data['PackageID'];
            echo $this->Entree=$data['Entree'];
            echo $this->SideOne=$data['SideOne'];
            echo $this->SideTwo=$data['SideTwo'];
            echo $this->Dessert=$data['Dessert'];
            echo $this->DrinkOne=$data['DrinkOne'];
            echo $this->DrinkTwo=$data['DrinkTwo'];

        }
     }

   