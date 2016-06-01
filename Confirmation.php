<?php 
    include './Classes/ReservationClass.php';
    
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');
   ?>
<!DOCTYPE html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">

    <style type= "text/css">
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
    
        .signup{
        margin:-150px 20px 0px 1000px;
        width:12%;
        float:right;}
    
	
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
	
	.Content{
	width: 80%;
        height:800px;
        margin: 10px 10% auto 10%;
	background-color: white;
	border-color:blue;
	border-style:double;}
    
        .Receipt{
         margin:50px auto 0px auto;
         font-size:30px;
         width:15%;}
     
     
        .receiptform{
        margin:100px 0px 0px 0px;
        width:50%;}
      
	.receiptgen{    
	font-size: 30px;
        position: relative;
        top: 25px;
        margin:15px 0px 0px 30px;
	text-align:center;}
    

	.Slideshow{
	height:30%;
	width: 100%;
	margin: 5% auto auto auto;
	background-color: purple;}
	
        .AccountInfo{
        float: left;
        height: 60%;
        width: 30%;
        margin: auto 60px auto auto;}
	
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
	font-family: 'Century Gothic', sans-serif;}
	
        .split{
        background-color: rgba(147, 91, 222, 0.06);
        width:60%;
        height:40%;
        margin: 160px auto auto auto;}
        
        fieldset{
            margin-left: 30px;
        }
	</style>
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
         
         <div class="split" >
             <p style="font-size: 40px; text-align: center"><strong>Thank You for your Order!</strong></p>
         </div>
         
        
     </div>
      

        <div class="Footer" >
            <p class="FooterText"><a class="BottomLinks" href="index.php">Home</a>  |  <a class="BottomLinks" href="menu.php"> Menu </a>  |
                <a class="BottomLinks" href="venue.php"> Venue </a>  |  <a class="BottomLinks" href="events.php"> Events </a>   | 
                <a class="BottomLinks" href="aboutus.php"> About Us </a>   |   <a class="BottomLinks" href="Contactus.php"> Contact Us </a></p>
		</div>
		

</div>
    

</body>
</html>
