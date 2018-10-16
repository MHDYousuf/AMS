
$(document).ready(function(){
	$("#sbm").click(function(){
		if($("#inputGroupSelect04").val()=="Choose Your Collge"){
			$(".err-p").show();
			$(".hidee").hide();
		}
		else{
			$(".hidee").show();
			$(".err-p").hide();
		}
	});
});