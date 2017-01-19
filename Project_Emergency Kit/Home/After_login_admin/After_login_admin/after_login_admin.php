<?php
    include '../Validasi/connection.php';
    session_start();
    if (!isset($_SESSION['username'])){
    header ("location:Home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Startmin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> 
                    <?php
                                            include '../Validasi/connection.php';
                                            $user = $_SESSION['username'];
                                            $query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$user'");
                                            $data = mysqli_fetch_array($query);
                                            echo "Hi, ".$data[2] ;
                                        ?>
                                         <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../Validasi/logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> All List<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" onclick="showElement()">User List</a>
                            </li>
                            <li>
                                <a href="#" onclick="showElement1()">Police List <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Doctor List <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                    <div id="userlist" style="display: none;">
	                    <table class="table table-hover">
	                    <thead>
					      <tr>
					        <th>Firstname</th>
					        <th>Lastname</th>
					        <th>Username</th>
					        <th>Email</th>
					        <th>Address</th>
					      </tr>
					    </thead>
					    <tbody>
							<?php
							include '../Validasi/connection.php';
							$query = mysqli_query($conn, "SELECT Firstname,Lastname,username,Email,Address FROM user_regis");
							while ($data = mysqli_fetch_array($query)) { 
								?>
								<tr>
									<td><?php echo "$data[Firstname]";?></td>
									<td><?php echo "$data[Lastname]";?></td>
									<td><?php echo "$data[username]";?></td>
									<td><?php echo "$data[Email]";?></td>
									<td><?php echo "$data[Address]";?></td>
								</tr>
							<?php } ?>
					    </tbody>
					    </table>
				    </div>
				    <div id="policelist" style="display: none;">
	                    <table class="table table-hover">
	                    <thead>
					      <tr>
					        <th>Name</th>
					        <th>Address</th>
					        <th>Phonenumber</th>
					        <th>situation</th>
					        <th>MoreDetail</th>
					      </tr>
					    </thead>
					    <tbody>
							<?php
							include '../Validasi/connection.php';
							$query = mysqli_query($conn, "SELECT * FROM call_police");
							while ($data = mysqli_fetch_array($query)) { 
								?>
								<tr>
									<td><?php echo "$data[name]";?></td>
									<td><?php echo $data[1] ?></td>
									<td><?php echo $data[2]?></td>
									<td><?php echo "$data[situation]";?></td>
									<td><?php echo $data[4]?></td>
								</tr>
							<?php } ?>
					    </tbody>
					    </table>
				    </div>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

<script type="text/javascript">
	  function showElement(){
       var myElement = document.getElementById('userlist');
    	var myElement1 = document.getElementById('policelist');
       myElement.style.display = '';
       myElement1.style.display = 'none';

    }
    function showElement1(){
		var myElement = document.getElementById('userlist');
    	var myElement1 = document.getElementById('policelist');
       myElement.style.display = 'none';
       myElement1.style.display = '';
    }
</script>
</body>
</html>

