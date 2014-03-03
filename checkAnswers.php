<?php

include('conn.php');

$lessonToLoad = $_GET['lesson'];
$exerciseToLoad = $_GET['exercise'];
$responseGiven = $_GET['response'];

$currentExercise = mysqli_query($conn, "SELECT * FROM Exercises WHERE LessonID = '$lessonToLoad ' AND ExerciseID = '$exerciseToLoad'");

$currentExerciseInfo = mysqli_fetch_array($currentExercise);

$responseNeeded = $currentExerciseInfo['ResponseNeeded'];

if($responseNeeded == $responseGiven) {
	echo true;
} else {
	echo false;
}


?>