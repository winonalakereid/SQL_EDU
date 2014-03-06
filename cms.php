<html>
	<body>
		<h1> Insert Exercise </h1>
		<form action="insertLesson.php" method="post">
			Lesson Number: <input class = "cms" type="text" name = "lessonID"></input> <br />
			Leading Text: <textarea class = "cms" rows='4' col = '100' name = 'leadingText'></textarea> <br/>
			Question Text: <textarea class = "cms" rows='4' col = '100' name = 'questionText'></textarea> <br/>
			Answer: <textarea class = "cms" rows="4" col="100" name = 'responseNeeded'></textarea> <br />
			Result: <textarea class = "cms" rows="4" col="100" name = 'result'></textarea> <br />
			<input type="submit" value="submit">
		</form>
	
	</body>
	
</html>