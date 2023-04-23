<?php
$server = "localhost";
$username = "root";
$password = "" ;
$database = "tagtest1";

$conn = mySqli_connect ($server, $username, $password, $database) ;

if ($conn){
    echo "Success!";
}else {
    die("Error".mysqli_connect_error());
}
// if (!$conn){
//     die("Error".mysqli_connect_error());
// }

?>