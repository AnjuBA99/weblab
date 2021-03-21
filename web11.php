<html>

<head>

<title>EXCERCISE11</title>

</head>

<body>
<center>
<form name="myform"method="post">

<table border="2"style="background-color:cyan;height:70%;width:30%;">

<tr><th colspan="2"><h1><u>MY FORM</u></h1></th></tr>

<tr><td><h3>name</h3></td><td><input type="text"name="name"required></td></tr>

<tr><td><h3>password</td><td><input type="password"name="password"></h3></td></tr>

<tr><td><h3>phone number</h3></td><td><input type="text"name="phno"></tr>

<tr><td><h3>Email id</h3></td><td><input type="email"name="email"</tr>

<tr><td colspan="2"><input type="submit" name="submit"</td></tr>

</table>

</form>

</body>

</html>

<?php

if(isset($_POST["submit"]))

{

$name=$_POST["name"];

$password=$_POST["password"];

$ph=$_POST["phno"];

$email=$_POST["email"];

if($name="")

{

echo '<script>alert("Please enter name");</script>';

}

if($password=="")

{

echo '<script>alert("Please enter password");</script>';

}

else if(strlen($password)<8)

{

echo '<script>alert("Password must contain atleast 8 digits");</script>';

}

if($ph=="")

{

echo '<script>alert("Please enter phonenumber");</script>';

}

else if(!ctype_digit($ph)||strlen($ph)!=10)

{

echo '<script>alert("Please enter valid phonenumber");</script>';

}

else if($email=="")

{

echo '<script>alert("Please enter email");</script>';

}

}

?>