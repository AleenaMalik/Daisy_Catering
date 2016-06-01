<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');
   ?>

<!DOCTYPE html>
<head>
	<title> Create Account </title>
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
    
    
	.TotalnavBar{
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
    
        .Createaccount{
        margin:20px auto 0px auto;
        font-size:50px;
        width:50%;}
     
         .field{
        margin:8px 0px 0px 8px;
        font-size:15px;
        width:20%;}
     
        .form{
        margin:45px auto 0px auto;
        width:50%;}
 
	.formcontent{   
	font-size: 30px;
        position: relative;
        top: 25px;
        margin:15px auto 0px auto;}
	
        .textbox{
        height:30px;
        width:450px;}

    	.button{
        float: left;
	margin: 50px auto;
        width:30%;}
      
	.buttonstyle{
        background-color: dfdee8;
        border: white;
        padding: 5px 40px;
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
	
    </style>
	<script src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript">	
            var main = function(){
            $('#submit').click(function(){              
            $.ajax({
            type: "POST",
            url: "\WorkerPHP\NewUser.php",
            data: { 
                    FirstName: document.getElementById("FirstName").value,
                    LastName: document.getElementById("LastName").value,
                    NIC: document.getElementById("NIC").value,
                    PhoneNo: document.getElementById("PhoneNo").value,
                    Email: document.getElementById("Email").value,
                    CreateMemberID: document.getElementById("CreateMemberID").value,
                    Password: document.getElementById("Password").value},
            cache: false,
            success: function(result){	
		if(result==="done")
		window.location.href="LoginPage.php";
		else
		alert("error");}
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


                  <?php  }
                    else { ?>
                    <div>
                        <div>
                            <p> <a href="LoginPage.php">Sign In</a></p>
                        </div>
                        <div>
                            <p><a href="createaccount.php">Sign Up</a></p>
                        </div>
                         <div>
                            <a href="createReservation.php">Create Reservation</a>
                        </div> 
                    </div>
                    <?php } ?>
           </div>                                  
        </div>     
        <div class="Content">
          <p class="field">*All Fields required</p>
          <p class="field"><u>Member ID/Password format</u></p>          
          <p class="Createaccount">Create An Account</p>
     
          <form  action="WorkerPHP/NewUser.php" method="post">    
                 <div class="form">     
                     <p class="formcontent" >First:<br> <input class="textbox" type="text" name="FirstName" id="FirstName" required="required"></p>
                    <p class="formcontent" >Last:<br><input  class="textbox" type="text" name="LastName" id="LastName" required="required" ></p>
                    <p class="formcontent" >NIC:<br><input  class="textbox" placeholder="XXXXXXXXXXXX" type="text" name="NIC" id="NIC" required="required"></p>
                    <p class="formcontent" >Phone No: <input class="textbox" type="text" name="PhoneNo" id="PhoneNo" required="required"></p>
                    <p class="formcontent" >Email: <input class="textbox" type="text" name="Email" id="Email" required="required"></p>
                    <p class="formcontent" >Create Member ID: <input class="textbox" type="text" name="CreateMemberID" id="CreateMemberID" required="required"></p>
                    <p class="formcontent" >Password:<input type="password" class="textbox" name="Password" required="required"></p>
                    <p class="formcontent" >Re-Enter Password:<input class="textbox" type="password" name="ReEnterPassword" id="ReEnterPassword" required="required"></p>   
                    <div class="button">
                        <input class="buttonstyle" type="submit" id="submit" value="submit" >
                    </div>
                </div>
            </form>
         </div>    
        <span id="a"></span>
            <div class="Footer" >
                <p class="FooterText"><a class="BottomLinks" href="Home.php">Home</a>  |  <a class="BottomLinks" href="menu.php"> Menu </a>  |  
                    <a class="BottomLinks" href="venue.php"> Venue </a>  |  <a class="BottomLinks" href="events.php"> Events </a>   |  
                    <a class="BottomLinks" href="aboutus.php"> About Us </a>   |   <a class="BottomLinks" href="Contactus.php"> Contact Us </a></p>
            </div>					
    </div>	

</body>
</html>