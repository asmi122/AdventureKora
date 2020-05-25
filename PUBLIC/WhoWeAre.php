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
        
<!-----------who we are------------------->

<section class="company-intro">
			<div class="container">
			<h2>AdventureKora- Who We Are?</h2><br><hr>
				<div class="row">
				    <div class="col-lg-6">
						<div class="intro-text">
							
							<p> The Himalayas hold a special and spiritual meaning to everybody who travels to Nepal. With some of the highest mountains in the world, the geography offers you unlimited adventure, and at the same time, the mountains which are considered to be holy provides you with a glimpse of the spiritual and inner wellness within your adventurous spirit.</br></br>Inspired by the Tibetan Buddhist word Kora, which means circling a particular place for a meditative practice, at Adventure Kora we offer a unique travel experience that combines both adventure and wellness.</br></br>
 We are a Nepal based adventure company which specializes in small group bespoke travel in the Himalayas. Our itineraries offer visitors an opportunity to learn about Nepal’s unique history, to experience its local culture, and to explore the adventures Nepal has to offer alongside the idea of wellness, which is an important part of its cultural fabric.</br></br>
 </p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="intro-image">
							<a href="#"><img src="images/intro.png"></a>
						</div>
					</div>
				</div>
			</div>
		</section><hr>

<!-----------------------divider---------------------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	       
        </div>
    </div>
</div>

<!---------------------Customise package search----------------->

<section class="call-to-action-box no-padding">
			<div class="container">
				<div class="action-style-box">
					<div class="row">
						<div class="col-md-10">
							<div class="call-to-action-text">
								<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
						</div>
						</div>
					</div><!-- row end -->
				</div><!-- Action style box -->
			</div><!-- Container end -->
		</section><!-- Action end --><br>
<!---------------------videp play section----------------->

    <!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>