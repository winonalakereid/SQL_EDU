<?php
	session_start();

	session_destroy();

?>
<html>
	<head>
	    <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>	
		<script type="text/javascript" src="js/utils.js"></script>
	</head>
	
	<body>
		<div class = "main-wrapper">
			<div class="login">
				<div class="login-title">
					<div class="login-title-text">Login</div>
				</div>
				<div class = "login-form">
					<form method='post' action='login.php'>
					  <p>
					  	<input type="text" class = "inputfield" name="email" placeholder="Email">
					  	<input type="password" class="inputfield" name="password" placeholder="Password">
					  </p>
					  <p>
					    <input id="button" type="submit" value="Login">
					  </p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>