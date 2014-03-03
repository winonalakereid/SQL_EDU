<?php

session_start();

include('conn.php');

$userid = $_SESSION['id'];

$lessons = mysqli_query($conn, "SELECT * FROM Lessons");


while($row = mysqli_fetch_array($lessons)){
	echo "<li>" . $row['LessonName'];
	echo "<ul>";	
		getLessonIDFromExercises($row['LessonID'], $conn, $userid);
	echo "</ul></li>";
	
	
}

function getLessonIDFromExercises($lessonID, $conn, $userid){
	$exercises = mysqli_query($conn, "SELECT * FROM Exercises where LessonID = " . $lessonID );
	$exerciseDisplayID = 1;
	while ($row2 = mysqli_fetch_array($exercises)){
		echo "<li><a ";
		checkCompletion($conn, $row2['ExerciseID'], $userid, $lessonID);
		echo " id = " . $row2['LessonID'] . "." .$exerciseDisplayID. " href='lesson=". $row2['LessonID'] . "&exercise=" . $row2['ExerciseID'] . "&displayID=" .$exerciseDisplayID . "'><span>Exercise ". $row2['LessonID'] . "." . $exerciseDisplayID. "</span></a></li>";	
	$exerciseDisplayID++;
	}
	
}

function checkCompletion($conn, $exerciseID, $userid, $lessonID){
	$currentlyCompleted = mysqli_query($conn, "SELECT * FROM ExercisesCompleted WHERE StudentID =" .$userid);
	while($row3 = mysqli_fetch_array($currentlyCompleted)){
			if($row3['ExerciseID'] == $exerciseID){
				echo "class = 'completed'";
			}
	}
}
?>





<!--

foreach ($completed as $complete){
			if($complete == $exerciseID){
				echo "class='completed'";
			} else{
				echo "class='disabledLink'";

			}
		}
*/
		/*
$lastRow = end($completed);
		$lastRow++;
		if($exerciseID != $lastRow){
			echo "class='disabledLink'";
		}

} else {
		if ($lessonID > 1 && $exerciseID > 1){
			echo "class='disabledLink'";
		}
	}
-->
