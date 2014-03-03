<?php

include('conn.php');

$lessonToLoad = $_GET['lesson'];
$exerciseToLoad = $_GET['exercise'];

$_SESSION['lesson'] = $lessonToLoad;
$_SESSION['exercise'] = $exerciseToLoad;

$currentExercise = mysqli_query($conn, "SELECT * FROM Exercises WHERE LessonID = '$lessonToLoad ' AND ExerciseID = '$exerciseToLoad'");

$currentExerciseInfo = mysqli_fetch_array($currentExercise);


$leadingText = $currentExerciseInfo['LeadingText'];
$questionText = $currentExerciseInfo['QuestionText'];


echo "<p>". $leadingText ."</p>";
echo "<br /><br />";
echo "<p>" .$questionText .":</p>";

?>