<?
	session_start();
	include("conn.php");
	
	$lessonID = $_POST['lessonID'];
	$leadingText = mysqli_real_escape_string($conn, $_POST['leadingText']);
	$questionText = mysqli_real_escape_string($conn, $_POST['questionText']);
	$responseNeeded = mysqli_real_escape_string($conn, $_POST['responseNeeded']);
	$result = mysqli_real_escape_string($conn, $_POST['result']);
	
	mysqli_query($conn, "INSERT INTO Exercises (LessonID, LeadingText, QuestionText, ResponseNeeded, Result)
	VALUES(" . $lessonID . ", '" . $leadingText . "', '" . $questionText . "', '" . $responseNeeded . "', '" .$result . "')");
	
	
	header("Location: cms.php");

?>