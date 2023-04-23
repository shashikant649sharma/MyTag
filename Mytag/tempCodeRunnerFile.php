<?php
if ($_SERVER["REQUSET_METHOD"] == "POST"){
      
        include "elment/DBP.php";

        $username = $_POST["Username"];
        $password = $_POST["password"];
        $cpassword = $_POST["co-password"];

        $exists == false ;
        if( $password == $cpassword && $exists == false){

            $SQL = "INSERT INTO `user` ( `Username`, `Password`, `date`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $SQL);

            if ($result){
                
                $showAlert = true;
            }
        }