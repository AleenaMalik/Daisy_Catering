<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');
   ?>
<!DOCTYPE html>
<head>
	<title>Contact Us! </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style type="text/css">
         .EntireScreen
        {
            width: 100%;
            height: 220%;
            background-image: url("Images/Background2.png");
            background-attachmen: fixed;
        }
	
	.Banner
        {
            width:80%;
            height:175px;
            margin: auto 10% auto 10%;
            background-color: white;
            text-align:center;
            border-color:blue;
            border-style:double;
        }
	
        .signup{
        margin:-150px 20px 0px 1000px;
        width:12%;
        float:right;}
    
	.Logo
        {
            background-color: white;
            margin-top:10px;
	}
	
	.DaisyCatering
        {
            width: 30%;
            margin: 0px auto 0px auto;
            font-size: 45px;
            background-color: white;
        }
	
	.TotalnavBar 
        {
            position: relative;
            top: 0px;
            height: 2%;
            width: 100%;
            margin: 25px -77px;
        }
		
	.navBar
        {
            float: left;
            width: 16.65%;
            height: 100%;
            margin: 1px 0px;
        }
	
	.tab
        {
            font-size: 20px;
            position: relative;
            top: -23px;
            left: 50px;
        }
	
	.tabText
        {
            text-decoration: none;
            color: black;
            font-family: 'Century Gothic', sans-serif;
            font-size: 20px;
            font-variant: small-caps;
            font-weight: 400;
        }
	
	.Content{
            width: 80%;
            margin: 10px 10% auto 10%;
            background-color: white;
            border-color:blue;
            border-style:double;}
    
            .Contactus{
     margin:40px auto 0px auto;
     font-size:50px;
     width:33%;}
     
     .field{
     margin:8px 0px 0px 8px;
     font-size:15px;
     width:50%;}
     
    .form{
     margin:25px auto 0px auto;
     width:50%;}
      
    .formcontent{    
    font-size: 30px;
    position: relative;
    top: 25px;
    margin:10px auto 0px auto;}
    
    .textbox{
    height:40px;
    width:480px;}
     
    .textboxbig{
    height:130px;
    width:480px;}
	
    .button{
    margin:80px auto 0px auto;
    width:30%;}
    
    .buttonstyle{
    background-color: #269abc;
    border: white;
    padding: 5px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 2px;
    cursor: pointer;}   
   .map{
    margin:50px 100px 0px 100px ; 
    }
	
    
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
        <p class="field">*Feel free to contact us for any queries.</p>
             <!-- Container (Contact Section) -->
        <div class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Lahore, Pakistan</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +92 3335094040</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> daisycatering@gmail.com</p>	   
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                          <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>	
                </div>
            </div>
        </div>

       <div class="map">
         <div id="googleMap" style="height:400px; width:100%;"></div>
            <!-- Add Google Maps -->
            <script src="http://maps.googleapis.com/maps/api/js"></script>
            <script>
            var myCenter = new google.maps.LatLng(31.5451, 74.3407);

            function initialize() {
            var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
            position:myCenter,
            });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
            </script>          
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