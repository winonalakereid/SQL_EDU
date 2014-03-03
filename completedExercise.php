<?
	session_start();
	include("conn.php");

	$exerciseID = $_GET['exercise'];
	$userid = $_SESSION['id'];
	
	mysqli_query($conn, "INSERT INTO ExercisesCompleted (ExerciseID, StudentID)
	VALUES(" . $exerciseID . ", " . $userid . ")");
	
	echo "Insert ran on ExerciseID " . $exerciseID . " and for Student " .$userid;


?>