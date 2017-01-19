<!DOCTYPE html>
<html>
<head>

<title>Emergency Kit</title>
<!---->
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

</style>
<body>
	<!--header-->	
		<div class="banner">
				<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
			   				 <ul class="nav navbar-nav link-effect">
			      					<li><a href="after_login.php" class="scroll abcd">Home </a></li>
									<li><a href="#about" class="scroll">How it works</a></li>
									<li><a href="#services" class="scroll">Services</a></li>
									<li><a href="#portfolio" class="scroll">Portfolio</a></li>
									<li><a href="#team" class="scroll" >Team</a></li>
			      				
			      				
			    			</ul>
						    <ul class="nav navbar-nav navbar-right">

			      				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      						<?php
			      							include 'Validasi/connection.php';
			      							$user = $_SESSION['username'];
											$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
											$data = mysqli_fetch_array($query);
											echo "Hi , ".$data[0] ;
			      						?>
			      						<span class="caret"></span></a>
					        		<ul class="dropdown-menu">
								         <li><a href="#"><span class="glyphicon glyphicon-user">  EditProfil</span></a></li>
								         <li><a href="Validasi/logout.php"><span class ="glyphicon glyphicon-log-out">  LogOut</span></a></li>								   
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

</body>
</html>