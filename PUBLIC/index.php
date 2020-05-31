<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="CSS/mystyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
        <div class="top-content">
       		<div class="row no-gutters">
       			<div class="col">
       				<div id="carousel-example" class="carousel slide" data-ride="carousel">
       					<ol class="carousel-indicators">
       						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
       						<li data-target="#carousel-example" data-slide-to="1"></li>
       						<li data-target="#carousel-example" data-slide-to="2"></li>
       					</ol>
       					<div class="carousel-inner">
       						<div class="carousel-item active">
       							<img src="images/slide-1.jpg" class="d-block w-100" alt="img1">
								<div class="carousel-caption">
									<h1 class="wow fadeInLeftBig">A New Sky ,A New Life.</h1>
									<div class="description wow fadeInUp">
										<p>
											Choose you new destination to discover with us.
										</p>
										<a href="#"><button type="button" class="btn">Discover more</button></a>
									</div>
								</div>
       						</div>
       						<div class="carousel-item">
       							<img src="images/slide1.jpg" class="d-block w-100" alt="img2">
       							<div class="carousel-caption">
									<h1 class="wow fadeInLeftBig">Tours</h1>
									<div class="description wow fadeInUp">
										<p>
										Discover the unique and diverse culture of Nepal.	
										</p>
										<a href="#"><button type="button" class="btn">Discover more</button></a>
									</div>
								</div>
       						</div>
       						<div class="carousel-item">
       							<img src="images/slide-2.jpg" class="d-block w-100" alt="img3">
       							<div class="carousel-caption">
									<h1 class="wow fadeInLeftBig">Adventure</h1>
									<div class="description wow fadeInUp">
										<p>
											Experienec the thrill of adventure in The Himalayas.
										</p>
										<a href="#"><button type="button" class="btn">Discover more</button></a>
									</div>
								</div>
       						</div>
       					</div>
						<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
       				</div>
       			</div>
       		</div>
        </div><hr>
		<!---------------------Customise package search----------------->

<section class="call-to-action-box">
			<div class="container">
				<div class="action-style-box">
					<div class="row">
						<div class="col-md-10">
							<div class="call-to-action-text">
								<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
								<div class="find_item">
								<div>Trip Type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>--Select--</option>
									<option>Trekking</option>
									<option>Peak climbing</option>
									<option>Tours</option>
									<option>Adventure Sports</option>
									<option>Volunteering</option>
								</select>
							</div>
							<div class="find_item">
								<div>Number of Days:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>--Select--</option>	
									<option>1-7</option>
									<option>8-14</option>
									<option>15-21</option>
									<option>22-30</option>
								</select>
							</div>
							<div class="find_item">
								<div>Trip Month:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>--Select--</option>	
									<option>January</option>
									<option>February</option>
									<option>March</option>
									<option>April</option>
									<option>May</option>
									<option>June</option>
									<option>July</option>
									<option>August</option>
									<option>September</option>
									<option>October</option>
									<option>November</option>
									<option>December</option>
								</select>
							</div>
							<div class="find_item">
								<div>Difficulty Level:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>--Select--</option>	
									<option>Easy</option>
									<option>Moderata</option>
									<option>Quite Tough</option>
									<option>Extremely Tough</option>
								</select>
							</div>
							
							<button class="button find_button">Find Your Trip</button>
						</form>
						</div>
						</div>
					</div><!-- row end -->
				</div><!-- Action style box -->
			</div><!-- Container end -->
		</section><!-- Action end --><br>
	<!------------Divider-------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	       <h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-box-open"></i>   Featured Package</h3>
        </div>
    </div>
</div>
<!----------------Featured package------------->
<div class="featuredPackage">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="image">
						<img src="images/package-1.jpg">
					</div>
					<div class="card-inner">
						<div class="header">
							<h2>Base Camp Trek</h2>
							<h3>Everest Region</h3>
						</div>
					<div class="content">
						<p><i class="fas fa-calendar-day"></i> 21 Days</p>
					</div>
					<a href="#"><button type="button" class="btn">Book Now</button></a>
				</div>
			</div>
		</div>
    <div class="col-sm-4">
		<div class="card">
			<div class="image">
				<img src="images/package-2.jpg">
			</div>
			<div class="card-inner">
				<div class="header">
					<h2>Gokyo Lake Trek</h2>
					<h3>Everest region</h2>
				</div>
				<div class="content">
					<p><i class="fas fa-calendar-day"></i> 14 Days</p>
				</div>
				<a href="#"><button type="button" class="btn">Book Now</button></a>
		</div>
	</div>
</div>
<div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-3.jpg">
	</div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region  </h3>
    </div>
    <div class="content">
      <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
    </div>
  </div>
</div>

<div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-4.jpg">
    </div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region  </h3>
    </div>
    <div class="content">
      <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div><div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-5.jpg">
    </div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region  </h3>
    </div>
    <div class="content">
      <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="images/package-2.jpg">
    </div>
    <div class="card-inner">
      <div class="header">
        <h2>Everest Three Pass Trek</h2>
        <h3>Everest Region </h3>
    </div>
    <div class="content">
     <p><i class="fas fa-calendar-day"></i> 14 Days</p>
    </div>
	<a href="#"><button type="button" class="btn">Book Now</button></a>
      </div>
  </div>
</div>
</div>
</div><hr>
</div>


<!-----------------------divider---------------------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	   <h3><i class="fas fa-box-open"></i> Why travel With Adventure</h3>
        </div>
    </div>
</div>
<!---------------------videp play section----------------->

<div class= "iframe-container">
	<iframe width="725" height="408" src="https://www.youtube.com/embed/Fty1UQamzvg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<!-----------------------divider---------------------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	   <h3><i class="fas fa-box-open"></i> Our Popular Blog Post</h3>
        </div>
    </div>
</div>
<!---------------------Blog post----------------->


	<div class="blog-container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-blog">
					<p class="blog-meta"> <span>May 25,2018</span></p>
					<img src="./images/Blog1.jpg" alt="Post 1" >
					<h2><a href="#">Adventures you should embark upon in Nepal </a></h2>
					<p class = "blog-text">Trekking Mount Everest<br>Well, one of the most famous natural icons of Nepal is Mount Everest which is also one of the most adventurous one. </p>
					<p><a href="#" class ="read-more-button">Read More</a>
				<span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class ="fa fa-comments-o"></i>3..</span>
				</p>
				</div>
			</div>
		</p>
			<div class="col-md-4">
			<div class="single-blog">
					<p class="blog-meta"> <span>May 25,2018</span></p>
					<img src="./images/Blog2.jpg" alt="Post 1" >
					<h2><a href="#">Why you can’t miss the Nepalese Cuisine?</a></h2>
					<p class = "blog-text">Nepalese Cuisine?<br>Buckle up, as we take you on a joyous ride of the most exotic delicacies that are bound to leave you drooling.</br><br> </p>
					<p><a href="#" class ="read-more-button">Read More</a>
				<span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class ="fa fa-comments-o"></i>3..</span>
				</div>
			</div>
			<div class="col-md-4">
			<div class="single-blog">
					<p class="blog-meta"> <span>May 25,2018</span></p>
					<img src="./images/Blog3.jpg" alt="Post 1" >
					<h2><a href="#">Things you need to know before trekking to ABC_ASJ_Final </a></h2>
					<p class = "blog-text">Annapurna Base Camp is considered to be a moderate trekking route. Compared to other trekking routes in the Himalayas, ABC trek has a lot of accommodation</p>
					<p><a href="#" class ="read-more-button">Read More</a>
				<span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class ="fa fa-comments-o"></i>3..</span>
				</p>
				</div>
			</div>
		</div>
	</div>

<!-----------------------divider---------------------------->
<div class="divider">
   <div class="container-fluid">
	   <div class="row">
	   <h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-box-open"></i>  Our Partnors</h3>
        </div>
    </div>
</div>


	<!-- Footer Start -->
	<?php 
    include('HeaderFooter/footer.php'); 
    ?>
    <!-- Footer End -->
  </body>
</html>
