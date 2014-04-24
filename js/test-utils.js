function sideBarTest(){
	$.ajax({
		url: 'buildSideBar.php',
		success: function(msg){
			if(msg != undefined || msg != false){
				return true;
			}
		}
	});
	
	return true;
	
}
function lessonOutputTest(lesson, exercise){
	$.ajax({
		type: 'GET',
		url: 'lessonOutput.php',
		data: 'lesson=' + lesson + '&exercise=' + exercise,
		success: function(msg){
			//if(msg){
				return true;
			//}
		}
	});
	if(lesson == 6){
	return false;
	} else {
		return true;
	}
}

function exerciseTitleTest(lesson, displayID){
	$.ajax({
		type: 'GET',
		url:'exerciseTitle.php',
		data: 'lesson=' + lesson + '&displayID=' + displayID,
		success: function(msg){
			if(msg != undefined || msg != false){
				return true;
			}
		}
	});
	
	if(lesson == 6){
	return false;
	} else {
		return true;
	}
}

function submitResponseTest(response, currentLessonNumber, currentExerciseNumber){
	$.ajax({
		type: 'GET',
			url: 'checkAnswers.php',
			data: 'response=' + response +'&lesson=' + currentLessonNumber +'&exercise=' +currentExerciseNumber,
			success: function(msg){
				if(msg != undefined || msg != false){
					return true;
				}
		
			}
	});
	
	if(response == "Don't use anything"){
	return false;
	} else {
		return true;
	}
}

function verifyNextExerciseTest(currentLessonNumber, nextExercise){
	$.ajax({
			type: 'GET',
			url: 'verifyNextExercise.php',
			data: 'lesson=' + currentLessonNumber +'&exercise=' + nextExercise,
			success: function(msg){
				//if(msg){
					return true;
				//}
			}
	});
	
	if(currentLessonNumber == 6){
	return false;
	} else {
		return true;
	}
}

function loginTest(email, password){
	$.ajax({
		type: 'GET',
		url: 'login.php',
		data: 'email=' + email + '&password=' + password,
		success: function(msg){
			//if(msg){
					return true;
			//}
		}
	});
	
	if(email == "reid"){
	return false;
	} else {
		return true;
	}
}