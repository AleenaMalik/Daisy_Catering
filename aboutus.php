<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');
   ?>
<!DOCTYPE html>
<head>
	<title>About Us!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type ="text/css">
        
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
        height: 825px;
	background-color: white;
	border-color:blue;
	border-style:double;}


	 	@import "http://fonts.googleapis.com/css?family=Raleway";

#abc {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
form {
max-width:300px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}

span {
color:red;
font-weight:700
}


	

	.Footer{
	width: 80%;
        margin: 10px 10% auto 10%;
        height: 75px;
	background-color: white;
	border-color:blue;
	border-style:double;}
	
        .clearfix{
	overflow: auto;
	zoom: 1;}

	.FooterText{
        text-decoration: none;
        color: black;
        font-size: 15px;
        margin-top: 30px;
        margin-left: 315px;
        font-family:'Century Gothic', sans-serif;
        font-size: 18px;
        font-variant: small-caps;}

	.imgfix{
	overflow:hidden;}
	
	.imgfix img{
	width:auto;}
	
	.MiniLast{
	margin-right:0px;}
	
	a.BottomLinks{
	color: black;
	text-decoration: none;}

	h1{
	font-variant: small-caps;}

	
	h2 {
        background-color:#FEFFED;
        padding:20px 35px;
        margin:-10px -50px;
        text-align:center;
        border-radius:10px 10px 0 0
        }

	h3{
	font-variant: small-caps;}

	p{
	font-family: 'Century Gothic', sans-serif;}
        body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;}

        h3, h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;      
        font-size: 20px;
        color: #111;}

        .container{
        height: 30%;
        width: 100%;
        margin: 0px auto 0px 25px}
  
        .person{
        border: 10px solid transparent;
        margin-bottom: 0px;
        width: 80%;
        height: 80%;
        opacity: 0.7;}
  
        .person:hover{
        border-color: #f1f1f1;}
    
        .carousel-inner img{
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%); 
        width: 100%; 
        margin: auto;}
    
        .carousel-caption h3{
        color: #fff !important;}
    
                   
        .aboutus{
        margin:50px auto 0px auto;
        font-size:50px;
        width:30%;}
     
        .VisionStatement{
            text-align:center;
            font-size: 20px;
            width: 60%;
            margin: auto;
        }
   
     
    </style>
    <script>

//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
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
              
            <p style="text-align:center; font-size: 30px" ><b>Our Vision</b></p>
               <p class="VisionStatement">Our vision,at Daisy Catering is to provide taste with healthy,
                    innovated and best quality food that tempts your appetite at all times and at affordable prices.We offer the
                    finest Traditional Foods prepared only with the best, fresh and high quality mouth watering ingredients.  </p> 
                
                <br><br> 
                    <div id="band" class="container">
                        <h3 style="text-align:center">Our Chefs</h3>
                    <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="text-center"><strong>Aleena</strong></p><br>
                                <img src="Images/puppy1.jpg" class="img-circle person" alt="Aleena" style="width:255px; height:255px">
                            </div>
                            <div class="col-sm-4">
                                <p class="text-center"><strong>Ahmed</strong></p><br>
                                <img src="Images/puppy2.jpg" class="img-circle person" alt="Ahmed" width="255" height="255">
                            </div>
                            <div class="col-sm-4">
                                <p class="text-center"><strong>Jannat</strong></p><br>
                                <img src="Images/puppy3.png" id="popup" onclick="div_show()" class="img-circle person" alt="Jannat" style="width:255px; height:255px">
                                
                            </div>
                            <div id="abc">
  
                                
                            <div id="popupContact">
                            <form action="#" id="form" name="form">
                                <img alt="closes" id="close" src="Images/close.png" onclick ="div_hide()" style="height:20px; width: 20px">
                            <h2>About Jannat</h2>
                            <hr>
                            <img src="Images/puppy3.png" style=" height:200px; width:200px" alt="puppy" >
                            <p> She loves to cook</p>
                            </form>
                            </div>
                                                    
                                
                            </div>
                        </div>
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