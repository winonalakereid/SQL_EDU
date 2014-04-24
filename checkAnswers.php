<?php

include('conn.php');

$lessonToLoad = $_GET['lesson'];
$exerciseToLoad = $_GET['exercise'];
$responseGiven = $_GET['response'];

$currentExercise = mysqli_query($conn, "SELECT ResponseNeeded, Result FROM Exercises WHERE LessonID = '$lessonToLoad ' AND ExerciseID = '$exerciseToLoad'");

$currentExerciseInfo = mysqli_fetch_array($currentExercise);

$responseNeeded = $currentExerciseInfo['ResponseNeeded'];
$result = $currentExerciseInfo['Result'];

if($responseNeeded == $responseGiven) {
	//echo true;
	echo $result;
} else {
	echo false;
}


?>