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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

	.dropdown-submenu {
		left: 100px;

	}

	.dropdown-submenu .dropdown-menu {
	    top: 0;
	    
	    margin-top: -1px;
	}
	.lokasi{
		padding-top: 50px;
		padding-left: 80px;
	}

	.dropdown-menu-1{
		top: -110px;
		left: 200px;
		width: 600px;
		padding-left: 5px;

	}

	

	.dropdown-menu-2{
		top: -110px;
		left: 200px;
		width: 600px;
		padding-left: 5px;
	}

	#dua :hover .dropdown-menu-1{
		visibility: hidden;
	}
	

	.photo{
		width: 160px;
		height: 115px;
		padding-left: 8px;
	}



</style>
<body>
	<!--header-->	
		<div>
				<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
			   				 <ul class="nav navbar-nav link-effect">
			      					<li><a href="after_login_customer.php">Home </a></li>
									<li><a href="#about" class="scroll">How it works</a></li>
									<li><a href="#services" class="scroll">Services</a></li>
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
					                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Call Status</a>
					                    </li>
					                    <li class="divider"></li>
					                    <li><a href="Validasi/logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
					                    </li>
					                </ul>
					            </li>
						    </ul>
			  			</div>
				</nav>
				<div class="dropdown">
					<div class="lokasi">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Worker List
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">  
					      <li class="dropdown-submenu">
					        	<li class="dropdown-submenu">
						            <a class="test" href="#" style="padding-left: 30px; padding-right: 50px;">Doctor List <span style="padding-left: 30px;">&rsaquo;</span></a>
						            <ul class="dropdown-menu-1" id="satu">
						            	<li>
						            		<?php
						            		$query = mysqli_query($conn, "SELECT * FROM status_doctor");
						              			while ($row = mysqli_fetch_array($query)) {
						              				if ($row['status'] == 0) {
						              					$status_ganti = "Available";
						              					echo "
						              					<div>
									              			<img class='photo' src='$row[gambar]' style='float: left;'>
									              			<h4 style='margin-left: 170px;'>
									              				$row[doctor_name]
									              			</h4>
									              			<p style='margin-left: 170px; margin-top: -5px;'>
									              				$row[job]
									              			</p>
															<p style='margin-left: 170px; margin-top: -1px; font-size: 10px'>
									              				DESCRIPTION :
									              			</p>
									              			<p style='margin-left: 170px; margin-top: -7px;'>
									              				$row[doctor_name] $row[description]  
									              			</p>
							              						<p>
										              				<div class='container' style='background-color: lightgreen; width: 130px; height: 40px; margin-left: 450px; font-size: 20px; line-height: 40px; padding-left: 25px;'>
										              					$status_ganti
										              				</div>
										              			</p>
									              		</div>
									              		<hr style='margin-top:30px; border: 1px solid; width: 580px;'>			
						              					";
						              				}
						              				else {
						              					$status_ganti = "Unavailable";
						              					echo "
						              					<div>
									              			<img class='photo' src='$row[gambar]' style='float: left;'>
									              			<h4 style='margin-left: 170px;'>
									              				$row[doctor_name]
									              			</h4>
									              			<p style='margin-left: 170px; margin-top: -5px;'>
									              				$row[job]
									              			</p>
															<p style='margin-left: 170px; margin-top: -1px; font-size: 10px'>
									              				DESCRIPTION :
									              			</p>
									              			<p style='margin-left: 170px; margin-top: -7px;'>
									              				$row[doctor_name]  $row[description] 
									              			</p>
							              						<p>
							              							<div class='container' style='background-color: darkred; width: 130px; height: 40px; margin-left: 450px; font-size: 20px; line-height: 40px; color: white'>
										              					$status_ganti
										              				</div>
										              			</p>
									              		</div>
									              		<hr style='margin-top:30px; border: 1px solid; width: 580px;'>			
						              					";	
						              				}
						              			}
						            		?>
						              </li>
						            </ul>
						         </li>
					      
					      </li>
					      <li class="divider"></li>

					      <li class="dropdown-submenu">
					        	<li class="dropdown-submenu">
						            <a class="test" href="#" style="padding-left: 30px; padding-right: 50px;">Police List <span style="padding-left: 33px;">&rsaquo;</span></a>
						            <ul class="dropdown-menu-2" id="dua" onclick="myFunction()">
						              <li>
						              		<?php
						            		$query = mysqli_query($conn, "SELECT * FROM status_police");
						              			while ($row = mysqli_fetch_array($query)) {
						              				if ($row['status'] == 0) {
						              					$status_ganti = "Available";
						              					echo "
						              					<div>
									              			<img class='photo' src='$row[gambar]' style='float: left;'>
									              			<h4 style='margin-left: 170px;'>
									              				$row[police_name]
									              			</h4>
									              			<p style='margin-left: 170px; margin-top: -5px;'>
									              				$row[job]
									              			</p>
															<p style='margin-left: 170px; margin-top: -1px; font-size: 10px'>
									              				DESCRIPTION :
									              			</p>
									              			<p style='margin-left: 170px; margin-top: -7px;'>
									              				$row[description]  
									              			</p>
							              						<p>
										              				<div class='container' style='background-color: lightgreen; width: 130px; height: 40px; margin-left: 450px; font-size: 20px; line-height: 40px; padding-left: 25px;'>
										              					$status_ganti
										              				</div>
										              			</p>
									              		</div>
									              		<hr style='margin-top:30px; border: 1px solid; width: 580px;'>			
						              					";
						              				}
						              				else {
						              					$status_ganti = "Unavailable";
						              					echo "
						              					<div>
									              			<img class='photo' src='$row[gambar]' style='float: left;'>
									              			<h4 style='margin-left: 170px;'>
									              				$row[police_name]
									              			</h4>
									              			<p style='margin-left: 170px; margin-top: -5px;'>
									              				$row[job]
									              			</p>
															<p style='margin-left: 170px; margin-top: -1px; font-size: 10px'>
									              				DESCRIPTION :
									              			</p>
									              			<p style='margin-left: 170px; margin-top: -7px;'>
									              				$row[description] 
									              			</p>
							              						<p>
							              							<div class='container' style='background-color: darkred; width: 130px; height: 40px; margin-left: 450px; font-size: 20px; line-height: 40px; color: white'>
										              					$status_ganti
										              				</div>
										              			</p>
									              		</div>
									              		<hr style='margin-top:30px; border: 1px solid; width: 580px;'>			
						              					";	
						              				}
						              			}
						            		?>
						              		

						              </li>
						            </ul>
						        </li>
					      </li>
					    </ul>
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
						<form>
								<div class="news-gr">
								<img src="images/.jpg" class="img-responsive" alt=""/>
								<h3 class="tittle">Your Profile</h3>
									<p>
									<label>First Name</label>
									<?php
									$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
									while ($row = mysqli_fetch_array($query)) {
										echo "<input style='width:270px; margin-left: 150px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;'' id='' name='' type='text' value='$row[firstname]' placeholder='Input your Address'>";
									}
									?>
									
									
									</p>

									<p>
									<label>Last Name</label>
									<?php
									$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
									while ($row = mysqli_fetch_array($query)) {
										echo "<input style='width:270px; margin-left: 153px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;'' id='' name='' type='text' value='$row[lastname]' placeholder='Input your Address'>";
									}
									?>
									
									</p>

									<p>
									<label>Address</label>
									<?php
									$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
									while ($row = mysqli_fetch_array($query)) {
										echo "<input style='width:270px; margin-left: 165px; padding-bottom: 5px; padding-left: 5px; padding-top: 5px;'' id='' name='' type='text' value='$row[address]' placeholder='Input your Address'>";
									}
									?>
									</p>
								</div>

								<button name="submit" type="submit" value="submit" style="width:270px; margin-left: 150px; padding-bottom: 10px; padding-left: 5px; padding-top: 10px; margin-top: 15px;"
								<?php
									
								?>
								>Submit</button>
						</form>	
						</div>
					</div>
				</div>
			</div>


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

         
</script>
</body>
</html>