
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').delay(2000).fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(2000).fadeOut('very slow'); // will fade out the white DIV that covers the website.
			$('body').delay(2000).css({'overflow':'visible'});
		})
	//]]>