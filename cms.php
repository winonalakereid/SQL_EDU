<html>
	<head>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>		
	</head>
	<body>
		<h1> Insert Exercise </h1>
		<form action="insertLesson.php" method="post">
			<div class="input-group">Lesson Number: <input class = "cms form-control" type="text" name = "lessonID"></input></div> <br />
			<div class="input-group">Leading Text: <textarea class = "cms form-control" rows='4' col = '100' name = 'leadingText'></textarea></div> <br/>
			<div class="input-group">Question Text: <textarea class = "cms form-control" rows='4' col = '100' name = 'questionText'></textarea></div> <br/>
			<div class="input-group">Answer: <textarea class = "cms form-control" rows="4" col="100" name = 'responseNeeded'></textarea></div> <br />
			<div class="input-group">Result: <textarea class = "cms form-control" rows="4" col="100" name = 'result'></textarea></div> <br />
			<input type="submit" value="submit">
		</form>
	
	</body>
	
</html>