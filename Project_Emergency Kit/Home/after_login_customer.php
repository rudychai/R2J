<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include 'Validasi/connection.php';
	session_start();
	if (!isset($_SESSION['username'])){
	header ("location:Home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Emergency Kit</title>
<!---->
<link href="After_login_admin/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="After_login_admin/css/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="After_login_admin/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="After_login_admin/css/startmin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="After_login_admin/css/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="After_login_admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/bootstrap-min.css" rel="stylesheet" type="text/css" media="all" />
<!---->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pecuniary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!---->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<!--script-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- swipe box js -->
		<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
				$(".swipebox").swipebox();
				});
		</script>

	<!-- //swipe box js -->

</head>
<style type="text/css">
	li.dropdown:hover
	{
		color:none;
	}
	.navbar-inverse
	{
		padding-left: 100px;
		border: none;
		padding-right: 100px;
	}
	.jou-left h3{
		padding: -1em;
	}

</style>
<body>
	<!--header-->	
		<div class="banner">
				<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
			   				 <ul class="nav navbar-nav link-effect">
			      					<li><a href="after_login_customer.php" class="scroll abcd">Home </a></li>
									<li><a href="#about" class="scroll">How it works</a></li>
									<li><a href="#services" class="scroll">Features</a></li>
									<li><a href="#portfolio" class="scroll">Portfolio</a></li>
									<li><a href="#team" class="scroll" >Team</a></li>
			      				
			      				
			    			</ul>
						    <ul class="nav navbar-nav navbar-right">

				      				<li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                    <i class="fa fa-user fa-fw"></i> 
	                    	<?php
			      							include 'Validasi/connection.php';
			      							$user = $_SESSION['username'];
											$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
											$data = mysqli_fetch_array($query);
											echo "Hi, ".$data[0] ;
			      						?>
	                     <b class="caret"></b>
	                </a>
	                <ul class="dropdown-menu dropdown-user">
	                    <li><a href="#" class="new-gri" data-toggle="modal" data-target="#userprofile"><i class="fa fa-user fa-fw"></i> User Profile</a>
	                    </li>
	                    <li><a href="after_login_admin/call_status.php"><i class="fa fa-gear fa-fw"></i> Call Status</a>
	                    </li>
	                    <li class="divider"></li>
	                    <li><a href="Validasi/logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
	                    </li>
	                </ul>
	            </li>
						    </ul>
			  			</div>
				</nav>

				<div class="banner-info">
					<div class="logo wow fadeInRight animated" data-wow-delay=".5s">
						<h3><a href="" style="text-decoration: none;">E</a></h3>
					</div>
						<h1 class="wow fadeInRight animated" data-wow-delay=".5s">Emergency Kit</h1>
						<p class="wow fadeInRight animated" data-wow-delay=".5s">Are you in danger situation? Do you feel threatened? Don't Panic!</p>
						<p class="wow fadeInRight animated" data-wow-delay=".5s">Use your mobile phone and press the Button!</p>
				</div>	
			</div>
		<div class="content">
		<!--about-->
			<div class="about-w3" id="about">
				<div class="container">
					<h2 class="tittle"><span>[</span> About Us <span>]</span></h2>
					<p class="about-text">Our team will provide an application to help user in urgent situation, So user can imeadiately request for help. Such as Ambulance, Firemen and Cops. As a mobile device, the application offers safety guidance in unknown environments (Using GPS Tracker) and helps people feel confident and safe while moving or go to foreign place.</p>
					<div class="about-grids">
						<div class="col-md-4 about-grid">
							<div class="about-top">
								<h4><i class="glyphicon glyphicon-heart-empty" aria-hidden="true"></i>User Friendly</h4>
								<span></span>
							</div>
							<p>Emergency-Kit Provide a user-friendly interface both in android and ios. So can be access easily in any situation.</p>
						</div>
						<div class="col-md-4 about-grid">
							<div class="about-top">
								<h4><i class="glyphicon glyphicon-globe" aria-hidden="true"></i>GPS</h4>
								<span></span>
							</div>
							<p>Emergency-Kit use GPS (Global Postioning System) to track the user current location.</p>
						</div>
						<div class="col-md-4 about-grid">\
							<div class="about-top">
								<h4><i class="glyphicon glyphicon-flag" aria-hidden="true"></i>Smart Information </h4>
								<span></span>
							</div>
							<p>Emergency-Kit can be use as an "e-book" that contains about Emergency treatment for health, or what to do in an Emergency situation. </p>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--about-->
		<!--services-->
			<div class="services" id="services">
				<div class="container">
					<h3 class="tittle"><span>[</span> Features <span>]</span></h3>
						<p class="about-text1">We provide main features for Emergency-Kit to help user in urgent situation. <b>Such As :</b> </p>
					<div class="service-grids">
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-globe" aria-hidden="true" style="cursor: pointer;"></i>
							</div>
							<div class="ser-right">
								<h4 style="cursor: pointer;"><a href="gps.html" style="text-decoration: none; color: white;">GPS Tracker</a></h4>
								<p>The main function from GPS Tracker is to Track the user current location.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-signal" aria-hidden="true" style="cursor: pointer;"></i>
							</div>
							<div class="ser-right">
								<h4 style="cursor: pointer;"><a href="#smartinfo" class="scroll" style="text-decoration: none; color: white;">Smart Info</a></h4>
								<p>This feature can help customer to find information about what to do in an emergency situation.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-cog" aria-hidden="true" style="cursor: pointer;"></i>
							</div>
							<div class="ser-right">
								<h4 style="cursor: pointer;"><a href="#" class="new-gri" data-toggle="modal" data-target="#userprofile" style="text-decoration: none; color: white;">Profile Setting</a></h4>
								<p>Profile setting provide the user to change their Profile. </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="service-grids">
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-heart" aria-hidden="true" style="cursor: pointer;"></i>
							</div>
							<div class="ser-right">
								<h4 style="cursor: pointer;"><a href="map.html" class="new-gri" style="text-decoration: none; color: white;">Recommended Place</a></h4>
								<p>User can use this feature to check the nearest Hospital and Police Office. <i>"Recommended Place"</i> will provide the shortest route to the destination.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" style="cursor: pointer;"></i>
							</div>
							<div class="ser-right">
								<h4 style="cursor: pointer;"><a href="#call" class="scroll" style="text-decoration: none; color: white;">Emergency call</a></h4>
								<p>User can imeadiately click this button to ask for emergency help, such ass quick call, quick message.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon glyphicon-bookmark" aria-hidden="true" style="cursor: pointer;"></i>
							</div>
							<div class="ser-right">
								<h4 style="cursor: pointer;"><a href="worker_status.php" style="text-decoration: none; color: white;">Worker Status</a></h4>
								<p>To check who is the current worker that currently available to help.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--services-->
			<!-- gallery -->
				<div class="gallery" id="portfolio">
					<div class="container">
						<h2 class="tittle">Our Portfolio</h2>
						<div class="gallery-grids">
							<div class="col-md-4 gal-left">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/1.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
								
										<div class="info-box">
											<div class="info-content">
												<h4>Police</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/2.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
								
										<div class="info-box">
											<div class="info-content">
												<h4>Fire Fighter</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/3.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Police</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/4.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Detective</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/5.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Fire Fighter</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/6.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Police</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/7.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Doctor</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/8.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Police</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 gal-left gal_mar">
								<div class="content-grid-effect slow-zoom vertical text-center">
									<a href="images/9.jpg" class="b-link-stripe b-animate-go  swipebox">
										<div class="img-box">
											<img src="images/9.jpg" alt="image" class="img-responsive zoom-img">	
										</div>
									
										<div class="info-box">
											<div class="info-content">
												<h4>Fire Fighter</h4>
												<span class="separator"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
<!--gallery -->	
<!--Testimonials-->
		<div class="journal-w3l" id="news">
				<div class="container">
					<h3 class="tittle" id="smartinfo"><span>[</span> Smart Info <span>]</span></h3>
					<p class="about-text">This feature can help customer to find information about what to do in an emergency situation.</p>
					<div class="journal-grids">
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1"><img src="images/earthquake.jpg" class="img-responsive" alt="" /></a>
							<div class="jou-text">
								<div class="jou-left">
									<h3 style="color: white;">1</h3>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">Earthquake</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text">What to do when an earthquake happen?</p>
						</div>
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2"><img src="images/fire.jpg" class="img-responsive" alt="" /></a>
							<div class="jou-text">
								<div class="jou-left">
									<h3 style="color: white;">2</h3>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">Fire</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text">What to do when there is a fire?</p>
							
						</div>
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3"><img src="images/health.jpg" class="img-responsive" alt=""/></a>
							<div class="jou-text">
								<div class="jou-left">
									<h3 style="color: white;">3</h3>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">Health</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text">What to do when you are sick?</p>
							
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="journal-grids">
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4"><img src="images/heartattack.jpg" class="img-responsive" alt="" /></a>
							<div class="jou-text">
								<div class="jou-left">
									<h3 style="color: white;">4</h3>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">Heart Attack</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text">What to do when someone got a heart attack?</p>
							
						</div>
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal5"><img src="images/burglar.jpg" class="img-responsive" alt="" /></a>
							<div class="jou-text">
								<div class="jou-left">
									<h3 style="color: white;">5</h3>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal5">Burglar</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text">What to do when a burglar break into your house?</p>
							
						</div>
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal6"><img src="images/accident.jpg" class="img-responsive" alt=""/></a>
							<div class="jou-text">
								<div class="jou-left">
									<h3 style="color: white;">6</h3>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal6">Accident</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text">What to do when You hit someone by Accident?</p>
							
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--Testimonials-->
		<!--count-->
			<div class="count-agileits">
				<div class="container">
					<h3 class="tittle1"><span>[</span> Counter <span>]</span></h3>
					<div class="count-grids">
						<div class="col-md-3 count-grid">
						<i class="glyphicon glyphicon-filter" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='30' data-delay='.5' data-increment="100">30</div>
									<span></span>
									<h5>Cups Of Coffee</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
						<i class="glyphicon glyphicon-hand-left" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='4' data-delay='.5' data-increment="100">4</div>
									<span></span>
									<h5>Finished Projects</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
						<i class="glyphicon glyphicon-time" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100">10520</div>
									<span></span>
									<h5>Working Hours</h5>
								</div>
						</div>
						<div class="col-md-3 count-grid">
						<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='100' data-delay='.5' data-increment="100">100</div>
									<span></span>
									<h5>Happy Clients</h5>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--count-->
				<!--team-->
			<div class="team-w3l" id="team">
				<div class="container">
					<h3 class="tittle"><span>[</span> Team <span>]</span></h3>
						<p class="about-text">Our Team to finish this project.</p>						
					<div class="team-grids">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>	 
										<div class="caption">
											<div class="col-md-3 cap-left">
												<img src="images/TesMorris-01.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Morris Michael T</h4>
													<p>System Analyst </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left">
												<img src="images/TesRyan-01.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Ryan Rajaya<br></h4>
													<p>Web Designs </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left">
												<img src="images/TesEric-01.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Eric Alexander P</h4>
													<p>Programmer </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left">
												<img src="images/TesPanda-01.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Pandaman<br></h4>
													<p>Reinforcement </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
									 <li>	 
										<div class="caption">
											<div class="col-md-3 cap-left">
												<img src="images/Morris.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Morris Michael T</h4>
													<p>System Analyst </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left">
												<img src="images/Rajaya.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Ryan Rajaya<br></h4>
													<p>Web Designs </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left">
												<img src="images/Eric.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Eric Alexander P</h4>
													<p>Programmer </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="col-md-3 cap-left">
												<img src="images/TesPanda-02.jpg" class="img-responsive" alt=""/>
												<div class="cap">
													<h4>Pandaman<br></h4>
													<p>Reinforcement </p>
													<div class="social-icons">
														<a href="#"><i class="icon"></i></a>
														<a href="#"><i class="icon1"></i></a>
														<a href="#"><i class="icon2"></i></a>
														<a href="#"><i class="icon3"></i></a>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--team-->
			<div class="journal-w3l" id="news">
				<div class="container">
					<h3 class="tittle" id="call"><span>[</span> Who do you want to call? <span>]</span></h3>
					
					<div class="journal-grids">
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal7"><img src="images/police_car.jpg" class="img-responsive" alt="" /></a>
							<div class="jou-text">
								<div class="jou-left">
									<h5 style="padding-top: 8px; padding-bottom: 8px;">1</h5>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal7">Police</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text" style="text-align: justify;">A police force is a constituted body of persons empowered by the state to enforce the law, protect property, and limit civil disorder.Their powers include the legitimized use of force.</p>
							
						</div>
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal8"><img src="images/ambulance.jpg" class="img-responsive" alt="" /></a>
							<div class="jou-text">
								<div class="jou-left">
									<h5 style="padding-top: 8px; padding-bottom: 8px;">2</h5>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal8">Ambulance</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text" style="text-align: justify;">An ambulance is a vehicle for transportation of sick or injured people to, from or between places of treatment for an illness or injury, and in some instances will also provide out of hospital medical care to the patient.</p>
							
						</div>
						<div class="col-md-4 journal-grid">
							<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal9"><img src="images/firefighter.jpg" class="img-responsive" alt=""/></a>
							<div class="jou-text">
								<div class="jou-left">
									<h5 style="padding-top: 8px; padding-bottom: 8px;">3</h5>
								</div>
								<div class="jou-right">
									<h4><a href="#" class="new-gri" data-toggle="modal" data-target="#myModal9">FireFighter</a></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="jour-text" style="text-align: justify;">A firefighter (historically fireman) is a rescuer extensively trained in firefighting, primarily to extinguish hazardous fires that threaten property and civilian or natural populations, and to rescue people from dangerous situations, like collapsed or burning buildings or crashed vehicles.</p>
							
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	<div class="footer" id="contact">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h4>Address</h4>
						<address>
							958 Folsom Ave, Suite 900<br>
							San Francisco, CA 994<br>
							<abbr title="Phone">P :</abbr> (123) 786-2534
						</address>
				</div>
				<div class="col-md-6 footer-middle">
					<h4>Contact</h4>
					<form>
						<div class="ft-lt">
							<input type="text" value="First Name" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'First Name';}">	
							<input type="text" value="Last Name" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Last Name';}">				
							<input type="text" value="Email Address" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email Address';}">
						</div>
						<div class="ft-rgt">
							<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>	
							<input type="submit" value="Submit">
						</div>
					</form>
				</div>
				<div class="col-md-3 footer-left">
					<h4>Follow Us</h4>
						<div class="social-icons">
							<a href="#"><i class="icon"></i></a>
							<a href="#"><i class="icon1"></i></a>
							<a href="#"><i class="icon2"></i></a>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-text">
				<p>© 2017 Year. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">P-Men</a> </p>
			</div>
		</div>
	</div>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'home', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="home" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/earthquake.jpg" class="img-responsive" alt=""/>
							<h3 class="tittle">What to do When an Earthquake Happen?</h3>
								<ol style="color: #777; text-align: justify; padding-right: 15px;">
									<li style="margin-bottom: 5px;"><b>Steady yourself</b>. Hold onto a solid object or get to the floor so that you do not fall. Try to hide under a piece of furniture.
									</li>
									<li style="margin-bottom: 5px;"><b>Cover your head and neck.</b> Use your hands and arms to protect these vital areas from falling objects
										<ul>
											<li style="margin-left: 12px;">Your upper body should also be covered because that is what is holding your neck which is holding your head.</li>
											<li style="margin-left: 12px;">If you have any respiratory disease, make sure that you cover your head with a t-shirt or bandana, until all the debris and dust has settled. Inhaled dirty air is not good for your lungs.</li>
										</ul>
									</li>
									<li style="margin-bottom: 5px;"><b>Do not move.</b> If it is safe to do so, stay where you are for a minute or two, until you are sure the shaking has stopped.
										<ul>
											<li style="margin-left: 12px;">Remember, aftershocks are possible at any time, and are likely after a big earthquake. Aftershocks can range from being felt by only a few people to knocking down entire cities. They can collapse weakened buildings, especially fragile structures like mobile homes.</li>
										</ul>
									</li>
									<li style="margin-bottom: 5px;"><b>Slowly and carefully leave the building.</b> As in the case of fire, it is suggested that you and your family meet in an earthquake-safe location previously designated by your family, such as a nearby baseball diamond or park. Government help should be on the way soon. 
									</li>
									<li style="margin-bottom: 5px;"><b>Inspect your house for anything that might be in a dangerous condition.</b> Glass fragments, the smell of gas, or damaged electrical appliances are examples of hazards. 
										<ul>
											<li style="margin-left: 12px;">Do not turn electrical devices on or off. Simply switching a light switch could create a spark, which in turn could electrocute you and start a fire. These fires can be more deadly because they are near electrical cords.</li>
										</ul>
									</li>
								</ol>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/fire.jpg" class="img-responsive" alt=""/>
							<h3 class="tittle">What to do when Fire Occurs in Your Building?</h3>
								<ol style="color: #777; text-align: justify; padding-right: 15px;">
									<li style="margin-bottom: 5px;"><b>Call 911 to report the fire.</b> Don’t assume someone else has already called.
										<ul style="margin-left: 12px;">
										<li>Before leaving, feel the door. If the door is hot, or if smoke is seeping through, do not open it. Try another door if available. If you open the door, do so cautiously, and if possible follow your escape plan.</li>
										
										<li>Walk quickly, keep calm and pull the building fire alarm if it’s not already ringing.
										</li>
										<li>If you encounter smoke, stay low where the air is better. Take short breaths until you reach the stairwell. Once in the stairwell, you’re in a relatively safe area and can move at a more normal pace.
										</li>
										<li>If you’re trapped in your building and cannot reach an alternate exit, keep the door closed and seal off any cracks. Call 911 if possible, report that you’re trapped and give your location in the building. Then go to a window and signal for help. Do not panic or jump.</li>
										
										</ul>
									</li>
									<li style="margin-bottom: 5px;"><b>Know Your Way Out.</b> An escape plan can help every member of a family get out of a burning house. The idea is to get outside quickly and safely. Smoke from a fire can make it hard to see where things are, so it's important to learn and remember the different ways out of your home.
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/health.jpg" class="img-responsive" alt=""/>
							<h3 class="tittle">What to do when You are Sick?</h3>
								<ol style="color: #777; text-align: justify; padding-right: 15px;">
									<li style="margin-bottom: 5px;"><b>Stay home from work or school</b>. Going out and having a normal day will usually make you sicker. It also exposes those around you to illness. Stay home and take care of yourself so that you can go out again soon. Keep in mind that you’re usually at your most contagious at the beginning of an illness — for a cold, this means the first three days, possibly four or five.
									</li>
									<li style="margin-bottom: 5px;"><b>Sleep as much as you need.</b> Sleeping can be one of the most vital steps in allowing your body to get better. When a sickness attacks your body, it needs as much energy as it can to fight it off. Sleep helps give you that energy.</li>
									<li style="margin-bottom: 5px;"><b>Refrain from high-impact exercise.</b> Even if you do it every day and find it gives you increased energy, working out hard when you're sick doesn't give you that energy. It typically makes you even more drained than before and can exacerbate breathing or congestion issues.</li>
									<li style="margin-bottom: 5px;"><b>Refrain from high-impact exercise.</b> Even if you do it every day and find it gives you increased energy, working out hard when you're sick doesn't give you that energy. It typically makes you even more drained than before and can exacerbate breathing or congestion issues.</li>
									<li style="margin-bottom: 5px;"><b>Wash your hands frequently.</b> This will help prevent you from getting more germs and conceivably getting sicker. It’s also going to help you get rid of the germs that have collected on your hands.[5] Wash your hands with hot water, scrubbing with soap for at least 20 seconds.</li>
								</ol>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/heartattack.jpg" class="img-responsive" alt=""/>
							<h3 class="tittle">Heart Attack</h3>
								<ol style="color: #777; text-align: justify; padding-right: 15px;">
									<li style="margin-bottom: 5px;"><b>Know the most common symptoms.</b> The most obvious and most common symptom of a heart attack is chest pain or discomfort, but there are other typical symptoms you should be aware of, too. 
										<ul style="margin-left: 12px;">
											<li><b>Chest discomfort usually occurs in the center of the chest.</b> It could also be described as heaviness, tightness, pressure, aching, burning, numbness, fullness, or squeezing, and the pain can either last for several minutes or go away and come back. People sometimes mistake it for indigestion or heartburn.</li>
										</ul>
									</li>
									<li style="margin-bottom: 5px;"><b>Note that women's symptoms can differ.</b> Even though women frequently experience chest pain and other common symptoms of heart attack, they are also more likely to experience less common symptoms, as well. These symptoms can include: 
										<ul style="margin-left: 12px;">
											<li>Upper back pain or shoulder pain</li>
											<li>Jaw pain or pain that spreads to the jaw</li>
											<li>Pain that spreads to the arm</li>
											<li>Unusual fatigue for multiple days</li>
											<li>Difficulty sleeping</li>

										</ul>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/burglar.jpg" class="img-responsive" alt=""/>
							<h3 class="tittle">How to Deal With a Burglar Breaking Into Your Home</h3>
								<ol style="color: #777; text-align: justify; padding-right: 15px;">
									<li style="margin-bottom: 5px;"><b>Listen closely.</b> Do you hear the sound of footsteps walking inside your home? Do you hear any talking or any sounds coming from the burglar? Is the burglar heading your way? Does it sound one person or multiple people? Be "all-ears" and listen very closely to what the burglar is doing.</li>
									<li style="margin-bottom: 5px;"><b>Stay where you are.</b> If you are inside a room, lock the door and hide the best you can without making any noises. You will have to know how to lock and unlock the door. Only unlock the door when you think it's safe. But, if you feel that the burglar is still inside your house, don't unlock the door.</li>
									<li style="margin-bottom: 5px;"><b>Be quiet.</b> Don't make a peep. Do not, under any circumstances, yell out "I'm calling the police, bud!" because then you've given out your hideout and the burglar will be able to locate you much easier and faster. Breathe as quietly as you can. Don't dart across the room for a weapon and scream "I have a gun" because if the burglar feels threatened, he may act out in fear or panic and hurt or kill you.</li>
									<li style="margin-bottom: 5px;"><b>Use a phone.</b> If you have a cell phone in your pockets, use it to call the emergency services. Make sure you know your address, because you will have to tell the operator your address so the police can come to your house and clear out the situation. That's why it is important to charge your phone every night, and memorize your address.</li>
									<li style="margin-bottom: 5px;"><b>Act quickly.</b> But stay calm and quiet. Assess the situation to determine your best course of action. If you can safely escape out the window or another nearby exit then do so immediately and run to a neighbor's. Don't try to grab any valuables, just get out! No material item is worth your life or the lives of your family. If escaping isn't an option for any reason (If you are high up, are unsure of the intruders whereabouts, etc) then hide. Lock the door to the room you are in. Quickly barricade the door with any furniture you can manage.</li>


								</ol>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal6" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/accident.jpg" class="img-responsive" alt=""/>
							<h3 class="tittle">What to do when You hit someone by Accident?</h3>
								<ol style="color: #777; text-align: justify; padding-right: 15px;">
									<li style="margin-bottom: 5px;"><b>Stay at the Scene.</b> Never leave the accident scene until it's appropriate to do so. If you leave, particularly where someone has sustained injuries or was killed, you can face serious criminal penalties for being a hit-and-run driver.</li>
									<li style="margin-bottom: 5px;"><b>Check on All Drivers and Passengers.</b> Before assessing property damage, make sure everyone involved in the accident is okay. Get medical attention for anyone who needs it. If a person is unconscious or has neck or back pain, don't move them until qualified medical help arrives, unless a hazard requires moving the person.</li>
									<li style="margin-bottom: 5px;"><b>Call the Police.</b> If there's significant property damage, physical injury, or death, you need to call the police. Ask that a police report  be filed in situations where cops do arrive at the scene, and obtain the name and badge numbers of the responding officers.</li>
									<li style="margin-bottom: 5px;"><b>Talk to Witnesses.</b> Ask every witness what he or she saw. Get their names, numbers, or addresses, if possible. Ask locals if they've ever witnessed other accidents in the same place.</li>
									<li style="margin-bottom: 5px;"><b>Inform Your Insurance Company.</b> Promptly tell your insurance company you've been in an accident. Cooperate with them and tell them the truth about what happened and the extent of your injuries. Explain the facts clearly. If the insurance company finds out that you've lied to them about anything, you can get into serious trouble, including possible denial of coverage for the accident. Obtain and review any police report filed, so you can point out who broke what traffic laws or who was at fault.</li>

								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<form action="Validasi/polisi_cek.php" method="post">
									<h3 class="tittle">Police Form</h3>
								
									<p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;" id="police_nama_emergency" name="police_nama_emergency" required="required" type="police_nama" placeholder="Input your name"/>
	                                </p>
	                                <p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="police_address_emergency" name="police_address_emergency" required="required" type="police_address" placeholder="Input your Address"/>
	                                </p>
	                                <p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="police_number_emergency" name="police_number_emergency" required="required" type="police_number" placeholder="Input your Phone Number"/>
	                                </p>
	                                <p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="police_detail_emergency" name="police_detail_emergency" required="required" type="police_detail" placeholder="What is the emergency situation?"/>
	                                </p>
	                                
	                                <p>
	                                	<textarea style="width:270px; margin-left: 150px; padding-bottom: 50px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="police_moredetail_emergency" name="police_moredetail_emergency" required="required" type="police_number" placeholder="More Detail in Emergency information"></textarea>
	                                </p>

	                               <button name="submit" type="submit" value="submit" style="width:270px; margin-left: 150px; padding-bottom: 10px; padding-left: 5px; padding-top: 10px; margin-top: 15px;">Submit</button>
							</form>


						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<form action="Validasi/ambulans_cek.php" method="post">
								<h3 class="tittle">Ambulance Form</h3>
									<p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;" id="ambulance_nama_emergency" name="ambulance_nama_emergency" required="required" type="ambulance_nama" placeholder="Input your name"/>
	                                </p>
	                                <p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="ambulance_address_emergency" name="ambulance_address_emergency" required="required" type="ambulance_address" placeholder="Input your Address"/>
	                                </p>
	                                <p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="ambulance_number_emergency" name="ambulance_number_emergency" required="required" type="ambulance_number" placeholder="Input your Phone Number"/>
	                                </p>
	                                <p> 
	                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="ambulance_detail_emergency" name="ambulance_detail_emergency" required="required" type="ambulance_detail" placeholder="What is the emergency situation?"/>
	                                </p>
	                                
	                                <p>
	                                	<textarea style="width:270px; margin-left: 150px; padding-bottom: 50px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="ambulance_moredetail_emergency" name="ambulance_moredetail_emergency" required="required" type="ambulance_moredetail" placeholder="More Detail in Emergency information"></textarea>
	                                </p>

	                               <button name="submit" type="submit" value="submit" style="width:270px; margin-left: 150px; padding-bottom: 10px; padding-left: 5px; padding-top: 10px; margin-top: 15px;">Submit</button>
                            </form>

						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal9" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<form action="Validasi/firefighter_cek.php" method="post">
								<h3 class="tittle">FireFighter Form</h3>
								<p> 
                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;" id="firefighter_nama_emergency" name="firefighter_nama_emergency" required="required" type="firefighter_nama" placeholder="Input your name"/>
                                </p>
                                <p> 
                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="firefighter_address_emergency" name="firefighter_address_emergency" required="required" type="firefighter_address" placeholder="Input your Address"/>
                                </p>
                                <p> 
                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="firefighter_number_emergency" name="firefighter_number_emergency" required="required" type="firefighter_number" placeholder="Input your Phone Number"/>
                                </p>
                                <p> 
                                    <input style="width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="firefighter_detail_emergency" name="firefighter_detail_emergency" required="required" type="firefighter_detail" placeholder="What is the emergency situation?"/>
                                </p>
                                
                                <p>
                                	<textarea style="width:270px; margin-left: 150px; padding-bottom: 50px; padding-left: 5px; padding-top: 5px; margin-top: 15px;" id="firefighter_moredetail_emergency" name="firefighter_moredetail_emergency" required="required" type="firefighter_moredetail" placeholder="More Detail in Emergency information"></textarea>
                                </p>

                               <button name="submit" type="submit" value="submit" style="width:270px; margin-left: 150px; padding-bottom: 10px; padding-left: 5px; padding-top: 10px; margin-top: 15px;">Submit</button>

							</form>


						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="userprofile" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
						<form action="Validasi/edit_profile.php" method="POST">
								<div class="news-gr">
								<img src="images/profilepic.png" class="img-responsive" style="width: 250px; height: 250px;" alt=""/>
								<h3 class="tittle">Your Profile</h3>
									<p>
									<label>First Name</label>
									<?php
									$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
									while ($row = mysqli_fetch_array($query)) {
										echo "<input style='width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;'' id='' name='firstname' type='text' value='$row[firstname]' placeholder='Input your Address'>";
									}
									?>
									
									
									</p>

									<p>
									<label>Last Name</label>
									<?php
									$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
									while ($row = mysqli_fetch_array($query)) {
										echo "<input style='width:270px; margin-left: 153px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;'' id='' name='lastname' type='text' value='$row[lastname]' placeholder='Input your Address'>";
									}
									?>
									
									</p>

									<p>
									<label>Address</label>
									<?php
									$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
									while ($row = mysqli_fetch_array($query)) {
										echo "<input style='width:270px; margin-left: 165px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;'' id='' name='address' type='text' value='$row[address]' placeholder='Input your Address'>";
									}
									?>
									</p>
								</div>
								<input type="hidden" name="username" value="<?php echo $data[2]; ?>"></input>
								<button name="edit" type="submit" value="submit" style="width:270px; margin-left: 150px; padding-bottom: 10px; padding-left: 5px; padding-top: 10px; margin-top: 15px;">Edit</button>
						</form>	
						</div>
					</div>
				</div>
			</div>



<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>

</body>
</html>