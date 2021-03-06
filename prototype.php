<?php
	session_start();
	
	if(!isset($_SESSION['initiated'])){
		header('Location: /sqledu/index.php');
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
	</head>
	
	
	<body>
	<div id="side-menu-wrapper" class="main-page-content">
		<div id = "lesson-wrapper">
			<span id ="title">SQL Edu</span>
			<ol id = "lessons-list"></ol>
		</div>
	</div>
				

    <div id="wrapper" class="main-page-content">
    	<span id = "logout"><a href = "logout.php">Logout</a></span>
    	<h2 id='exercise-title'>Welcome, <?php echo $_SESSION['fName']; ?>!</h2>
    	<div id="exercise-text-wrapper"></div>
		<div id="exercise-response-wrapper">
         	<textarea id="responder"></textarea>
		</div>
		<button id = "submit-response" disabled="disabled" class="btn btn-primary bottom-buttons">Submit code</button>
		<button id = "next-exercise" disabled="disabled" class="btn btn-primary bottom-buttons">Next Exercise</button>
     </div>
      
	
	</body>



</html>