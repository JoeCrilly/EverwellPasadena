<?php
$to = 'joe.crilly503@gmail.com';
$subject = 'New Message';

$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$message = <<<EMAIL
$email
$title
$message

EMAIL;
if($_POST){
mail($to, $title, $message, $subject, "From: " . $email);
}

?>

<!doctpye html>
<html>

<head>
	<title>Everwell Pasadena</title>
	<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
	<script type='text/javascript' src='http://demo.themeisle.com/zerif-pro/wp-content/themes/zerif-pro/js/scrollReveal.min.js?ver=20120206'></script>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/navbar.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="javascript/navbar.js"></script>
	
	
	<!--General CSS - desktop-->
	<link rel="stylesheet" type="text/css" href="style.css"/>

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<script src="javascript/parallax.js/parallax.js"></script>

    <script src="javascript/jquery.magnific-popup.js"></script>

    <link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="javascript/modernizr.custom.js"></script>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	 <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
</head>
<div class = "containerfull">

	<header>
	<div class = "navigation" align = "center">
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='#everwell' class = "scroll">What is Everwell?</a></li>
			   <li><a href='#pasadena' class = "scroll"><div class = "navhide1">Why Pasadena?</div></a></li>
			   <li><a href='#teams' class = "scroll"><div class = "navhide1">Meet The Teams</div></a></li>
			   <li><a href='#careers' class = "scroll">Careers</a></li>
			   <li><a href='#contact-us'class = "scroll">Contact Us</a></li>
			   <li><a href='#'>Login</a></li>
			</ul>
			</div>
			<script src="javascript/smooth.js"></script>
	</div>
	
		<div class = "Everwell_logo" >
			<img src="images/logo.png">
			<div class = "Everwell_text" align = "center">
				<h1 align = "center">EVERWELL PASADENA</h1>
				<div class = "Everwell_text2" align = "center">HELP SMALL BUSINESS IN YOUR COMMUNITY WITH EVERWELL</div>
				<br>
				<a href='#everwell' class="splashbutton" class = "scroll" >Find Out More</a>
			</div>
			
		</div>
		
	
		<div class="Splash">
			<img src="images/City Hall 4.jpg" width = "100%" height = "100%">
			<img src="images/Cyclavia 2.jpg"  width = "100%" height = "100%">
			<img src="images/Old Town 1.jpg"  width = "100%" height = "100%">
		</div>

		<script type="text/javascript" src ="javascript/SplashPage.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
	</header>

	<body>
	<!---------------------------What is Everwell-------------------->

	<div id = "everwell"></div>
		<div class = "what_is_everwell" id="startchange">
			<h2 align = "center"><strong>WHAT IS EVERWELL?</strong></h2>
			<div class="slider" data-scrollreveal="enter right after 0.15s over 1s">
				<div id="wrapper">
					<a class="no-focus-border popup-vimeo"  href="https://vimeo.com/152937392">
						<img src="./images/WhatIsEverwellThumbPlay.png" class="what-image1" />
						<img src="./images/what-is-everwell-edit.png" class="what-image2"/>
					</a>
				</div>
			</div>
		</div><br><br>


		<!----------------------Business Need You ------------------>

		<div class="parallax-window business-image" data-parallax="scroll" data-image-src="./images/DividerImage.jpg">
			<div class="business-text"><h1 align = "center"><br><br><br><br><br>BUSINESSES NEED YOU</h1></div>
		</div>

		<script src="WhatIsEverwell.js"></script>
		<script src="javascript/parallax.js/parallax.js"></script>


		<!----------------------Why Pasadena ---------------->
		<div id = "pasadena"></div>
		<div class = "why-pasadena"><h2 align = "center"><strong>WHY PASADENA?</strong></h2></div>
		<br>

	<div class = "why-pasadena2">
		<ul class="passvid">
			<li>
				<div id ="container1" data-scrollreveal="enter left after 0.15s over 1s">
					<a class="popup-vimeo" href="https://vimeo.com/85152562">
						<img id="image" src="./images/video2.jpg" class="about-videos" />
						<div id="play"></div>
					</a>

					<div class="caption"><h2>OLD TOWN</h2></div>
				</div>
			</li>
			<li>
				<div id ="container1" data-scrollreveal="enter right after 0.15s over 1s">
					<a class="popup-vimeo" href="https://vimeo.com/85152562">
						<img id="image" src="./images/video1.jpg" class="about-videos" />
						<div id="play"></div>
					</a>

					<div class="caption"><h2>OUR OFFICE</h2></div>
				</div>
			</li>
		</ul>
	</div>

	<div class="tablet-display">
		<ul class="evntgall">
			<li>
				<div class = "gallery-box"data-scrollreveal="enter left after 0.15s over 3s">
					<div class="gallery-events-div ism-slider zoom-gallery " id="gallery-div" 
						data-play_type="loop" > 
					<ol>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide1.jpg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide1.jpg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
						<a class="example-image-link " id="gallery-div"href="ism/image/slides/slide2.jpg" 
						data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide2.jpg" alt=""
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
						<a class="example-image-link "id="gallery-div" href="ism/image/slides/slide3.jpg" 
						data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
						<img class="example-image" src="ism/image/slides/slide3.jpg" alt=""
						width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide4.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide4.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide5.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide5.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide6.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide6.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide7.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide7.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide8.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide8.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide9.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide9.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide10.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide10.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide11.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide11.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide12.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide12.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide13.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide13.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide14.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide14.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide15.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide15.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide16.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide16.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide17.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide17.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide18.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide18.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide19.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide19.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide20.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide20.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide21.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide21.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide22.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide22.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide23.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide23.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide24.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide24.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide25.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide25.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide26.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide26.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide27.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide27.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide28.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide28.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide29.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide29.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide30.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide30.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide31.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide31.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide32.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide32.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					<li>
					  <a class="example-image-link "id="gallery-div" href="ism/image/slides/slide33.jpeg" 
					  data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					  <img class="example-image" src="ism/image/slides/slide33.jpeg" alt="" 
					  width="100%" height="100%">
					  </a>
					</li>
					</ol>
					
					</div>
					<p style="width:500px;margin-top:0;text-align:center;"><a rel="nofollow"  data-scrollreveal="enter left after 0.15s over 3s"> <div class = "gallery caption"><h2><strong>GALLERY</strong></h2></div></a><img width="1" height="1" border="0" style="padding: 0; background: #ffffff; border: none; box-shadow: none;" src="https://os.shutterfly.com/b/ss/sflyshareprod/1/H.15/111?pageName=sharekey&c1=pictures&c2=embed"/></p>
				</div>
			</li>
			<li>
				<ul class="events-list" data-scrollreveal="enter right after 0.15s over 3s">
					<li class="event">
						<strong>WED JAN 20, 2016 - BOWLING BASH</strong>
							<p class="event-description">ALL DISTRICTS ARE INVITED TO 300 ON FOOTHILL BLVD. IN ARCADIA FOR A FRIENDLY NIGHT OF BOWLING!<p/>
					</li>
					<li class="event">
						<strong>SAT JAN 30, 2016 - EVERWELL OLYMPICS</strong>
							<p class="event-description">IT'S TIME TO COMPETE FOR OUR ANNUAL OLYMPICS!<p/>
					</li>
					<li class="event">
						<strong>MON FEB 8, 2016 - GUITAR HERO JAMATHON</strong>
							<p class="event-description">IT'S TIME TO ROCK N' ROLL ALL NIGHT. ARE YOU READY?</p>
					</li>


					<li class="event">
						<strong>THURS FEB 25, 2016 - SCARY MOVIE NIGHT</strong>
							<p class="event-description">DON'T BE AFRAID... THERE'S NO SUCH THINGS AS MONSTERS.</p>
					</li>
				</ul>
				<div class = "gallery caption"><h2 data-scrollreveal="enter right after 0.15s over 3s">EVENTS</h2></div>
			</li>
		</ul>
	</div>

	<script src="javascript/WhyPasadena.js"></script>
	<link rel="stylesheet" href="ism/css/my-slider.css"/>
	<script src="ism/js/ism-2.0.1-min.js"></script>
	<script src="js/zoomgalary.js"></script> 
	<link rel="stylesheet" href="dist/css/lightbox.css">
	<script src="dist/js/lightbox.js"></script> 
	
	



	<!----------------------Meet the Teams ------------------>
	<div id = "teams"></div>
	<div class="parallax-window teampara" data-parallax="scroll" data-image-src="./images/Metro 2.jpg">
	<div class="team" id="meet-the-teams">

			<div id="content">
				<h2><strong><font face = "Tahoma">MEET THE TEAMS</font></strong></h2>
			</div>
			<br><br><br>
			<table width  = "100%" align = "center">
				<tr align = "left">
					<td class = "title1" width = "20%"></td>
					<td width = "40%">
						<div id = "team_titles"data-scrollreveal="enter right after 0.15s over 1s">DISTRICT COORDINATORS</div>
					</td>
					</td><td width = "20%"></td><td width = "20%"></td>
				</tr>
			</table>

    <div class="teamslider" data-scrollreveal="enter right after 0.15s over 1s">
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description1">
				<img id="image-1" src="images/headshots/Michelle.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Michelle Lee</p>
						<p>Team Invincible</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description2">
				<img id="image-1" src="images/headshots/Russell.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Russell Stanberry</p>
						<p>The Texas Rangers</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description3">
				<img id="image-1" src="images/headshots/Axel.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Axel Dubon</p>
						<p>The Warriors</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<!--
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description4">
				<img id="image-1" src="images/pic1.png"/>
					<span class="caption simple-caption">
						<p>Brenda Huerta</p>
						<p>La Maquina</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description5">
				<img id="image-1" src="images/pic2.png"/>
					<span class="caption simple-caption">
						<p>Elizabeth Lenzo</p>
						<p>The District</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>-->
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description6">
				<img id="image-1" src="images/headshots/Glenn.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Glen Schecter</p>
						<p>Team Pipeline</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description7">
				<img id="image-1" src="images/headshots/Steve.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Steve Goldstein</p>
						<p>Team Mojo</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
		</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description8">
				<img id="image-1" src="images/headshots/Malvin.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Malvin Black</p>
						<p>The Wolf Pack</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<!--
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#team-description9">
				<img id="image-1" src="images/pic2.png"/>
					<span class="caption simple-caption">
						<p>Denny Twigg</p>
						<p>The Dark Horse</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>-->
    </div>
    <br><br><br>
	<table width  = "100%" align = "center">
		<tr align = "left">
			 <td class = "title2" width = "20%"></td>
			<td width = "40%">
				<div id = "team_titles" data-scrollreveal="enter left after 0.15s over 1s">SPECIAL PROJECTS TEAMS</div>
			</td>
			<td width = "20%"></td><td width = "20%"></td>
		</tr>
	</table>
    <div class="teamslider" data-scrollreveal="enter left after 0.15s over 1s">
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#special_projects1">
				<img id="image-1" src="images/headshots/Ricky.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Ricky Shih</p>
						<p>Special Project Coordinator</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#special_projects2">
				<img id="image-1" src="images/headshots/Rose.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Rose Pena</p>
						<p>Special Project Coordinator</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#special_projects3">
				<img id="image-1" src="images/headshots/Kevin.jpg" width = "256" height = "306"/>
					<span class="caption simple-caption">
						<p>Kevin Nagle</p>
						<p>Special Project Coordinator</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<!--<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#special_projects4">
				<img id="image-1" src="images/pic1.png"/>
					<span class="caption simple-caption">
						<p>Project Leader Name</p>
						<p>Project Name</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#special_projects5">
				<img id="image-1" src="images/pic2.png"/>
					<span class="caption simple-caption">
						<p>Project Leader Name</p>
						<p>Project Name</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>
		<div id="mainwrapper">
			<div id="box-1" class="box">
				<a class="popup-with-zoom-anim"  href="#special_projects6">
				<img id="image-1" src="images/pic1.png"/>
					<span class="caption simple-caption">
						<p>Project Leader Name</p>
						<p>Project Name</p>
						<div id = "arrow"><img src = "images/arrow.png" width = "25%" height = "15%"></div>
					</span>
				</a>
			</div>
		</div>-->
    </div>

	<div id="team-description1" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "200" height = "200">
		<h3><font face = "Century Gothic">Team Invincible</font></h3>
		<h3><font face = "Century Gothic">Michelle Lee</font></h3>
		<p><font face = "Century Gothic"> I am 29 years old and I’ve been here for 2 years.  I am originally from the Pasadena
		location.  I’ve previously been an Associate and Coordinator in Training before becoming a District Sales Coordinator 
		in July of 2014.  My time working here has been the most challenging and frustrating and yet, has provided me with the
		most exhilarating and rewarding career. With great guidance, I have been able to thrive in this environment.  I plan 
		on managing my team the best I can by being transparent; everything is on the table.  I will also rely on building 
		structure and holding my team accountable to the expectations and goals that they set for themselves.   With some 
		coaching, I think that I will be able to guide my team closer to their goals.    </font>
		</p>
	</div>
	<div id="team-description2" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">The Texas Rangers</font></h3>
		<h3><font face = "Century Gothic">Russell Stanberry</font></h3>
		<p><font face = "Century Gothic"> I’m 31 years old and I’ve started and been working in the Pasadena office for a year
		and a half. I was previously a Coordinator in Training for six months before becoming a District Sales Coordinator 
		in July of 2015. I’ve previously worked as the Regional Asset Coordinator.  During my year and a half working here, 
		I have found more personal success than I had found in the previous 10 years of living in California [I’m originally 
		from Texas, go Rangers].  This work environment has allowed me to have so much freedom that I can’t imagine working 
		anywhere else.  But the team here in Pasadena is the reason why I chose to work in this office.  The people I work 
		with are so supportive, challenging and fun that they are the reason I come to work everyday. 
		My philosophy for how I guide my team is to set expectations and give them the tools to meet those expectations. 
		From there, I give them all the support and training possible to achieve their goals. My business motto is “work 
		smarter not harder.”</font>
		</p>
	</div>
	<div id="team-description3" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">The Warriors</font></h3>
		<h3><font face = "Century Gothic">Axel Dubon</font></h3>
		<p><font face = "Century Gothic"> I am 38 years old and I’ve been working here for seven years.  I am originally from 
		the Rancho Cucamonga location.  I have worked as an Associate before being promoted to a District Sales Coordinator in
		October of 2008.  My time here has been challenging yet rewarding.  I have experienced financial and business growth 
		the duration of my time here. I plan to build a team full of independent individuals who can work together to grow the 
		team into profitability and financial freedom.   </font>
		</p>
	</div>
	<div id="team-description4" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/LaMaquina2.png" width = "200" height = "200">
		<h3><font face = "Century Gothic">La Maquina</font></h3>
		<h3><font face = "Century Gothic">Brenda Huerta</font></h3>
		<p><font face = "Century Gothic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</font>
		</p>
	</div>
	<div id="team-description5" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/TheDistrict.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">The District</font></h3>
		<h3><font face = "Century Gothic">Elizabeth Lenzo</font></h3>
		<p><font face = "Century Gothic"> I’ve been working with Aflac for 10 years.  <br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</font>
		</p>
	</div>
	<div id="team-description6" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Team Pipeline</font></h3>
		<h3><font face = "Century Gothic">Glen Schecter</font></h3>
		<p><font face = "Century Gothic"> I’m 56 years old and I’ve been working here for three years.  I originally started 
		working from the Sherman Oaks branch.  I was previously a Coordinator in Training for a year before becoming a 
		District Sales Coordinator in September of 2013. My time has been great.  In my first quarter I was in the new 
		groups chapter and I managed to finish in 2nd place.  I plan on leading my team by teaching them how to find business, 
		attain business, and maintain business.  My business motto is to “work harder today than you did yesterday.”</font>
		</p>
	</div>
	<div id="team-description7" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Team Mojo</font></h3>
		<h3><font face = "Century Gothic">Steve Goldstein</font></h3>
		<p><font face = "Century Gothic">  I am 62 years old and I’ve been working here for over 5 years.  I am originally 
		from the Burbank location.  I’ve previously been a Coordinator in Training for 6 months before a District Sales Coordinator 
		in July of 2012.  Working here has taught me that one of the important things is the personal relationships that I have built
		with coworkers and clients.  As for leading my team, I plan on working with each person on my team so that they can 
		better rise to their own leads.  My personal business motto is “Just one more.”</font>
		</p>
	</div>
	<div id="team-description8" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">The Wolf Pack</font></h3>
		<h3><font face = "Century Gothic">Malvin Black</font></h3>
		<p><font face = "Century Gothic">  I’m 32 years old and I’ve been working here for almost two years.  I am originally 
		from the Santa Monica branch.  I’ve previously worked as an Associate before being promoted in becoming a District 
		Sales Coordinator.  Working here has been the most grueling, challenging, gut-wrenching job I’ve ever had.  
		But all of that led to the most rewarding job personally, professionally, and financially that I’ve ever had.  
		My philosophy for working here is to believe in yourself.  If you succeed or fail in this business, it was your 
		own doing.   I plan on managing my team by giving them all the tools that they need.  It will be up to them to put 
		them to good use.  My personal business philosophy is that the moment you get tired of saying ‘I can’t afford’ is 
		the moment your life changes.  </font>
		</p>
	</div>
	<div id="team-description9" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">The Dark Horse</font></h3>
		<h3><font face = "Century Gothic">Denny Twigg</font></h3>
		<p><font face = "Century Gothic"> I’ve been working with Aflac for 8 years. <br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</font>
		</p>
	</div>
	
	<div id="special_projects1" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Special Project Coordinator</font></h3>
		<h3><font face = "Century Gothic">Ricky Shih</font></h3>
		<p> <font face = "Century Gothic">I’m 32 years old and I’ve been working here for five years.  I am originally 
		from the Pasadena office and have previously worked as an Associate, Special Projects Coordinator, and as a 
		Coordinator in Training for a year.  Working here has enabled me to experience endless financial and personal growth. 
		I plan to lead my team by treating them with attention and patience.  I believe that by providing these two things, a 
		team member has the best chance of success.  My business motto is to “work until it is done.”</font>
		</p>
	</div>
	<div id="special_projects2" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Special Project Coordinator</font></h3>
		<h3><font face = "Century Gothic">Rose Pena</font></h3>
		<p> <font face = "Century Gothic">I’m 25 years old and I’ve been working here since the beginning of January.  
		I am originally from the Pasadena location.  This is my first position at here.  I think that it’s a great place 
		to work.  Everyone is very motivated and has positive vibes, which encourages me to work harder.  </font>
		</p>
	</div>
	<div id="special_projects3" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Special Project Coordinator</font></h3>
		<h3><font face = "Century Gothic">Kevin Nagle</font></h3>
		<p> <font face = "Century Gothic">I’m 47 years old and I’ve been working here for eight and a half years.  I am 
		originally from the Burbank office and have previously worked as an Associate before being promoted to becoming a 
		Coordinator in Training.  I was promoted in September of 2015.  Working here has been fun and challenging.  I am so 
		happy that I didn’t go with another job.  I plan to lead my team by setting expectations and providing them with the 
		tools they need.  My personal business motto is to “have fun and people will be drawn to you.”</font>
		</p>
	</div>
	<div id="special_projects4" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Project</font></h3>
		<h3><font face = "Century Gothic">Project Leader</font></h3>
		<p> <font face = "Century Gothic">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</font>
		</p>
	</div>
	<div id="special_projects5" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Project</font></h3>
		<h3><font face = "Century Gothic">Project Leader</font></h3>
		<p> <font face = "Century Gothic">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</font>
		</p>
	</div>
	<div id="special_projects6" class="team-dialog zoom-anim-dialog mfp-hide">
		<img src = "images/logo.png" width = "202" height = "200">
		<h3><font face = "Century Gothic">Project</font></h3>
		<h3><font face = "Century Gothic">Project Leader</font></h3>
		<p> <font face = "Century Gothic">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</font>
		</p>
	</div>
	<br><br><br><br><br>

	<script src="javascript/popup.js"></script>
	<script src="javascript/MeetTheTeams.js"></script>
	<script src="javascript/jquery.magnific-popup.js"></script>

<div class ="regdir">
	<table width  = "70%" align = "center"  bgcolor="#000000">
		<tr>
			<td width = "100%" align = "center">
				<div class = "daniel"><strong>DANIEL ELLIS</strong></div>
			</td>
		</tr>
		<tr>
			<td width = "100%" align = "center">
				<div class = "regional">REGIONAL DIRECTOR</div>
			</td>
		</tr>
	</table>
	
	<table width = "70%" align = "center" bgcolor = "#ffffff">
		<tr>
			<td width = "35%" align = "center">
				<div class = "regdirpic"><img src="images/dan.png" width = "250" height = "250" alt="symbol"></div>
			</td>
			<td width - "65%" align = "justify"><div class = "regdirtext">
			I’m 40 years old and I’ve been working here for 7 years.  I originally began my career in Wisconsin in 2007.  
			I’ve previously been an Associate, State Training Coordinator, and a Special Projects Coordinator before being 
			promoted to becoming a Regional Sales Coordinator in January of 2016.  I never thought that I would end up in 
			this type of business.  Being an entrepreneur, I’m able to come in on Monday excited and in control of my day. 
			I lead a team of entrepreneurs, collaboratively in a dynamically changing marketplace where we’re constantly 
			innovating new solutions to meet our marketplace.  I think culture, teamwork, and determination aren’t the most 
			important thing, they are the only thing. </div>
			</td>
		</tr>
	</table>
</div>
	<br><br>
	</div>
	</div>
	
</div> <!--.containerfull-->

<!-----------Career Section---------------->

<div id = "careers"></div>
		<h2 class="position-caption">AVAILABLE POSITIONS</h2>

		<ul class="grid caption-hover">
				<li>

              <div class="view2" data-scrollreveal="enter left after 0.15s over 1s">
						<a class="popup-with-zoom-anim" href="#small-dialog1">
                        <img class="image-top job-image1">
                        <img class="image-bottom job-background1">
                       <div class="caption-view">
                       <div class="blur"></div>
							<div class="caption-text">
                            <h1>Click here to learn more</h1>
                            </div>
						</div>
                        </a>
                 		</div>

                  <a class="popup-with-zoom-anim" href="#small-dialog1">
                  <div class="view"><img class="image-top alt-job-image1"></div></a>
              </div>
                 </li>

				<li>

              <div class="view2" data-scrollreveal="enter right after 0.15s over 1s">
						<a class="popup-with-zoom-anim" href="#small-dialog2">
                        <img class="image-top job-image2">
                        <img class="image-bottom job-background2">
                       <div class="caption-view">
                       <div class="blur"></div>
							<div class="caption-text">
                            <h1>Click here to learn more</h1>
                            </div>
                       </div>
                       </a>
					   </div>

 					<a class="popup-with-zoom-anim" href="#small-dialog2">
                    <div class="view"><img class="image-top alt-job-image2"></div></a>
                </div>
                 </li>

				<li>

            <div class="view2" data-scrollreveal="enter left after 0.15s over 1s">
						<a class="popup-with-zoom-anim" href="#small-dialog3">
                        <img class="image-top job-image3">
                        <img class="image-bottom job-background3">
                       <div class="caption-view">
                       <div class="blur"></div>
							<div class="caption-text">
                            <h1>Click here to learn more</h1>
                            </div>
						</div>
                        </a>
                        </div>
                	<a class="popup-with-zoom-anim" href="#small-dialog3">
                    <div class="view"><img class="image-top alt-job-image3"></div></a>
                 </div>
                 </li>

                 <li>

            <div class="view2" data-scrollreveal="enter right after 0.15s over 1s">
						<a class="popup-with-zoom-anim" href="#small-dialog4">
                        <img class="image-top job-image4">
                        <img class="image-bottom job-background4">
                       <div class="caption-view">
                       <div class="blur"></div>
							<div class="caption-text">
                            <h1>Click here to learn more</h1>
                            </div>
                        </div>
						</a>
                        </div>

					<a class="popup-with-zoom-anim" href="#small-dialog4">
					<div class="view"><img class="image-top alt-job-image4"></div></a>
                 </div>
                 </li>

			</ul>
                 <a class="popup-with-zoom-anim btn-apply2" href="#small-dialog5"><h2>APPLY NOW</h2></a>
		</div> <!-- /container -->

</div>

<div id="small-dialog1" class="small-dialog zoom-anim-dialog mfp-hide">

		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>BUSINESS CONSULTANT</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				Our Business Consultants meet with local business owners and executives to evaluate the overall health of the business. 
				Once an evaluation is completed the Business Consultant makes recommendations to improve the overall business situation 
				using the services and partners Everwell has available. Following these meetings the Business Consultant schedules, 
				implements, and maintains the services with the accounts they add to their growing book of business.
				<br><br>
				Qualified candidates will be provided regular training on business practices, methodology, products and services.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>All applicants must be 18 years or older</li>
						<li>High School diploma or GED certification required</li>
						<li>College degree preferred</li>
						<li>Previous customer service and communications experience is a plus</li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong> button below, 
				fill out the form with required fields, and attach a resume. All applicants will be contacted in the order in 
				which you apply.
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
        <a class="popup-with-zoom-anim btn-apply" href="#small-dialog5">APPLY NOW</a>
</div>


<div id="small-dialog2" class="small-dialog zoom-anim-dialog mfp-hide">
	    		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>DISTRICT MANAGER</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				Our District Managers lead a team of Business Consultants based out of our Pasadena location. Through weekly 
				and monthly meetings with their team the District Mangers guide their team through achieving the goals set by
				each team member. Districts also participate in weekly and monthly training and coaching sessions for the 
				entire team of Business Consultants.
				<br><br>
				Qualified candidates will be provided regular training on business practices, coaching methodology, management
				structure, products and services.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>All applicants must be 18 years or older</li>
						<li>High School diploma or GED certification required</li>
						<li>College degree required</li>
						<li>2-5 years of previous management experience preferred</li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong> button below, 
				fill out the form with required fields, and attach a resume. All applicants will be contacted in the order in 
				which you apply.
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
                     <a class="popup-with-zoom-anim btn-apply" href="#small-dialog5">APPLY NOW</a>
</div>


<div id="small-dialog3" class="small-dialog zoom-anim-dialog mfp-hide">
	    <table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>BROKER CONSULTANT</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				Our Broker Consultants grow and foster relationships within the broker community. Through education and 
				implementation the Broker Consultant helps his clients in the broker community assist and aid their book 
				of business with expanding services and access to an ever growing list of services and partners.
				<br><br>
				Qualified candidates will be provided regular training on business practices, broker relations, products 
				and services.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>All applicants must be 18 years or older</li>
						<li>College degree required</li>
						<li>2-5 years of previous management experience preferred</li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong>
				button below, fill out the form with required fields, and attach a resume. All applicants will be 
				contacted in the order in which you apply.
				<td width = "10%"></td>
			</tr>
		</table>
                     <a class="popup-with-zoom-anim btn-apply" href="#small-dialog5">APPLY NOW</a>
</div>

<div id="small-dialog4" class="small-dialog zoom-anim-dialog mfp-hide">
	 <section class = "tabsection">
 <div class = "tabdiv2">
   <div class = "tabdiv" tabindex="0">
     <button class = "tabbutton">Human Resources</button>
     <p class = "tabp">	    <table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>HUMAN RESOURCES INTERNSHIP</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				The Human Resources Internship with Everwell is dynamic. Everwell is a small business solutions company started
				by a fortune 125 company to meet the needs of small businesses in the community. As a Human Resources Intern 
				you will be working and learning under the supervision of the Regional Recruiting Coordinator and District 
				Managers in completing the responsibilities and receiving educational instruction. The internship includes 
				work and education with Human Resource systems, payroll, recruiting, benefits administration, and more.
				<br><br>
				This is a part-time, unpaid internship (14 hours per week). Upon successfully completing the internship, 
				quality interns will receive a reference letter or letter of recommendation from the Regional Recruiting 
				Coordinator and District Manger. Qualified interns may have the opportunity to be offered a paid position 
				upon completion of the internship.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>Preferred majors: Human Resources, Business Administration or any related field </li>
						<li>Minimum 3.2 out of 4.0 GPA </li>
						<li>Proficiency with Microsoft Office (Word, Excel, PowerPoint), Google Docs </li>
						<li>Experience with Applicant-tracking systems is a plus, but not required. </li>
						<li>Very thorough organizational skills. </li>
						<li>Ability to work independently, self-motivated as well as work well with others. </li>
						<li>Ability to maintain strong and consistent communication through email, phone, and WhatsApp </li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong>
				button below, fill out the form with required fields, and attach a resume. All applicants will be 
				contacted in the order in which you apply.
				<td width = "10%"></td>
			</tr>
		</table></p>
   </div></div>
    <div class = "tabdiv2">
   <div class = "tabdiv" tabindex="0">
     <button class = "tabbutton">Business Development</button>
     <p class = "tabp">	    <table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>BUSINESS DEVELOPMENT INTERNSHIP</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				Our Business Development Interns are given the opportunity to apply their knowledge to hands-on experiences. 
				Alongside the Regional Asset Coordinator, they will assist in managing over 1200 accounts from the Pasadena 
				Region of Everwell’s book of business. An intern will learn how to manage these accounts ethically, efficiently
				, and courteously. This internship will develop the skill set required for those in the field of business 
				management through real-world application of best practices and standards.
				<br><br>
				This is a part-time, unpaid internship (14 hours per week). Upon successfully completing the internship, 
				quality interns will receive a reference letter or letter of recommendation from the Regional Recruiting 
				Coordinator and District Manger. Qualified interns may have the opportunity to be offered a paid position 
				upon completion of the internship.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>Business Administration major or major in a related field.</li>
						<li>Minimum GPA of 3.3 of 4.0 </li>
						<li>Proficiency with Microsoft Office (Word, Excel, PowerPoint), Google Docs </li>
						<li>Understanding of Google Documents and other Google tools.</li>
						<li>Very thorough organizational skills. </li>
						<li>Ability to work independently, self-motivated as well as work well with others. </li>
						<li>Ability to maintain strong and consistent communication through email, phone, and WhatsApp </li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong>
				button below, fill out the form with required fields, and attach a resume. All applicants will be 
				contacted in the order in which you apply.
				<td width = "10%"></td>
			</tr>
		</table></p>
   </div></div>
    <div class = "tabdiv2">
   <div class = "tabdiv" tabindex="0">
     <button class = "tabbutton">Web Development</button>
     <p class = "tabp">	    <table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>WEB DEVELOPMENT INTERNSHIP</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				The Web Development intern will work closely with a large group of diverse candidates on ongoing projects 
				including both external and internal websites and web applications. The interns work under the close 
				supervision of the Regional Asset Coordinator and will receive necessary training to complete their internship 
				satisfactorily.
				<br><br>
				This is a part-time, unpaid internship (14 hours per week). Upon successfully completing the internship, 
				quality interns will receive a reference letter or letter of recommendation from the Regional Recruiting 
				Coordinator and District Manger. Qualified interns may have the opportunity to be offered a paid position 
				upon completion of the internship.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>Minimum GPA 3.2, graduating between May 2016 and May 2018</li>
						<li>Knowledge of coding languages HTML and CSS (JavaScript and jQuery preferred but not required)</li>
						<li>Knowledge of database structures and languages</li>
						<li>Good understanding of Web Design & Development Technologies </li>
						<li>Demonstrate leadership skills</li>
						<li>Ability to manage and prioritize a variety of concurrent activities</li>
						<li>Self-starter with good time management skills.</li>
						<li>Ability to identify and resolve problems applying problem-solving skills </li>
						<li>Experience with Information Technology is a plus</li>
						<li>Proficiency with Microsoft Office (Word, Excel, PowerPoint), Google Docs</li>
						<li>Ability to work independently, self-motivated as well as work well with others.</li>
						<li>Ability to maintain strong and consistent communication through email, phone, and WhatsApp </li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong>
				button below, fill out the form with required fields, and attach a resume. All applicants will be 
				contacted in the order in which you apply.
				<td width = "10%"></td>
			</tr>
		</table></p>
   </div></div>
    <div class = "tabdiv2">
   <div class "tabdiv" tabindex="0">
     <button class = "tabbutton">Graphic Design</button>
     <p class = "tabp">	    <table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h2>GRAPHIC DESIGN INTERNSHIP</h2></td>
				<td width = "20%"></td>
				<td width = "20%" align = "center"><img src = "images/logo.png" width = "102" height = "100" ></td>
				<td width = "20%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				The Graphic Design Internship will work with a diverse team of candidates. The intern will sketch, and develop
				designs for logos, icons, and other graphics for print, presentation, and web use. The intern will work under
				the close supervision of the Regional Asset Coordinator and will receive necessary training to complete their 
				internship satisfactorily.
				<br><br>
				This is a part-time, unpaid internship (14 hours per week). Upon successfully completing the internship, 
				quality interns will receive a reference letter or letter of recommendation from the Regional Recruiting 
				Coordinator and District Manger. Qualified interns may have the opportunity to be offered a paid position 
				upon completion of the internship.</td>
				<td width = "10%"></td>
			</tr>
		</table>
		<br>
		<table width = "80%" align = "center">
			<tr>
				<td width = "40%" align = "center"><h3>Requirements:</h3></td>
				<td width = "60%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr>
				<td width = "12%"></td>
				<td width = "70%" align = "left">
					<ul>
						<li>Minimum GPA 3.2, graduating between May 2016 and May 2018.</li>
						<li>Good understanding of graphic editors such as PhotoShop and Illustrator. </li>
						<li>Responsible for Graphic Design on office websites and Layout Design on office documents.  </li>
						<li>Self-starter with good time management skills.</li>
						<li>Excellent communication skills (both verbal & written)</li>
						<li>Ability to identify and resolve problems applying problem-solving skills</li>
						<li>Proficiency with Microsoft Office (Word, Excel, PowerPoint), Google Docs</li>
						<li>Ability to work independently, self-motivated as well as work well with others. </li>
						<li>Ability to maintain strong and consistent communication through email, phone, and WhatsApp </li>
					</ul>
				</td>
				<td width = "18%"></td>
			</tr>
		</table>
		<table width = "80%" align = "center">
			<tr align = "center">
				<td align = "justify" width = "80%" cellpadding = "5">
				If you are interested in this position or would like to learn more please click the <strong>"Apply Now"</strong>
				button below, fill out the form with required fields, and attach a resume. All applicants will be 
				contacted in the order in which you apply.
				<td width = "10%"></td>
			</tr>
		</table></p>
   </div>
   </div>
</section>
                  <div class = "internpadding"><a class="popup-with-zoom-anim btn-apply" href="#small-dialog5">APPLY NOW</a></div>
</div>




<div id="small-dialog5" class="small-dialog2 zoom-anim-dialog mfp-hide">
	<ul>
		<form action="index.html" method="post" class="job-form">

      <br>
        <h2>Apply Now</h2>

        <fieldset>

          <label for="name">Name:</label>
          <input class= "jobinput" type="text" id="name" name="user_name">

          <label for="mail">Email:</label>
          <input class= "jobinput" type="email" id="mail" name="user_email">

          <label for="phone">Phone Number:</label>
          <input class= "jobinput" type="phone" id="phone" name="phone_number">

        </fieldset>

        <fieldset>
        <label for="job">Which District:</label>
        <select id="job" name="user_job">
          <optgroup label="The Tribe">
            <option value="invincible">Team Invincible</option>
            <option value="mojo">Team Mojo</option>
			<option value="texas">The Texas Rangers</option>
			<option value="wolf">The Wolf Pack</option>
			<option value="warriors">The Warriors</option>
			<option value="pipe">The Pipeline</option>
			<option value="district">The District</option>
			<option value="maquina">La Maquina</option>
			<option value="horse">The Dark Horse</option>
          </optgroup>
          </select>

          <br>

              <label>Interests:</label><br><br>

              <input class= "jobinput" type="checkbox" id="CONSULTANT" value="BUSINESS_BENEFITS_CONSULTANT" name="user_interest"><label class="light" for="development">Business Consultant</label><br>
                <input class= "jobinput" type="checkbox" id="MANAGER" value="ACCOUNT_MANAGER" name="user_interest"><label class="light" for="design">District Manager</label><br>
              <input class= "jobinput" type="checkbox" id="BROKER-CONSULTANT" value="BROKER_CONSULTANT" name="user_interest"><label class="light" for="business">Broker Consultant</label><br>
              <input class= "jobinput" type="checkbox" id="INTERNSHIP" value="INTERNSHIP" name="user_interest"><label class="light" for="business">Internship (Please specify below)<select id="job" name="user_job">
          <optgroup label="Available Internships">
			<option value="web">Please select an option...</option>
            <option value="web">Web Development Internship</option>
            <option value="hr">Human Resources Internship</option>
			<option value="business">Business Internship</option>
			<option value="graphic">Graphic Design Internship</option>
          </optgroup>
          </select></label><br><br>

                        Title of Resume:<br>
                        <input type="text" name="textline" size="30"><br>
                        Upload Resume:<br>
                        <input type="file" name="datafile1" size="40"><br><br>

                        Title of Cover Letter:<br>
                        <input type="text" name="textline" size="30"><br>
                        Upload Cover Letter:<br>
                        <input type="file" name="datafile2" size="40">
                        </p>
        </fieldset>
        <button class="job-button" type="submit">Send Application</button>
      </form>
	</ul>
</div>


   <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->

  	<script src="javascript/popup.js"></script>

	<!-- Magnific Popup core JS file -->
	<script src="javascript/jquery.magnific-popup.js"></script>

	<script src="javascript/Careers.js"></script>

	</body>
	
	<div class = "containerfull">
	<footer>
	<div id="contact-us" align = "center">
        <br>
        <div class="contact-us-section">
            	<div class = "contacttitle"><h2><strong>CONTACT US</strong></h2></div>
            <br />
			<table><tr><td>
            <div class="contact-us-table">
                <div id="contact-us-address" >1 S FAIR OAKS AVE.
                    <br>SUITE #200,
                    <br>PASADENA, CA 91105
                    <br>PHONE: (626) 796-7077
                    <br>FAX: (626) 796-7060
                </div></td><td>
                <div class="contact-us-form">
				<p id = "feedback"> <?php echo "Your message has been sent";?></p>
                    <form action="?"  method="post" >
                        <input name = "email" id = "email" type="text" placeholder="EMAIL ADDRESS" />
                        <br />
                        <input name = "title" id = "title" type="text" placeholder="SUBJECT" />
                        <br />
                        <textarea name = "message" id = "message" type="text" rows="5" placeholder="YOUR MESSAGE" /></textarea>
                        <br />
                        <input type="submit" class="btn btn-contact-us" value="SUBMIT" />
                    </form>
					<br>
                </div></td><td>
                <div class="contact-us-images">
                   <a href="https://www.facebook.com/Everwell-Pasadena-1548917178752690/?ref=hl" target="_blank">
                        <div class = "facebook"><img src="images/contact-us-fb.png" onmouseover="this.src ='images/facebookcolor.png'" onMouseOut="this.src='images/contact-us-fb.png'" /></div>
                    </a>
                    <br />
                    <a href="https://www.twitter.com/EverwelPasadena/" target="_blank">
                       <div class = "twitter"><img src="images/contact-us-twitter.png" onMouseOver="this.src='images/TwitterHoverImage.png'" onMouseOut="this.src='images/contact-us-twitter.png'" /></div>
                    </a>
                    <br />
                    <a href="https://www.instagram.com/everwellpasadena" target="_blank">
                       <div class = "instagram"><img src="images/contact-us-instagram.png" onMouseOver="this.src='images/InstaHover.jpg'" onMouseOut="this.src='images/contact-us-instagram.png'" /></div>
                    </a>
                </div></td>
            </div></tr></table>
			<br>
        </div>
    </div>
    </div>

	<div class='google-map'>
  		<iframe width="100%" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1167.4459997327056!2d-118.15053006987216!3d34.145422818226116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c37106e2052f%3A0xdba36242e334c1f5!2s1+S+Fair+Oaks+Ave%2C+Pasadena%2C+CA+91105!5e0!3m2!1sen!2sus!4v1437027512796" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	</footer>
	</div>

</html>
