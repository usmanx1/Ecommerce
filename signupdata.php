<?php

$email = $_POST['email'];
$password = $_POST['psw'];


$con = mysqli_connect('localhost','root','','ecommerce');
 
	if (mysqli_connect_error()) 
	{
		echo "your connection is failed";
	}


$qry = "INSERT into users(email,password)VALUES('$email','$password')";


$result = mysqli_query($con,$qry);


if($result)
{
	header('location:login.html');
}
else
{
	echo "Ooops!!!! Something went wrong";
}

?>