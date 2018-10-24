$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 80) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},600);
        return false;
    });

});
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
