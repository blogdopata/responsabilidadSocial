$(document).on('ready',function(){
	$("#link1").on('click',function() {

		$("#showLink1").show();
		$("#showLink2").hide();
		return false;
	});

	$("#link2").on('click',function() {
		
		$("#showLink2").show();
		$("#showLink1").hide();
		return false;
	});

});