<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');
   ?>
<!DOCTYPE html>
<head>
	<title> Venue </title>
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
        margin: 10px 10% auto 10%;
        height: 1080px;
	background-color: white;
	border-color:blue;
	border-style:double;}


	.venue{
        margin:30px auto 20px auto;
        font-size:50px;
        width:15%;}

	.text-overlay {
	position: absolute;
        background-color: rgba(93, 93, 93, 0.6);
        width: 80%;
	left:10%;
        text-align: center;
        font-size: 40px;
        top: 25px;
        color: white;}
 	
        .text-overlay p{
	margin:28px 0;}
		
	.MiniSlides{
	height:40%;
	width: 30%;
	position:relative;
	margin: 15px 27px 15px 0px;
	float: right;
        background-color: #1b6d85;}	

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
	
	a.BottomLinks{
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
	
	.container {
	width:93%;
	margin:auto;}

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
         <p class="venue">Venues</p>
         <div class="MiniSlides">
            <div class='text-overlay'>
                <p>Venue 3</p>
            </div>
             <img src="Images/v3.jpg" alt="v3" style="height:100%; width:100%">
         </div>
         <div class="MiniSlides">
            <div class='text-overlay'>
                <p>Venue 2</p>
            </div>
             <img src="Images/v2.png" alt="v2" style="height:100%; width:100%">
         </div>
         <div class="MiniSlides">
            <div class='text-overlay'>
                <p>Venue 1</p>
            </div> 
             <img src="Images/v1.jpg" alt="v1" style="height:100%; width:100%">
         </div>
         <div class="MiniSlides">
             <div class='text-overlay'>
                <p>Venue 6</p>
            </div> 
             <img src="Images/v6.jpg" alt="v6" style="height:100%; width:100%">
         </div>
         <div class="MiniSlides">
             <div class='text-overlay'>
                <p>Venue 5</p>
            </div> 
             <img src="Images/v5.jpg" alt="v5" style="height:100%; width:100%">
         </div>
         <div class="MiniSlides">
             <div class='text-overlay'>
                <p>Venue 4</p>
            </div> 
             <img src="Images/v4.jpg" alt="v4" style="height:100%; width:100%">
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