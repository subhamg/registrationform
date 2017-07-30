<?php
session_start();
	require 'dbconfig/config.php';

		if(isset($_POST['login']))
		{

			$result = mysql_query("SELECT * FROM Users WHERE userName = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());

			$row = mysqli_fetch_array($result,MYSQL_ASSOC);
			$active = $row['active'];

			$count = mysql_num_rows($result);

			if($count == 1) {
         		session_register("$_POST[user]");
         		$_SESSION['login_user'] = $_POST[user];
         
        		header("location: welcome.php");
      		}else {
         		$error = "Your Login Name or Password is invalid";
      			}
	}
?>