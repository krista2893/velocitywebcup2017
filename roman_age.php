<!DOCTYPE html>
<html lang="en">
<head>
	    <title>Velocity | Roman Age</title>


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

  	<link rel='shortcut icon' href='fav.png' type='image/x-icon'/ >

  	<style>

  		body, html 
  		{
		    height: 100%;
		    margin: 0;
		}

		.bg 		
		{
		    background-image: url("assets/_images/roman_new_bg.jpg");
			position: relative;		    
		    height: 100%; 		   
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

  	</style>

</head>
<body>

	<div class="bg">
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<div class="caption_home_roman">
			
    				<span class="border">It will not be easy but it will be worth it... Come and feel being a gladiator, or visit the ancient capital of Rome...!</span><br>
    			</div>
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
	
		<span style="font-size:30px;cursor:pointer" onclick="openNav();">&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true"></i></span>

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
					<li><span class="filter active" data-filter=".explore, .glad, .horse">All</span></li>
					<li><span class="filter" data-filter=".explore">Explore</span></li>
					<li><span class="filter" data-filter=".glad">Gladiator Fighting</span></li>
					<li><span class="filter" data-filter=".horse">Horse Riding</span></li>
					
					
				</ul>

				<div id="portfoliolist">
					
					<div data-toggle="modal" data-target="#villa_web">
						<div class="portfolio glad" data-cat="glad">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_5.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Gladiator Fighting</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>					
						
					<div data-toggle="modal" data-target="#lounge_web">
						<div class="portfolio explore" data-cat="explore">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_2.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Visit the Colosseum</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>

					<div data-toggle="modal" data-target="#ken_web">
						<div class="portfolio horse" data-cat="horse">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_4.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Horse Riding</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>

					<div data-toggle="modal" data-target="#villa_app">
						<div class="portfolio glad" data-cat="glad">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/lion-robot.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Fight against the mighty lion</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>


					<div data-toggle="modal" data-target="#portfolio_web3">
						<div class="portfolio explore" data-cat="explore">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_8.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Explore</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>

					<div data-toggle="modal" data-target="#portfolio_web2">
						<div class="portfolio glad" data-cat="glad">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_1.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Fight against a gladiator</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>	

					<div data-toggle="modal" data-target="#bistro_web">
						<div class="portfolio explore" data-cat="explore">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_7.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Explore the capital city of Rome</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
					</div>	

					<div data-toggle="modal" data-target="#archi_web">
						<div class="portfolio horse" data-cat="horse">
							<div class="portfolio-wrapper">				
								<img src="assets/_images/roman_9.jpg" alt="" />
								<div class="label">
									<div class="label-text">										
										<span class="text-category">Horse Riding</span>
									</div>
									<div class="label-bg"></div>
								</div>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#glad_fighting">Gladiator Fighting</a>
                    </h4>
                </div>
                <div id="glad_fighting" class="panel-collapse collapse in">
                    <div class="panel-body">
                       	The Gladiator Fighting is reserved for persons aged over 18 years only.<br />

                       	You can fight against our human-like robots or the mighty Lion Bot.<br /><br />

                       <a href="roman_age_more.php" class="btn btn-default">View More</a>

                       	
                       
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#exploration">Exploration</a>
                    </h4>
                </div>
                <div id="exploration" class="panel-collapse collapse">
                    <div class="panel-body">
                        Visit the ancient city of Rome. <br />

                        You can interact with our human like bots on the street of Rome. <br /><br />

                         <a href="roman_age_more_explore.php" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#horse_riding">Horse Riding</a>
                    </h4>
                </div>
                <div id="horse_riding" class="panel-collapse collapse">
                    <div class="panel-body">
                        Feel this one time experience adventure with the android horses.<br /><br />

                        <a href="roman_age_more_horse.php" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row text-center">
    		<div class="col-md-12">
    			

    			<button class="btn btn-default book" onclick="book_package(1);">Book now</button>
    		</div>
    	</div>
    </div>
    
    
  	<br /><br /><br /><br /><br /><br />

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
      		  filter: '.glad'  
      		}     
				});								
			
			}

		};
		
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


