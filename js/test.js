
$(document).ready(function() {
	console.log("winning");
	$.ajax({
		url: 'test.php',
		success: function(msg){
			console.log("also winning");
			$('body').html(msg);
		}
	});
});