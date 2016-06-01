<?php 
    session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');?> 

<!DOCTYPE html>
<head>
	<title> Create A Reservation </title>
           <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="/nbproject/js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>     
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="http://cdn.jtsage.com/jtsage-datebox/4.0.0/jtsage-datebox-4.0.0.bootstrap.min.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>   
        <script type="text/javascript" src="http://cdn.jtsage.com/jtsage-datebox/4.0.0/jtsage-datebox-4.0.0.bootstrap.min.js"></script>
        <script type="text/javascript" src="http://cdn.jtsage.com/jtsage-datebox/i18n/jtsage-datebox.lang.utf8.js"></script>
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
    
        .CreateReservation{
         margin:50px auto 0px auto;
         font-size:50px;
         width:50%;}

	.form-group{   
        position: relative;
        top: 10px;
        margin:15px auto 0px 345px;
        font-size: 20px;}

    	.button{
	margin: 35px auto 20px auto ;
        width:30%;}
      
	.buttonstyle{
        background-color: #46b8da;
        border: white;
        padding: 8px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 6px 2px;
        cursor: pointer;}

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
       <p class="CreateReservation">Create A Reservation</p>  
       
      <!--- FORM1 TAKING INPUTS THEN DIRECTING TO FORM2 FOR FURTHER INPUTS -->
       
       
       
       <form action="MenuChoice.php" method="POST">  
            <div class="form-group">
                
                <?php

                        $sql = "SELECT eventType FROM event";
                        $result = mysqli_query($connection,$sql);

                        echo "<p>Select Event Type: </p>";
                        echo "<select style='font-size:15px' id='Event' name='Event'>";
                        echo "<option> Event Type </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo "<option> ". $row['eventType'] . "</option>";}
                        echo "</select>";
                        
                    ?>
                 
            </div>
            
       <div class="form-group" style="width:30%">
              <p>Select Date: 
            <input  class="form-control" id="Date" name="mode1" type="text" data-role="datebox" data-options='{"mode":"calbox"}' />
              </p>
          </div>

          <div class="form-group" style="width:30%">
              <p> Select Time: 
            <input  class="form-control" id="Time" name="mode7" type="text" data-role="datebox" data-options='{"mode":"timeflipbox"}' />
              </p>
          </div>
               
            <div class="form-group">       
                <p> Capacity: </p>
                <input type="text" id="Capacity" name="Capacity">
            </div>
  

                            
                <div class="form-group">
                  
                  <?php

                        $sql = "SELECT VenueName  FROM venue";
                        $result = mysqli_query($connection,$sql);

                        echo "<p>Select Venue: </p>";
                        echo "<select style='font-size:15px' id='Venue' name='Venue'>";
                        echo "<option> Venue </option>";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo "<option> ". $row['VenueName'] . "</option>";}
                        echo "</select>";
                        
                    ?>
                 
                 </div>
            
  
           
            <div class="button">
                <input type="submit" class="buttonstyle" id="submit" value="Choose Menu"/>    
            </div>
       </form>

    </div>
     
                <div class="Footer" >
                    <p class="FooterText"><a class="BottomLinks" href="index.php">Home</a>  |  <a class="BottomLinks" href="menu.phpl"> Menu </a>  |  
                        <a class="BottomLinks" href="venue.php"> Venue </a>  |  <a class="BottomLinks" href="events.html"> Events </a>   |  
                        <a class="BottomLinks" href="aboutus.php"> About Us </a>   |   <a class="BottomLinks" href="Contactus.php"> Contact Us </a></p>
		</div>
</div>	
    
     

</body>
</html>