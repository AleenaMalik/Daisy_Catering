<?php session_start();
$connection = new mysqli('localhost','Aleena','','daisycatering');
?>
<!DOCTYPE html>
<head>
	<title> Home </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/elements.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="css/jquery-1.8.2.min.js" type="text/javascript"></script>
      
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style type = "text/css">
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;}

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
            height: 925px;
            background-color: white;
            border-color:blue;
            border-style:double;}

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
            font-family: 'Century Gothic', sans-serif;}

	.testimonials{
            margin-top:25px;
        font-size: 20px;
        }
        
        .Testimonials{
            height: 30%;
            width: 70%;
            background-color: #dbdbdb;
            margin: 120px auto 0px auto;
            overflow: auto;
            text-align: center;
        }
        
       
        
	
	</style>
        <script>
            function check_empty() {
            if (document.getElementById('name').value == "" ||  document.getElementById('msg').value == "") {
            alert("Fill All Fields !");
            } else {
            document.getElementById('form').submit();
            div_hide();
            }
            }
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
			
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <img src="Images/slider1.jpg" alt="slider1" style="width:460px; height:345px">
                  </div>

                  <div class="item">
                      <img src="Images/slider5.jpg" alt="slider2" style=" width:460px; height:345px">
                  </div>

                  <div class="item">
                      <img src="Images/slider6.jpg" alt="slider3" style="width:460px; height:345px">
                  </div>

                  <div class="item">
                      <img src="Images/slider4.jpg" alt="slider4" style="width:460px; height:345px">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

		
                    <div class="Welcome">
                        <h1>Welcome!</h1>
			<p>
                        Daisy Catering strives to provide the best in catering 
                        services to you and your guests for any event! Let us be a part of your 
                        next gathering!We are dedicated to serving you!</p>
                        <a href="LoginPage.php">Create A Reservation</a>
                    </div>
                    
                    <div id="abc">

                        <div id="popupContact">
                        <!-- Contact Us Form -->
                        <form action="WorkerPHP/submitComment.php" id="form" method="post" name="form">
                            <img id="close" src="Images/close.png" alt="close" style="height:20px; width:20px" onclick ="div_hide()">
                        <h3>How Was Your Experience?</h3>
                       
                        <input id="name" name="name" placeholder="Name" type="text">
                        <br>
                        <br>
                        <textarea id="msg" name="message" placeholder="Message"></textarea>
                        <br>
                        <a href="javascript:%20check_empty()" id="submit">Send</a>
                        </form>
                        </div>
                    </div>
                     
                   
                
                    <div class="Testimonials">
                        <h3 style="text-align:center; font-size: 25px">Testimonials</h3>
                        <div class="testimonials">
                     <?php

                        $sql = "SELECT  `Name`, `Comment` FROM `testimonials`";
                        $result = mysqli_query($connection,$sql);

                       
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        
                        echo "<p><strong> ". $row['Comment'] . "</strong> - <i>". $row['Name']. "</i></p>";}
                        
                    ?>
                        </div>
 
                    </div>
                    <button id="popup" onclick="div_show()" style="margin-left:435px; margin-top:-25px">Tell Us Your Experience!</button>
                    
         </div>
              
                        
			
		<div class="Footer" >
                    <p class="FooterText"><a class="BottomLinks" href="index.php">Home</a>  |  <a class="BottomLinks" href="menu.php"> Menu </a>  |  
                        <a class="BottomLinks" href="venue.php"> Venue </a>  |  <a class="BottomLinks" href="events.php"> Events </a>   |  
                        <a class="BottomLinks" href="aboutus.php"> About Us </a>   |   <a class="BottomLinks" href="Contactus.php"> Contact Us </a></p>
		</div>		
</div>	
</body>
</html>