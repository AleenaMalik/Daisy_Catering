<?php
	require '/wamp64/www/NetBeansProjects/Classes/FoodClass.php';
	
	$Appetizer= $_POST['Appetizer'];
	$Entree= $_POST['Entree'];
	$SideOne= $_POST['SideOne'];
	$SideTwo= $_POST['SideTwo'];
	$Dessert= $_POST['Dessert'];
	$DrinkOne= $_POST['DrinkOne'];
        $DrinkTwo= $_POST['DrinkTwo'];
	


	
	
	$Mpackage = new FoodItems("",$Appetizer,$Entree,$SideOne,$SideTwo,$Dessert,$DrinkOne,$DrinkTwo);
	
	echo $Mpackage->savePackage();
        
	

?>