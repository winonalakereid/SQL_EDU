<?php
	session_start();
	include('conn.php');
	
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	
	//echo $username;
	//echo $password;
	
	$result = mysqli_query($conn, "SELECT * FROM CapstoneUsers WHERE BSUEmail ='$email'");
	$userInfo = mysqli_fetch_array($result); 
	
	$userPass = $userInfo['Pass'];
	$fName = $userInfo['Fname'];
	$lName = $userInfo['Lname'];
	$userID = $userInfo['id'];
	
	if ($password == $userPass){
		$_SESSION['fName'] = $fName;
		$_SESSION['lName'] = $lName;
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $userID;
		$_SESSION['initiated'] = true;
		header('Location: prototype.php');	
	} else {
		$_SESSION['initiated'] = false;
		header('Location: index.php?login=failed');
	}
	
	
?>