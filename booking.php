<!DOCTYPE html>
<html lang="en">
<head>
	<title>Velocity | Booking</title>

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
	

	<!-- JS lib -->
    <script src="assets/_js/jquery.min.js"></script>
    <script src="assets/_js/bootstrap.min.js"></script>
    <script src="assets/_js/toastr.min.js"></script>
  	<script src="assets/_js/bootstrap-multiselect.js"></script>
  	<script src="assets/_js/bootstrap-datepicker.js"></script>
 	
  	<link href="https://fonts.googleapis.com/css?family=Dosis|Josefin+Sans:300|Open+Sans+Condensed:300" rel="stylesheet">

  	<link rel='shortcut icon' href='fav.png' type='image/x-icon'/ >

  	<style>

  		body, html 
  		{
		    height: 100%;
		    margin: 0;
		}

		.bg1 		
		{
		    background-image: url("assets/_images/roman_bg.jpg");
			position: relative;		    
		    height: 75%; 		   
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

		.bg2 		
		{
		    background-image: url("assets/_images/egypt_bg.jpg");
			position: relative;		    
		    height: 75%; 		   
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

		.bg3		
		{
		    background-image: url("assets/_images/stone_4.jpg");
			position: relative;		    
		    height: 75%; 		   
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}
	</style>

</head>
<body>

	<?php
		if(isset($_GET['package']))
		{
			$package_no = $_GET['package'];
			if($package_no == 1) //roman
			{
				echo '<div class="bg1">';
				
			}
			else if($package_no == 2) //egypt
			{
				echo '<div class="bg2">';
				
			}
			else if($package_no == 3) //stone
			{
				echo '<div class="bg3">';
				
			}
		}
	?>


		<div class="caption_home">
    		<span class="border">Welcome to Android Land!</span><br>
    
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

	<!-- content -->

	<br />
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="booking_title">Accomodation</div>
			</div>
		</div>
		<div class="booking_content">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">			
					<div class="form-group">
					  	<label for="sel1">Choose your room:</label>
					  	<select class="form-control" id="room_type" onchange="DisplayRoomPrice();">
					  		<option value="0">Select Room</option>
						    <option value="1">Standard Room</option>
						    <option value="2">Deluxe Room</option>
						    <option value="3">Suite</option>						    
					  </select>
					</div>
				</div>
			

				<div class="col-md-3">
					<div class="form-group">
						<label for="sel1">Arrival Date:</label>							
						<div class="input-group date" data-provide="datepicker">
							<input type="text" class="form-control spec_width" name="delidate" id="txtFromDate">
							<div class="input-group-addon">									        
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="sel1">Departure Date:</label>							
						<div class="input-group date" data-provide="datepicker">
							<input type="text" class="form-control spec_width" name="delidate" id="txtToDate">
							<div class="input-group-addon">									        
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<br />
					<button onclick="update_price();" class="btn btn-default">Calculate Price</button>
				</div>

			</div>		
		</div>

		<div class="row">
			<div class="col-md-7 col-md-offset-1">
				<?php
					if(isset($_GET['package']))
					{
						$package_no = $_GET['package'];

						if($package_no == 1) //roman
						{
							echo '
								<div class="booking_title">Product</div><br />
								<div class="booking_content">Roman Age</div>

								<br /><br />

								<div class="booking_title">Description </div><br />
								<div class="booking_content">
									Explore the ancient city of Rome while interacting with life looking bots.<br />

									Fight against robots gladiators and lions.<br />

									Ride robots horses like the Roman cavalry.<br />
								</div>

							';
						}
						else if($package_no == 2) //roman
						{
							echo '
								<div class="booking_title">Product</div><br />
								<div class="booking_content">Egypt</div>

								<br /><br />

								<div class="booking_title">Description </div><br />
								<div class="booking_content">
									Explore the Ancient Egypt.
								</div>

							';
						}

						else if($package_no == 3) //roman
						{
							echo '
								<div class="booking_title">Product</div><br />
								<div class="booking_content">Stone Age</div>

								<br /><br />

								<div class="booking_title">Description </div><br />
								<div class="booking_content">
									Relive the adventures of the cavemen.
								</div>

							';
						}
					}

				?>
			</div>

			<div class="col-md-4">
				
				<div class="booking_title">Price Summary Table</div>
				<div class="table-responsive">
					<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>Basic Package</th>
							<td>
								<?php
									if(isset($_GET['package']))
									{
										$package_no = $_GET['package'];

										if($package_no == 1) //roman
										{
											echo "$4000";
										}
										else if($package_no == 2) //egypt
										{
											echo "$5000";
										}
										else if($package_no == 3) //stone
										{
											echo "$6000";
										}

										echo '<input type="hidden" id="hdPackage" value="' . $package_no . '" />';
									}
								?>

							</td>
						</tr>

						<tr>
							<th>Room charges</th>
							<td><input type="text" id="txtRoomPrice" class="no_border_field" readonly="true"></td>
						</tr>

						<tr>
							<th>No. of Travel Days</th>
							<td><input type="text" id="txtTravelDays" class="no_border_field" readonly="true"></td>
						</tr>

						<tr>
							<th>Total Amount</th>
							<td style="font-weight: bold;"><input type="text" id="txtTotalPrice" class="no_border_field" readonly="true"></td>
						</tr>

					</table>
					
				</div>
			</div>
		</div>

		<br />

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="booking_title">Your details</div>
			</div>
		</div>
		<div class="booking_content">
			<div class="row">
				<div class="col-md-2 col-md-offset-1">			
					<div class="form-group">
					  	<label for="sel1">Title:</label>
					  	<select class="form-control" id="txtTitle">
					  		<option value="0">Select</option>
						    <option value="1">Mr.</option>
						    <option value="2">Mrs.</option>
						    <option value="3">Ms.</option>						    
					  </select>
					</div>
				</div>
			

				<div class="col-md-3">
					<div class="form-group">
						<label for="sel1">Name:</label>							
						<div class="form-group">
							<input type="text" class="form-control" name="delidate" id="txtName">							
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="sel1">Email:</label>							
						<div class="form-group">
							<input type="email" class="form-control" name="delidate" id="txtEmail">							
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="sel1">Phone:</label>							
						<div class="form-group">
							<input type="text" class="form-control" name="delidate" id="txtPhone">							
						</div>
					</div>
				</div>

			</div>		
		</div>
		
		<button onclick="checkout();" class="btn btn-default pull-right">Checkout</button>
					
	</div>



	<!-- end content -->
	
  	<br /><br /><br />

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


	<script>
		$(function(){
		    $('.carousel').carousel({
		      	interval: 5000
		    });
		});

	</script>

	<script>

		function sendmessage()
		{
			$("#txtEmail").val("");
			$("#txtPhone").val("");
			$("#txtComment").val("");
			toastr.success("Your message has been successfully sent.");
		}

	</script>

	<script>
		function DisplayRoomPrice()
		{
			var room_type = $("#room_type").val();

			if(room_type == 1)
			{
				room_price = "$200";
			}
			else if(room_type == 2)
			{
				room_price = "$300";
			}
			else if(room_type == 3)
			{
				room_price = "$400";
			}

			$("#txtRoomPrice").val(room_price);
		}

	</script>

	<script>
		function update_price()
		{
			var room_type = $("#room_type").val();
			var from_date = $("#txtFromDate").val();
			var to_date = $("#txtToDate").val();
			var room_price = 0;
			var no_of_days = daysBetween(from_date, to_date);
			var y = 0;                                            
   			var z = "There have been some errors: <br /><br />";
   			var package_no = $("#hdPackage").val();

   			var package_price = 0;
			
			if(package_no == 1) //roman
			{
											package_price = 4000;
										}
										else if(package_no == 2) //egypt
										{
											package_price = 5000;
										}
										else if(package_no == 3) //stone
										{
											package_price = 6000;
										}


   			if(room_type == 0 || room_type == null)
			{
				y = parseInt(y) + 1;
       				z = z + "Please select a room type.<br />";

			}

   			else if(from_date == 0 || from_date == null)
			{
				y = parseInt(y) + 1;
       				z = z + "Please select an arrival date.<br />";

			}
			else if(to_date == 0 || to_date == null)
			{
				y = parseInt(y) + 1;
       				z = z + "Please select a departure date.<br />";

			}
			

			if (parseInt(y) > 0) {
        			
				$("#err_msgs").html(z);
				$('#myModal').modal('show'); 
    		}
			
			else 
			{
				if(room_type == 1)
				{
					room_price = 200;

				}
				else if(room_type == 2)
				{
					room_price = 300;
				}
				else if(room_type == 3)
				{
					room_price = 400;
				}

				var total_price = no_of_days * room_price;
				total_price = total_price + package_price;
				total_price = "$"+total_price;

				$("#txtTotalPrice").val(total_price);
				$("#txtTravelDays").val(no_of_days);
			}

		}

	</script>

	<div id="myModal" class="modal fade" role="dialog">
	  	<div class="modal-dialog">	   
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Error: Missing Fields</h4>
	      		</div>

			    <div class="modal-body">
			        <p id="err_msgs"></p>
			    </div>

			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
	    	</div>
	  	</div>
	</div>

	<script>
		function daysBetween(startDate, endDate) {
		    var millisecondsPerDay = 24 * 60 * 60 * 1000;
		    return (treatAsUTC(endDate) - treatAsUTC(startDate)) / millisecondsPerDay;
		}

		function treatAsUTC(date) {
		    var result = new Date(date);
		    result.setMinutes(result.getMinutes() - result.getTimezoneOffset());
		    return result;
		}
	</script>

	<script>

		function checkout()
		{
			var total_price = $("#txtTotalPrice").val();			
			var price = total_price.replace("$", "");

			var title = $("#txtTitle").val();
			var name = $("#txtName").val();	
			var email = $("#txtEmail").val();	
			var phone = $("#txtPhone").val();	

			var y = 0;                                            
   			var z = "There have been some errors: <br /><br />";

   			if(price == 0 || price == null)
			{
				y = parseInt(y) + 1;
       			z = z + "Please calculate your total price first.<br />";
			}

			if (parseInt(y) > 0) {
        			
				$("#err_msgs").html(z);
				$('#myModal').modal('show'); 
    		}			
			else
			{
				window.location.replace("payment.php?total=" + price + "&title=" + title + "&name=" +name + "&email=" + email + "&phone=" + phone);
			}		
			
		}

	</script>

	

	
	<script src="assets/_js/velocity.js"></script>
</body>
</html>


