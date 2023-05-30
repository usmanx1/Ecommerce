<?php session_start();

$user = 0;

$email = $_POST['email'];
$password = $_POST['psw'];


$con = mysqli_connect('localhost','root','','ecommerce');
 


$qry = "SELECT * from users where email = '$email' and password = '$password'";


$result = mysqli_query($con,$qry);


foreach ($result as $row) {
	if($row['email']==$email && $row['password']==$password)
	{
		$user =1;
	}
}


if($user==1)
{
	$_SESSION['authentication']=$email;
	header("location:index.html");
}
else
{
	echo "Sorry!!! username or password is incorrect";
}

?>