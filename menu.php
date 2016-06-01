<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');
   ?>
<!DOCTYPE html>
<head>
    <title> Menu </title>
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
    
        .menu{
        margin:-40px auto -30px auto;
        font-size:50px;
        width:20%;}
    
	.menucontent{
        
        font-size:14px;
        margin:2px 2px 2px 2px;}

    	.taxes{
        text-align:center;
        font-size:17px;
        margin:-27px 2px 0px 2px;}
    
	.Slideshow{
	height:25%;
	width: 65%;
	margin: -10px auto 60px auto;
        border: 1px solid #9d9d9d;}
	
	.MiniSlides{
	height:30%;
	width: 25%;
	margin: -35px 44px 10px 44px;
	float: right;
	background-color: #d5d5d5;}
	
        .MiniSlidesDown{
	height:30%;
	width: 25%;
	margin: 15px 44px 70px 44px;
	float: right;
	background-color: #d5d5d5 ;}
   
         .mySlides{
        align-content:center;
        display:none;}
    
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
            <div class="menu">
            <p>Menu</p>
            </div>		
            <div class="Slideshow">
                    <img class="mySlides" alt="hamburger" src="Images/hamburger.jpg" style=" height:100%; width:100%">
                    <img class="mySlides" alt="kabab" src="Images/stock-photo-behrai-kabab-154637972.jpg" style=" height:100%; width:100%">
                    <img class="mySlides" alt="strawberries" src="Images/strawberries_cream.jpg" style ="height:100%; width:100%">
                    <img class="mySlides" alt="salad" src="Images/food-salad-healthy-vegetables-medium.jpg" style=" height:100%; width:100%">
                    <img class="mySlides" alt="biryani" src="Images/stock-photo-ch-biryani-im-94898818.jpg" style=" height:100%; width:100%">
            </div>

            <div class="MiniSlides">
                <div class="menucontent">
                    <p style="text-align:center; font-size:25px">Menu 3</p>
                     <?php

                           $sql = "SELECT * FROM `menupackages` WHERE PackageID = 8 ";
                           $result = mysqli_query($connection,$sql);

                           while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                           echo "<p><strong>Appetizer: </strong><i>". $row['Appetizer']."</i> </p>";
                           echo "<p><strong>Entree: </strong><i>". $row['Entree']." </i></p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideOne']."</i> </p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideTwo']." </i></p>";
                           echo "<p><strong>Dessert: </strong><i>". $row['Dessert']." </i></p>";    
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkOne']."</i> </p>";
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkTwo']." </i></p>";
                           echo "<p style='text-align:center'><b><i>Rs 800 per head</i></b></p>";
                           }

                        ?>
                </div>            
            </div>

            <div class="MiniSlides">
                <div class="menucontent">
                     <p style="text-align:center; font-size:25px">Menu 2</p>
                     <?php

                           $sql = "SELECT * FROM `menupackages` WHERE PackageID = 15 ";
                           $result = mysqli_query($connection,$sql);

                           while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                           echo "<p><strong>Appetizer: </strong><i>". $row['Appetizer']."</i> </p>";
                           echo "<p><strong>Entree: </strong><i>". $row['Entree']." </i></p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideOne']."</i> </p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideTwo']." </i></p>";
                           echo "<p><strong>Dessert: </strong><i>". $row['Dessert']." </i></p>";    
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkOne']."</i> </p>";
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkTwo']." </i></p>";
                           echo "<p style='text-align:center'><b><i>Rs 800 per head</i></b></p>";
                           }

                        ?>
                </div>
            </div>
            <div class="MiniSlides">
                <div class="menucontent">
                     <p style="text-align:center; font-size:25px">Menu 1</p>
                     <?php

                           $sql = "SELECT * FROM `menupackages` WHERE PackageID = 17 ";
                           $result = mysqli_query($connection,$sql);

                           while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                           echo "<p><strong>Appetizer: </strong><i>". $row['Appetizer']."</i> </p>";
                           echo "<p><strong>Entree: </strong><i>". $row['Entree']." </i></p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideOne']."</i> </p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideTwo']." </i></p>";
                           echo "<p><strong>Dessert: </strong><i>". $row['Dessert']." </i></p>";    
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkOne']."</i> </p>";
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkTwo']." </i></p>";
                           echo "<p style='text-align:center'><b><i>Rs 800 per head</i></b></p>";
                           }

                        ?>
                </div>
            </div>
            <div class="MiniSlidesDown">			
                <div class="menucontent">
                     <p style="text-align:center; font-size:25px">Menu 6</p>
                     <?php

                           $sql = "SELECT * FROM `menupackages` WHERE PackageID = 18 ";
                           $result = mysqli_query($connection,$sql);

                           while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                           echo "<p><strong>Appetizer: </strong><i>". $row['Appetizer']."</i> </p>";
                           echo "<p><strong>Entree: </strong><i>". $row['Entree']." </i></p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideOne']."</i> </p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideTwo']." </i></p>";
                           echo "<p><strong>Dessert: </strong><i>". $row['Dessert']." </i></p>";    
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkOne']."</i> </p>";
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkTwo']." </i></p>";
                           echo "<p style='text-align:center'><b><i>Rs 800 per head</i></b></p>";
                           }

                        ?>
                </div>            
            </div>            			   
            <div class="MiniSlidesDown">
                <div class="menucontent">
                     <p style="text-align:center; font-size:25px">Menu 5</p>
                     <?php

                           $sql = "SELECT * FROM `menupackages` WHERE PackageID = 19 ";
                           $result = mysqli_query($connection,$sql);

                           while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                           echo "<p><strong>Appetizer: </strong><i>". $row['Appetizer']."</i> </p>";
                           echo "<p><strong>Entree: </strong><i>". $row['Entree']." </i></p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideOne']."</i> </p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideTwo']." </i></p>";
                           echo "<p><strong>Dessert: </strong><i>". $row['Dessert']." </i></p>";    
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkOne']."</i> </p>";
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkTwo']." </i></p>";
                           echo "<p style='text-align:center'><b><i>Rs 800 per head</i></b></p>";
                           }

                        ?>
                </div>
            </div>       
            <div class="MiniSlidesDown">
                <div class="menucontent">
                     <p style="text-align:center; font-size:25px">Menu 4</p>
                     <?php

                           $sql = "SELECT * FROM `menupackages` WHERE PackageID = 21 ";
                           $result = mysqli_query($connection,$sql);

                           while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                           echo "<p><strong>Appetizer: </strong><i>". $row['Appetizer']."</i> </p>";
                           echo "<p><strong>Entree: </strong><i>". $row['Entree']." </i></p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideOne']."</i> </p>";
                           echo "<p><strong>Side: </strong><i>". $row['SideTwo']." </i></p>";
                           echo "<p><strong>Dessert: </strong><i>". $row['Dessert']." </i></p>";    
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkOne']."</i> </p>";
                           echo "<p><strong>Drink: </strong><i>". $row['DrinkTwo']." </i></p>";
                           echo "<p style='text-align:center'><b><i>Rs 800 per head</i></b></p>";
                           }

                        ?>
                </div>
            </div>           
        </div>           
            
        <div class="Footer" >
            <p class="FooterText"><a class="BottomLinks" href="index.php">Home</a>  |  <a class="BottomLinks" href="menu.php"> Menu </a>  |  
            <a class="BottomLinks" href="venue.php"> Venue </a>  |  <a class="BottomLinks" href="events.php"> Events </a>   |  
            <a class="BottomLinks" href="aboutus.php"> About Us </a>   |   <a class="BottomLinks" href="Contactus.php"> Contact Us </a></p>
	</div>		
    </div>
    
    <script>
        var myIndex = 0;
        carousel();
        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";}  
        myIndex++;
        if (myIndex > x.length) {myIndex = 1;}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000);}
    </script>
</body>
</html>