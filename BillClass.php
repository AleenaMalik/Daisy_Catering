<?php

class Bill{
	var $TotalAmount;
	
	function __construct($totalAmount){
		$this->TotalAmount = $totalAmount;
	}
	
	#-----------------GETTER/SETTER--------------
	
	function setTotalAmount($totalAmount){
		$this->TotalAmount = $totalAmount;
	}
	
	function getTotalAmount(){
		return $this->TotalAmount;
	}
	
	#---------------------CALC TOTAL-----------
}
?>