<?php 
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
        
  include "elment/DBP.php";

   $username = $_POST["Username"];
   $password = $_POST["password"];
  
          
    $sql = "select * from user WHERE Username = '$username' AND Password = '$password'"; 
        $result = mysqli_query($conn, $sql);
       
        $num = mysqli_num_rows($result);

     if ($num == 1) {
         $login = true;

         session_start();
         
         $_SESSION['loggedin'] = true;
         $_SESSION['username']= $username;

         header( "location:Welcome.php");

        }else {
          $showError = "invalid credentisls";
        }
            
}

        

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>

    <?php require "elment/_nav.php" ?> 

    <?php
    
    if ($login)
    {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are login. 
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
    
   <div class="container my-4"> 
       <h1 class=" text-center" >login</h1>


    <form  action = "/loginsystem/login.php" method = "post">
  <div class="form-group col-md-5" >
    <label for="Username">User Name</label>
    <input type="email" class="form-control" id="Username" name ="Username" aria-describedby="emailHelp">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group col-md-5">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name ="password">
  </div>
  <!-- <div class="form-group col-md-5">
  <label for="co-password">Confirm Password</label>
    <input type="password" class="form-control" id="co-password" name ="co-password">
    <small id="emailHelp" class="form-text text-muted">please type same password </small>
  </div> -->
   
  <button type="submit" class="btn btn-primary col-md-5">login</button>
</form>

   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>