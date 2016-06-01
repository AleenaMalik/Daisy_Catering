<?php

   session_start();
    $connection = new mysqli('localhost','Aleena','','daisycatering');


     if(isset($_SESSION['MemberID'])){ ?>


      <div>
           <a href="logout.php?logout=yes">Sign Out</a> 
      </div>                     

                  <?php  }
                    else { ?>
                    <div>
                        <div>
                            <p> <a href="login.php">Sign In</a></p>
                        </div>
                        <div>
                            <p><a href="createaccount.php">Sign Up</a></p>
                        </div>
                    </div>
                    <?php } ?> 