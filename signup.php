<?php
session_start();
	require 'dbconfig/config.php';
function NewUser() 
{ 
	$fullname = $_POST['name']; 
	$userName = $_POST['user']; 
	$email = $_POST['email']; 
	$password = $_POST['pass']; 
	$cpassword = $_POST['cpass'];
	$college = $_POST['college'];
	$state = $_POST['state'];
	$mobile = $_POST['mobile'];
	$query = "INSERT INTO Users (fullname,userName,email,pass,cpass,college,state,mobile) VALUES ('$fullname','$userName','$email','$password','$cpassword','$college','$state','$mobile')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) 
		{ 
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		} 
} 

function SignUp() 
{ 
	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
	$query = mysql_query("SELECT * FROM Users WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
	if($row = mysql_fetch_array($query) or die(mysql_error()))
	 { 
	 	newuser(); 
	 } 
	 else 
	 { 
	 	echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
	 } 
} 
} 
	if(isset($_POST['submit'])) 
		{ 
			SignUp(); 
		} 
?>

