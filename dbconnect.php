<?php

$conn=mysqli_connect("localhost","root","","test");

if(mysqli_connect_errno())

{

	echo "Connection Error:".mysqli_connect_errno();

	exit();

}




?>