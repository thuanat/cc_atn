<?php
	session_start();

	include_once("config.php");
	if(isset($_POST['signup'])) {

		$fname = ($_POST['fname']);
		$lname = ($_POST['lname']);
		$password = ($_POST['password']);
		$email = ($_POST['email']);
		$phone = ($_POST['phone']);
		$sql;
		$password=md5($password);
		

$sql = "Insert into users(fname,lname,phone,email,password) values ('$fname','$lname','$phone','$email','$password')";

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">prompt("New record created successfully");</script>';
	header("Location:index.php");
} 
else 
{
	echo '<script type="text/javascript">prompt("Error Occured");</script>';
	header("Location:index.php");

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
?>
		