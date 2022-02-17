<?php 

$server="localhost";
$username="id18393669_sparksb";
$password="Nikhilkadam@16";
$db="id18393669_sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
