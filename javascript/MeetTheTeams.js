    $(document).ready(function(){
      $('.teamslider').slick({
	   infinite: true,
	   slidesToShow: 3,
       slidesToScroll: 3,
       responsive: [
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 599,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
	   });
	   });
	   