<?php
$un = $_GET["n1"];
$pwd = $_GET["p1"];

$db = mysqli_connect("localhost", "root", "", "validuser");
$ins="INSERT INTO vuser(username,password) VALUES('$un','$pwd')";
if(mysqli_query($db,$ins)== TRUE)
   header("Location:http://localhost/website/login.html");
else
   echo "User creation Failed";
?>