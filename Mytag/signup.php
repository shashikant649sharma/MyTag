<?php 
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
        
  include "elment/DB.php";

   $Name = $_POST["U_Name"];
   $User = $_POST["U_User"];
   $phone = $_POST["Phone"];
   $Email = $_POST["Email"];
   $password = $_POST["Password"];
   $cpassword = $_POST["co-password"];
   $tag = $_POST["status"];
  $ID =uniqid();

   $TagID = $ID;



   $exists = false ;
   if( $password == $cpassword && $exists == false){

        $sql = "INSERT INTO `testdata1` (`S_NO`, `U_Date`, `U_Name`, `U_User`, `U_Email`, `U_Mango`, `U_ID`, `U_Tag`, `U_Phone`, `U_Message`) 
        VALUES ('',current_timestamp(), '$Name', '$User', '$Email', '$password', '$TagID', '$tag', '$phone','');";
         
         $result = mysqli_query($conn, $sql);
           
         if ($result){

           $showAlert = true;
              
          }
            
    }else {
      
   $showError = "Password don't match, Please try again";
  
    }
        

}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="signup.css" />
    <link rel="stylesheet" href="Nav.css" />
    <title>Signup</title>
  </head>
  <body>
    <nav>
      <ul class="topnav responsive" id="dropdownClick">
        <li><a href="Home.html"> Home</a></li>
        <li><a href="#"> About Us </a></li>
        <li><a href="#"> Privacy</a></li>
        <li><a href="#"> Our Product</a></li>
        <li class="topnav_right"><a href="">login</a></li>
        <li class="topnav_right"><a href=""> sign up</a></li>
        <li class="dropdownIcon">
          <a href="javaScript:void(0);" onclick="dropdownMenue()">&#9776; </a>
        </li>
      </ul>
    </nav>


    <?php
    
    if ($showAlert)
    {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your acount in created. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'; 
    }
    if ($showError)
    {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'; 
    }
   
   ?>

    <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="contanier">
      <form action="/frontend/signup.php" method = "Post">
        <label for="U_Name"> <b>Full Name</b></label> <br />
        <input type="text" name="U_Name" id="U_Name" /><br />

        <label for="U_User"> <b>User Name</b></label> <br />
        <input type="text" name="U_User" id="U_User" /><br />

        <label for="Phone"> <b>Phone</b></label> <br />
        <input type="tel" name="Phone" id="Phonr" /><br />

        <label for="Email"> <b>Email</b></label> <br />
        <input type="email" name="Email" id="Email" /><br />

        <label for="Password"> <b>Password </b></label> <br />
        <input type="Password" name="Password" id="Password" /><br />

        <label for="#"> <b>Confirm-Password</b></label> <br />
        <input type="Password" name="co-password" id="Password" /><br />

        <label for="Tag">Keep tag unlocked by default </label><br />
        <input class="radio" type="checkbox" name="status" id="status" value="1"/><br />
        <label for="Tag" value="1"></label><br />

        <button class = 'btnn' type="submit">Sign Up</button>
      </form>
    </div>

    <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script>
      function dropdownMenue() {
        var x = document.getElementById("dropdownClick");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
