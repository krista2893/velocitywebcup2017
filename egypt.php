<!DOCTYPE html>
<html lang="en">

<head>
	<title>Velocity | Ancient Egypt</title>

	<!-- meta data -->
	<meta charset="utf-8">
	<meta name="description" content="Webcup Team Velocity">
	<meta name="keywords" content="Velocity, Webcup, 2017">
	<meta name="author" content="TeamVelocity">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end meta data -->

	<!-- CSS libraries -->
	<link rel="stylesheet" href="assets/_css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/_css/toastr.min.css" />
	<link rel="stylesheet" href="assets/_css/bootstrap-datepicker3.css" />
	<link rel="stylesheet" href="assets/_css/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="assets/_css/velocity.css" />
	<link rel="stylesheet" href="assets/_css/font-awesome.css" />
	<link rel="stylesheet" href="assets/_css/layout.css" />


	<!-- JS lib -->
	<script src="assets/_js/jquery.min.js"></script>
	<script src="assets/_js/bootstrap.min.js"></script>
	<script src="assets/_js/toastr.min.js"></script>
	<script src="assets/_js/bootstrap-multiselect.js"></script>
	<script src="assets/_js/bootstrap-datepicker.js"></script>
	<script src="assets/_js/jquery.mixitup.min.js"></script>

	<link rel='shortcut icon' href='fav.png' type='image/x-icon' />

	<style>
		body,
		html {
			height: 100%;
			margin: 0;
		}

		.bgimg {
			position: relative;
			background-image: url(assets/_images/egypt_bg.jpg);
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		
		h3 {
			letter-spacing: 5px;
			font: 22px "Lato", sans-serif;
			opacity: 0.8;
			color: #111;
		}

		h1 {
			letter-spacing: 1px;
			font: 19px "Lato", sans-serif;
			opacity: 0.8;

			color: #111;
		}
		
	</style>


</head>


<body>
	<div class="bgimg">
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<div class="caption_home_roman">

					<span class="border"><h3>Welcome to Ancient Egypt</h3><h1> The mysteries and thrills deep engraved in eons old stones,
					 and pyramids... What if you could be the Pharaoh for a day? Live in the authentic
					  Ancient Egypt with all its magic and charm, without needing a time machine.. It's time to fulfill your craziest dreams.
					   Don't wait anymore! Book now!!</h1></span>
				</div>
			</div>

			<div id="myNav" class="overlay">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

				<div class="overlay-content">
			    <a href="index.php">Home</a>
			    <a href="about.php">About</a>
			    <a href="activities.php">Activities</a>			   
			</div>

			</div>
			<br />
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true"></i></span>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-md-12">
				<div class="main_page_title">Activities</div>
				<hr id="title_sep">
				<br />
			</div>
		</div>


	</div>


	<div class="container-fluid">

		<div class="row">
			<div class="container">

				<ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter=".explore, .coronation, .downthenile">All</span></li>
					<li><span class="filter" data-filter=".explore">Explore</span></li>
					<li><span class="filter" data-filter=".coronation">Coronation</span></li>
					<li><span class="filter" data-filter=".downthenile">Down the Nile</span></li>
					
				</ul>

				<div id="portfoliolist">

					<div data-toggle="modal" data-target="#egypt_web">
						<div class="portfolio explore" data-cat="explore">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/pyramids.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">The ever-lasting pyramids</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>
					<div data-toggle="modal" data-target="#egypt_web">
						<div class="portfolio explore" data-cat="explore">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/hiero.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Learn the ancient script</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>
					<div data-toggle="modal" data-target="#egypt_web">
						<div class="portfolio explore" data-cat="explore">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/cave.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Explore the dreamy alleys</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>

					
					<div data-toggle="modal" data-target="#king_web">
						<div class="portfolio coronation" data-cat="coronation">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/king.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Become the Pharaoh</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>
					<div data-toggle="modal" data-target="#king_web">
						<div class="portfolio coronation" data-cat="coronation">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/king2.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">With all the ceremony</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>
					<div data-toggle="modal" data-target="#king_web">
						<div class="portfolio coronation" data-cat="coronation">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/king3.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Feel the might of Ramses II</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>

					<div data-toggle="modal" data-target="#Nile_web">
						<div class="portfolio downthenile" data-cat="downthenile">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/nile.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Down the mighty Nile</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>
					<div data-toggle="modal" data-target="#Nile_web">
						<div class="portfolio downthenile" data-cat="downthenile">
							<div class="portfolio-wrapper">
								<img src="assets/_images/egypt/map.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Admire the luscious green shore</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>



  	<br /><br />

  	<div class="container">
       
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#glad_fighting">Exploration</a>
                    </h4>
                </div>
                <div id="glad_fighting" class="panel-collapse collapse in">
                    <div class="panel-body">

                    	<p>Walk around the narrow alleys of Ancient Egypt, discovering the many mysteries hidden...
					Uncover the secrets long lost in pyramids and sphinx. 
<br /><br />
						Be a guest to the royal family and witness 
						the strictness of the royal guards.... Gods, temples, rituals, magic, all unveiled to your hungry eyes </p>
                       	
                       
                       	<br /><br />
                       <a href="egypt_exploration.php" class="btn btn-default">View More</a>

                       	
                       
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#exploration">Coronation</a>
                    </h4>
                </div>
                <div id="exploration" class="panel-collapse collapse">
                    <div class="panel-body">
                       Fulfill all your craziest fantasies for a day, become a powerful Pharaoh of the mighty Ancient Egypt.
 <br /><br />

                         <a href="egypt_coronation.php" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#horse_riding">Down the Nile</a>
                    </h4>
                </div>
                <div id="horse_riding" class="panel-collapse collapse">
                    <div class="panel-body">
                        Have a peaceful eye-candy ride down the Nile, along the luscious green valley.<br /><br />

                        <a href="egypt_nile.php" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     <div class="container-fluid">
    	<div class="row text-center">
    		<div class="col-md-12">
    			

    			<button class="btn btn-default book" onclick="book_package(2);">Book now</button>
    		</div>
    	</div>
    </div>

    <footer>
  		<br /><br />
  		<div class="row">
  			<div class="col-md-5">

  				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59467.68529789404!2d-157.8429341432484!3d21.321669425019323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006cffad967ba3%3A0x872b278296f1981d!2zTcSBbm9hLCBIb25vbHVsdSwgSEksIFVTQQ!5e0!3m2!1sen!2smu!4v1495297995181" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  			</div>


  			<div class="col-md-4">
  				<div class="main_page_title">Follow Us</div>

  				<div class="row">
  					<div class="col-md-10 col-md-offset-1">
		  				<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
		  				<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
		  				<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
		  				<i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i>
		  				<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
		  			</div>
		  		</div>
		  		<br /><br />
		  		<div class="row">
  					<div class="col-md-12">
		  				<img class="img-rounded" src="assets/_images/visa.png" alt="Visa" style="width: 70px; height: 40px;">
		  				<img class="img-rounded" src="assets/_images/mastercard.png" alt="master" style="width: 70px; height: 40px;">
		  				<img class="img-rounded" src="assets/_images/maestro.png" alt="maestro" style="width: 70px; height: 40px;">
		  				<img class="img-rounded" src="assets/_images/amex.png" alt="amex" style="width: 70px; height: 40px;">
				  		
		  			</div>
		  		</div>


  			</div>

  			<div class="col-md-3">

  				<img src="assets/_images/logo.jpg" style="width: 200px; height: 200px;" class="img-responsive" />
  			</div>



  		</div>

  		Copyright &copy; 2017 Velocity Webcup. All rights reserved.

  	</footer>


		

		<br /><br /><br /><br /><br /><br />

		<script type="text/javascript">
			$(function () {

				var filterList = {

					init: function () {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixItUp({
							selectors: {
								target: '.portfolio',
								filter: '.filter'
							},
							load: {
								filter: '.explore'
							}
						});

					}

				};
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
					acc[i].onclick = function () {
						/* Toggle between adding and removing the "active" class,
						to highlight the button that controls the panel */
						this.classList.toggle("active");

						/* Toggle between hiding and showing the active panel */
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
							panel.style.display = "none";
						} else {
							panel.style.display = "block";
						}
					}
				}

				// Run the show!
				filterList.init();


			});
		</script>
	
	<script>

		function book_package(package_no)
		{
			window.location.reload("booking.php");
			window.location.replace("booking.php?package=" + package_no);
		}

	</script>


	<script src="assets/_js/velocity.js"></script>

</body>

</html>