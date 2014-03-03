<?php

include('conn.php');

$currentLesson = $_GET['lesson'];
$nextExercise = $_GET['exercise'];

$results = mysqli_query($conn, "SELECT * FROM Exercises where ExerciseID = " . $nextExercise . " AND LessonID = " .$currentLesson);

$result = mysqli_fetch_array($results);

//echo count($results);
if($result['LessonID'] != null){
	echo true;
} else {
	echo false;
}

?>