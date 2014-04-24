<?php
	session_start();
	if(isset($_SESSION['initiated'])){
		header('Location: prototype.php');
	}

?>
<html>
	<head>
	    <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>	
		<script type="text/javascript" src="js/utils.js"></script>
		<script type="text/javascript" src="js/bootbox.js"></script>
		<script>
			function loginCheck(){
				$.ajax({
					type: 'GET',
					url: 'login.php',
					data: 'email=' + $('#email').val() + '&password=' + $('#password').val(),
					success: function(msg){
						if(msg){
							window.location = "prototype.php";
						} else{
							bootbox.alert("Login Failed");
						}
					} 
				});
			}
		</script>
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
					  	<input type="text" id="email" class = "inputfield" name="email" placeholder="Email">
					  	<input type="password" id="password" class="inputfield" name="password" placeholder="Password">
					  </p>
					  <p>
					    <input id="button" type="button" onclick="loginCheck()" value="Login">
					  </p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>