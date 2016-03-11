
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').delay(3000).fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(3000).fadeOut('very slow'); // will fade out the white DIV that covers the website.
			$('body').delay(3000).css({'overflow':'visible'});
		})
	//]]>