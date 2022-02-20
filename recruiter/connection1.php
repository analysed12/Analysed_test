<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "analysed";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	//echo"connection Ok" ;
}
else
{
	echo "Connection Failed";
}



?>
