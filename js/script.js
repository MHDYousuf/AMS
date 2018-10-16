
$(document).ready(function(){
	$("#sbm").click(function(){
		if($("#inputGroupSelect04").val()=="Choose Your Collge"){
			$(".err-p").show();
		}
		else{
			$(".hidee").show();
			$("#inputGroupSelect04").hide();
			$("#sbm").hide();
			$(".err-p").hide();
		}
	});
});