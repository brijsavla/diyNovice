<?php
	
	$con = mysqli_connect('localhost', 'root', '');

	if (!$con)
	{
		echo'Not Connected to Server';
	}

	if (!mysqli_select_db($con, 'diydb'))
	{
		echo'Database Not Selected';
	}
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['psw'];

	$sql = "INSERT INTO accounts (fname,lname,email,password) VALUES ('$fname', '$lname', '$email', '$password')";

	if(!mysqli_query ($con,$sql))
	{
		echo 'Not Inserted';

	}
	else
	{
		echo 'Inserted';
	}


?> 
