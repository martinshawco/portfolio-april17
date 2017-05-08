require('./bootstrap');

$(document).ready(function(){
	// Reveal page on DocumentReady to avoid flash
	$("html").css({display: "block"});
	$("body").css({display: "block"});
	$("body").animate({opacity: 1}, 200);
});