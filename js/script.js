
$(document).ready(function(){
	$("#sbm").click(function(){
		if($("#inputGroupSelect04").val()=="Choose Your Collge"){
			$(".err-p").show();
			$(".hidee").hide();
		}
		else{
			$(".hidee").show();
			$("#inputGroupSelect04").hide();
			$("#sbm").hide();
			$(".err-p").hide();
		}
	});
$("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});

});
