<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="CSS/mystyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Adventure Kora</title>
  </head>
  <body>
   <!-- header: logo and navigation-menu -->
   <?php 
    include('HeaderFooter/header.php'); 
    ?>
    <!-- end header -->
 <!-- Top content -->
 <!--Contact form start-->
 
 <div class="enquiry-contact"> 
	 <h1>Plan Your Trip</h1>
	 <p>Please fill all the mandetory field in the above form to submit your request to customise your Holiday Trip. We will get back to you via email within one business day. </p>
	 <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
			
				<div class="row">
					<div class="booking-form">
						
						<form>
						    <div class="row">
                            <div class="col-lg-6">
								<div class="form-group">
									<span class="form-label">First Name</span>
									<input class="form-control" type="text" id="fir" required>
								</div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
									<span class="form-label">Last Name</span>
									<input class="form-control" type="text" id="last" required>
								</div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
									<span class="form-label">Country</span>
                                <input class="form-control"type="text" id="cun" required>
								</div>
                            </div>
                            <div class="col-lg-12">
                               <div class="form-group">
									<span class="form-label">Street Address</span>
                                <input type="text" id="street" class="form-control" required>
                       
								</div>
                            </div>
                            <div class="col-lg-6">
							<div class="form-group">
									<span class="form-label">Postcode / ZIP (optional)</span>
									<input class="form-control" type="text" id="zip" required>
                            </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
									<span class="form-label">Town / City</span>
                                    <input class="form-control" type="text" id="town" required>
                            </div>
							</div>
                            <div class="col-lg-6">
							<div class="form-group">
									<span class="form-label">Email Adderss</span>
                                <input  class="form-control" type="text" id="email" required>
                            </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
									<span class="form-label">Phone</span>
                                <input class="form-control" type="text" id="phone" required>
                            </div>
						</div>
				
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Tour Start Date</span>
										<input class="form-control" type="date" required>
									</div>
									<span class="in-out hidden-xs hidden-sm">&#8652;</span>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Estimated Tour End date</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children</span>
										<select class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">What more activities do your prefer?</span>
										<select class="form-control">
										    <option>Select</option>
											<option>Trekking</option>
											<option>Peak Climbing</option>
											<option>Tours</option>
											<option>Adventures Sports</option>
											<option>Volunteering</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Activity Level</span>
										<select class="form-control">
											<option>Easy</option>
											<option>Moderate</option>
											<option>Difficult</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-lg-12">
								     <div class="form-group">
                                       <span class="form-label">Destinations</span>
											<select class="form-control">
											<option>Easy</option>
											<option>Moderate</option>
											<option>Difficult</option>
										</select>
										<span class="select-arrow"></span>
                                     </div>
								</div>
								<div class="col-lg-12">
								     <div class="form-group">
                                       <span class="form-label">Special Requirements</span>
											<textarea class="form-control" rows="5" id="comment"></textarea>
                                     </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button class="submit-btn">Send Enquiry</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

  <!--Contact form end-->
            <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>