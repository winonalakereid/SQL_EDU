<?php

session_start();

include('conn.php');

$userid = $_SESSION['id'];

$lessons = mysqli_query($conn, "SELECT * FROM Lessons");


while($row = mysqli_fetch_array($lessons)){
		getLessonIDFromExercises($row['LessonID'], $conn, $userid);	
}

function getLessonIDFromExercises($lessonID, $conn, $userid){
	$exercises = mysqli_query($conn, "SELECT * FROM Exercises where LessonID = " . $lessonID );
	$exerciseDisplayID = 1;
	while ($row2 = mysqli_fetch_array($exercises)){
		checkCompletion($conn, $row2['ExerciseID'], $userid, $lessonID);
	$exerciseDisplayID++;
	}
	
}

function checkCompletion($conn, $exerciseID, $userid, $lessonID){
	$currentlyCompleted = mysqli_query($conn, "SELECT * FROM ExercisesCompleted WHERE StudentID =" .$userid);
		while($row3 = mysqli_fetch_array($currentlyCompleted)){
			echo "The completed id is" . $row3['ExerciseID'] . " and the actual Exercise ID is " . $exerciseID;
		}
	
		/*
if(in_array($exerciseID, $completed)){
			echo "The " . $completed . " id and the " . $exerciseID;
		}	
*/
	}	
?>