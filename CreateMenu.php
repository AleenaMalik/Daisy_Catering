<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');?> 
<!DOCTYPE html>
<head>
	<title> Create A Reservation </title>
           <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="css/jquery-2.2.3.min.js"></script>
        <script src="css/jquery.min_2.js"></script>
        <script type="text/javascript" src="css/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="css/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">       
        <link rel="stylesheet" type="text/css" href="css/main.css">
	<style type= "text/css">
        .date-form{
        margin: 10px;}
        
        label.control-label span{ 
        cursor: pointer;}
        
	.EntireScreen{
	width: 100%;
	height: 220%;
	background-image: url("Images/Background2.png");
        background-attachment: fixed;}
	
	.Banner{
	width:80%;
	height:175px;
	margin: auto 10% auto 10%;
	background-color: white;
	text-align:center;
	border-color:blue;
	border-style:double;}
    
        .viewaccount{
        margin:-150px 0px 0px 902px;
        width:20%;}
      
	.Logo{
	background-color: white;
        margin-top:10px;}
	
	.DaisyCatering{
	width: 30%;
	margin: 0px auto 0px auto;
	font-size: 45px;
	background-color: white;}
       
	.TotalnavBar {
        position: relative;
        top: 0px;
        height: 2%;
        width: 100%;
        margin: 25px -77px;}
		
	.navBar{
        float: left;
        width: 16.65%;
        height: 100%;
        margin: 1px 0px;}
	
	.tab{
	font-size: 20px;
        position: relative;
        top: -23px;
        left: 50px;}
	
	.tabText{
	text-decoration: none;
        color: black;
        font-family: 'Century Gothic', sans-serif;
        font-size: 20px;
        font-variant: small-caps;
        font-weight: 400;}
        
        .signup{
        margin:-150px 20px 0px 1000px;
        width:12%;
        float:right;}
	
	.Content{
	width: 80%;
        margin: 10px 10% auto 10%;
	background-color: white;
	border-color:blue;
	border-style:double;}
    
        .CreateMenu{
         margin:50px auto 0px auto;
         font-size:35px;
         width:50%;}
         
        .form{
        margin:30px auto 0px auto;
        width:35%;}

	.form-group{   
	margin:40px auto auto 417px;}
	
        .textbox{
        height:40px;
        width:300px;}

    	.button{
	margin: 50px auto 10px auto ;
        width:20%;}
      
	.buttonstyle{
        background-color: dfdee8;
        border: white;
        padding: 8px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 6px 2px;
        cursor: pointer;}

	.Slideshow{
	height:30%;
	width: 100%;
	margin: 5% auto auto auto;
	background-color: purple;}
	
	.Welcome{
	height: 20%;
	width: 80%;
	text-align: center;
	margin: 5% 10% -15% 10%;}
	
	.MiniSlides{
	height:30%;
	width: 30%;
	margin: 15% 1% -5% 1%;
	float: right;
	background-color: purple;}
	
	.Footer{
	width: 80%;
        margin: 10px 10% auto 10%;
        height: 75px;
	background-color: white;
	border-color:blue;
	border-style:double;}
	
	.FooterText{
        text-decoration: none;
        color: black;
        font-size: 15px;
        margin-top: 30px;
        margin-left: 315px;
        font-family:'Century Gothic', sans-serif;
        font-size: 18px;
        font-variant: small-caps;}
	
	a.BottomLinks {
	color: black;
	text-decoration: none;}
	
	h1{
	font-variant: small-caps;}
	
	h2{
	font-variant: small-caps;}
	
	h3{
	font-variant: small-caps;}
	
	p{
	font-family: 'Century Gothic', sans-serif;
	}
	
	
	</style>
        <script src="/css/jquery-1.12.3.min.js"></script>
	<script type="text/javascript">	
            var main = function(){
            $('#confirm').click(function(){
                alert("it works");
            $.ajax({
            type: "POST",
            url: "WorkerPHP/NewMenuPackage.php",
            data: { 
                    
                    Appetizer: document.getElementById("Appetizer").value,
                    Entree: document.getElementById("Entree").value,
                    SideOne: document.getElementById("SideOne").value,
                    SideTwo: document.getElementById("SideTwo").value,
                    Dessert: document.getElementById("Dessert").value,
                    DrinkOne: document.getElementById("DrinkOne").value,
                    DrinkTwo: document.getElementById("DrinkTwo").value},
                
                
            cache: false,
            success: function(result){	
		if(result==="done"){
		alert("done");
                window.location.href="Confirmation.php" ;}
		else
		alert(result);},
            error: function (jqXHR, textStatus, errorThrown) {
                        alert("error big");
                    }
		});
		});
	};	
	$(document).ready(main);
</script>
</head>

<body>
        <div class="EntireScreen">
            <div class="Banner">        
                <div class="Logo">
                            <img src="Images/logo1.jpg" alt="Daisy Logo" style="height:40px; width:60px">
			</div>
			<p class="DaisyCatering"><u> Daisy Catering</u></p>
			
			<div class="TotalnavBar">
				<div class="navBar">
                                    <p class="tab"> <a class="tabText"  href="index.php">Home</a></p>
				</div>
					
				<div class="navBar">
                                    <p class="tab"> <a class="tabText" href="menu.php">Menu</a></p>
				</div>
					
				<div class="navBar">
                                    <p class="tab"><a class="tabText"  href="venue.php">Venue</a></p>
				</div>
					
				<div class="navBar">
                                    <p class="tab"><a class="tabText" href="events.php">Events</a></p>
				</div>
					
				<div class="navBar">
                                    <p class="tab"><a class="tabText" href="aboutus.php">About Us</a></p>
				</div>
						
				<div class="navBar">
                                    <p class="tab"><a class="tabText" href="Contactus.php">Contact Us</a></p>
				</div>					
			</div>	
                        <div class="signup">
              <?php   if(isset($_SESSION['MemberID'])){ ?>


                             <div>
                                 <a href="WorkerPHP/logout.php?logout=yes">Sign Out</a>
                            </div>
                             <div>
                                 <a href="AccountDetails.php">Account</a>
                            </div> 
                             <div>
                                 <a href="createReservation.php">Create Reservation</a>
                            </div> 


                  <?php  }
                    else { ?>
                    <div>
                        <div>
                            <p> <a href="LoginPage.php">Sign In</a></p>
                        </div>
                        <div>
                            <p><a href="createaccount.php">Sign Up</a></p>
                        </div>
                    </div>
                    <?php } ?>
           </div>                        
    </div>
        
    <div class="Content">        
       <p class="CreateMenu">Create Menu Package</p>  
  
                                
                <div class="form-group">                 
                  <?php
                        
                        $sql = "SELECT `AppetizerName`  FROM Appetizer";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Appetizer: ";
                        echo "<select id='Appetizer'>";
                        echo "<option> Select Appetizer </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option> ".$row['AppetizerName']."</option>";}
                        echo "</select>";   
                        echo "</p>";
                        
                     ?>
                </div> 
                
                <div class="form-group">                 
                  <?php
                       
                        $sql = "SELECT `EntreeName`  FROM Entree";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Entree: ";
                        echo "<select id= 'Entree' >";
                        echo "<option> Select Entree </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option > ". $row['EntreeName']." </option>";}
                        echo "</select>";
                        echo "</p>";
                       
                     ?>
                </div> 
                
                <div class="form-group">                 
                  <?php
                       
                        $sql = "SELECT `SideName`  FROM side";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Side: ";
                        echo "<select id='SideOne'>";
                        echo "<option> Select Side </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option> ". $row['SideName']."</option>";}
                        echo "</select>"; 
                        echo "</p>";
                 
                     ?>
                </div> 

                <div class="form-group">                 
                  <?php
                        
                        $sql = "SELECT `SideName`  FROM side";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Side: ";
                        echo "<select id='SideTwo'>";
                        echo "<option> Select Side </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option> ". $row['SideName']." </option>";}
                        echo "</select>"; 
                        echo "(optional)</p>";
                        
                     ?>
                </div> 
                
                <div class="form-group">                 
                  <?php
                        
                        $sql = "SELECT `DessertName`  FROM `dessert`";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Dessert: ";
                        echo "<select id='Dessert'>";
                        echo "<option> Select Dessert </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option > ". $row['DessertName']." </option>";}
                        echo "</select>";  
                        echo "</p>";
                       
                     ?>
                </div> 
                
                <div class="form-group">                 
                  <?php
                        $sql = "SELECT `DrinkName`  FROM drink";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Drink: ";
                        echo "<select id='DrinkOne'>";
                        echo "<option> Select Drink </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option > ". $row['DrinkName']."</option>";}
                        echo "</select>";
                        echo "</p>";
                        
                     ?>
                </div> 
                
                <div class="form-group">                 
                  <?php
                        
                        $sql = "SELECT `DrinkName`  FROM drink";
                        $result = mysqli_query($connection,$sql);
                        
                        echo "<p>Drink: ";
                        echo "<select id='DrinkTwo'>";
                        echo "<option> Select Drink </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<option > ". $row['DrinkName']." </option>";}
                        echo "</select>";
                        echo "(optional)</p>";
                        
                     ?>
                </div> 
                

                               
          
            <div class="button">
                <button class="buttonstyle" id="confirm"><i>Confirm Order</i></button>      
            </div>

    </div>
    
                <div class="Footer" >
                    <p class="FooterText"><a class="BottomLinks" href="index.php">Home</a>  |  <a class="BottomLinks" href="menu.phpl"> Menu </a>  |  
                        <a class="BottomLinks" href="venue.php"> Venue </a>  |  <a class="BottomLinks" href="events.html"> Events </a>   |  
                        <a class="BottomLinks" href="aboutus.php"> About Us </a>   |   <a class="BottomLinks" href="Contactus.php"> Contact Us </a></p>
		</div>
</div>	
    
     

</body>
</html>