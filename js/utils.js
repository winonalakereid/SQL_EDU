var currentLessonNumber;
var currentExerciseNumber;

$(document).ready(function() {
	
	$.ajax({
		url: 'buildSideBar.php',
		success: function(msg){
			$('#lessons-list').html(msg);
			
			$(function prepareList(){
				$("#lessons-list").find('li:has(ul)').unbind('click').click(function(event){
					if(this == event.target){
						$(this).toggleClass('expanded');
						$(this).children('ul').toggle('medium');
					}
					return false;
				}).addClass('collapsed').removeClass('expanded').children('ul').hide();
				
				$('#lessons-list a').unbind('click').click(function() {					
					var listItem;
					$('li a').each(function(event){
						$(this).removeClass("active");
							
					});
					$.ajax({
						type: 'GET',
						url: 'lessonOutput.php',
						data: ($(this).attr('href')),
						success: function(msg){
							$('#exercise-text-wrapper').html(msg);
						}
					});
					$.ajax({
						type: 'GET',
						url:'exerciseTitle.php',
						data: ($(this).attr('href')),
						success: function(msg){
							$('#exercise-title').html(msg);
						}
					});
					thisLink = ($(this).attr('href'));
					$(this).attr("class", "active");
					
					currentLessonNumber = getUrlParameters("lesson", thisLink , true);
					currentExerciseNumber = getUrlParameters("exercise", thisLink, true);
					
					$("#submit-response").removeAttr("disabled");
									
					return false;
				});
			});
		}
	});
	$("#submit-response").click(function(){
		console.log(currentLessonNumber);
		$.ajax({
			type: 'GET',
			url: 'checkAnswers.php',
			data: 'response=' + $('#responder').val() +'&lesson=' + currentLessonNumber +'&exercise=' +currentExerciseNumber,
			success: function(msg){
				if(msg){
					correctAnswer();
					$.ajax({
						type: 'GET',
						url: 'completedExercise.php',
						data: 'exercise=' + currentExerciseNumber,
						success: function(msg){
							console.log(msg);
							var nextExercise = currentExerciseNumber;
							console.log(nextExercise);
							nextExercise++;
							console.log(currentLessonNumber + "." +nextExercise);
							var enabledLink = document.getElementById(currentLessonNumber + "." + nextExercise);
							console.log(enabledLink);
							$(enabledLink).removeClass("disabledLink");
						}
					});
				} else {
					incorrectAnswer();
				}
			}
		});
	});
	
	$("#next-exercise").click(function(){
		var nextExercise = currentExerciseNumber;
		var nextLesson = currentLessonNumber;
		nextLesson++;
		nextExercise++;
		$.ajax({
			type: 'GET',
			url: 'verifyNextExercise.php',
			data: 'lesson=' + currentLessonNumber +'&exercise=' + nextExercise,
			success: function(msg){
				if(msg){
					var removeActive = document.getElementById(currentLessonNumber + "." + currentExerciseNumber);
					$(removeActive).removeClass("active");	
					$(removeActive).addClass("completed");
					$("#responder").val('');					
					$("#next-exercise").attr("disabled", "disabled");
					var toBeClicked = document.getElementById(currentLessonNumber + "." + nextExercise);
					try { //in firefox
					    toBeClicked.click();
					    return;
					} catch(ex) {}
					try { // in chrome
					    if(document.createEvent) {
					        var e = document.createEvent('MouseEvents');
					        e.initEvent( 'click', true, true );
					        toBeClicked.dispatchEvent(e);
					        return;
					    }
					} catch(ex) {}
					try { // in IE
					    if(document.createEventObject) {
					         var evObj = document.createEventObject();
					         toBeClicked.fireEvent("onclick", evObj);
					         return;
					    }
					} catch(ex) {}
				//currentExerciseNumber++;	
				

				} else {
					var removeActive = document.getElementById(currentLessonNumber + "." + currentExerciseNumber);
					$(removeActive).removeClass("active");	
					$("#responder").val('');					
					var toBeClicked = document.getElementById(nextLesson + ".1");
					try { //in firefox
					    toBeClicked.click();
					    return;
					} catch(ex) {}
					try { // in chrome
					    if(document.createEvent) {
					        var e = document.createEvent('MouseEvents');
					        e.initEvent( 'click', true, true );
					        toBeClicked.dispatchEvent(e);
					        return;
					    }
					} catch(ex) {}
					try { // in IE
					    if(document.createEventObject) {
					         var evObj = document.createEventObject();
					         toBeClicked.fireEvent("onclick", evObj);
					         return;
					    }
					} catch(ex) {}
					
					//currentLessonNumber++;

				}
			}
		});
	});
	
});

function correctAnswer(){
	bootbox.alert("Right! Take a look at what the result gives you, then let's move on to the next exercise");
	$("#submit-response").attr("disabled", "disabled");
	$("#next-exercise").removeAttr("disabled");

}

function incorrectAnswer() {
	bootbox.alert("That's not quite right go ahead and check you typed it in correctly!");
}

function getUrlParameters(parameter, staticURL, decode){
   var currLocation = staticURL,
       parArr = currLocation.split("&"),
       returnBool = true;
   
   for(var i = 0; i < parArr.length; i++){
        parr = parArr[i].split("=");
        if(parr[0] == parameter){
            return (decode) ? decodeURIComponent(parr[1]) : parr[1];
            returnBool = true;
        }else{
            returnBool = false;            
        }
   }
   
   if(!returnBool) return false;  
}
