<!DOCTYPE html>
<html lang="en">

<head>
   
<title>Velocity | Stone Age</title>
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
            background-image: url(assets/_images/stoneage/hunt3.jpg);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* Style the buttons that are used to open and close the accordion panel */

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

                    <span class="border"><h3>Welcome to Stone Age Era</h3><h1> The mysteries and thrills deep engraved in eons old stones,
                         It's time to fulfill your craziest dreams.
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
                    <li><span class="filter active" data-filter=".hunt, .cavepainting, .trail">All</span></li>                 
                    <li><span class="filter" data-filter=".hunt">Hunt</span></li>
                    <li><span class="filter" data-filter=".cavepainting">Cave Painting</span></li>
                    <li><span class="filter" data-filter=".trail">Trail</span></li>

                </ul>

                <div id="portfoliolist">

                  
					
                    <div data-toggle="modal" data-target="#egypt_web">
						<div class="portfolio hunt" data-cat="hunt">
                            <div class="portfolio-wrapper" >
								<img src="assets/_images/stoneage/hunt2.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<span class="text-category">Arrows for a mammoth!?</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-toggle="modal" data-target="#egypt_web">
                        <div class="portfolio cavepainting" data-cat="cavepainting">
                            <div class="portfolio-wrapper">
                                <img src="assets/_images/stoneage/painting1.jpg" alt="" />
                                <div class="label">
                                    <div class="label-text">
                                        <span class="text-category">Painting at its best</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-toggle="modal" data-target="#egypt_web">
                        <div class="portfolio cavepainting" data-cat="cavepainting">
                            <div class="portfolio-wrapper">
                                <img src="assets/_images/stoneage/painting2.jpg" alt="" />
                                <div class="label">
                                    <div class="label-text">
                                        <span class="text-category">Painting at its best</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-toggle="modal" data-target="#mummy_web">
                        <div class="portfolio trail" data-cat="trail">
                            <div class="portfolio-wrapper">
                                <img src="assets/_images/stoneage/campfire.jpg" alt="" />
                                <div class="label">
                                    <div class="label-text">
                                        <span class="text-category">A special guide through the jungle</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-toggle="modal" data-target="#mummy_web">
                        <div class="portfolio trail" data-cat="trail">
                            <div class="portfolio-wrapper">
                                <img src="assets/_images/stoneage/tiger.jpg" alt="" />
                                <div class="label">
                                    <div class="label-text">
                                        <span class="text-category">Meet the Stone Age animals</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div data-toggle="modal" data-target="#egypt_web">
                        <div class="portfolio hunt" data-cat="hunt">
                            <div class="portfolio-wrapper">
                                <img src="assets/_images/stoneage/hunt.jpg" alt="" />
                                <div class="label">
                                    <div class="label-text">
                                        <span class="text-category">Arrows for a mammoth!?</span>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

            <div class="container">
       
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#glad_fighting">Hunt</a>
                    </h4>
                </div>
                <div id="glad_fighting" class="panel-collapse collapse in">
                    <div class="panel-body">

                      Time to flex your muscles and sharpen your focus...else you die of hunger!!
                        <br /><br />
                       <a href="stone_hunt.php" class="btn btn-default">View More</a>

                        
                       
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#exploration">Cave Painting</a>
                    </h4>
                </div>
                <div id="exploration" class="panel-collapse collapse">
                    <div class="panel-body">
                      Discover the first artistic steps of humanity

 <br /><br />

                         <a href="stone_paint.php" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#horse_riding">Trail</a>
                    </h4>
                </div>
                <div id="horse_riding" class="panel-collapse collapse">
                    <div class="panel-body">
                       <p>How about changing the usual trail down the beaten city tracks,
                     for one through a dense jungle full of surprises and dangers, like our ancestors used to in their daily .</p>
            
                        <a href="stone_trail.php" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>

       <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                

                <button class="btn btn-default book" onclick="book_package(3);">Book now</button>
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
                                filter: '.hunt'
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