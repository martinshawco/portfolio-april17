const tilt = require("tilt.js");
// const recognizeSpeech = require('recognize-speech') ;

var splashscreen = true;

$(function(){

	// If debugging, skip splashscreen
	if(splashscreen != true){
		$(".splashscreen_container").css("opacity", 0);
		$(".splashscreen_container").hide();
	}else{
		// Load random splashscreen image from array
		var splashscreenPath = "/images/splashscreen_bg/";
		var splashscreenOptions = [
			"1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg"
		];
		var splashscreenStyleTag ="<style>.splashscreen_container::after{content: '';background-image: url("+
		splashscreenPath+(splashscreenOptions[Math.floor(Math.random() * splashscreenOptions.length)])+
		");background-size: cover;width: 100%; height: 100%;opacity: 0.12;top: 0;left: 0;bottom: 0;right: 0;position: absolute;z-index: 3;}</style>";

		$("body").append(splashscreenStyleTag);


		// Hide splashscreen after display
		setTimeout(function(){
			$(".splashscreen_container").animate({ 
				opacity: 0
			}, 1000, function(){
				$(".splashscreen_container").hide();
			});
		}, 7500);
	}

		
	// Add event handling for Showcase Items
	$(".s_m_item").hover(function(){
		$(this).find(".s_m_i_container").animate({opacity: 1}, 400);
	})
	$(".s_m_item").mouseleave(function(){
		$(this).find(".s_m_i_container").animate({opacity: 0}, 100);
	})

	 

	$(".s_m_item").tilt({
		perspective: 1300
	});

});
