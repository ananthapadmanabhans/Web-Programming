<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "covension center";


 $con = mysqli_connect($hostname,$username,$password,$database);

 if(!$con)
 {
     die("could not connect to database : ".mysqli_error());
 }
   
?>