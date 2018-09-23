<?php include 'config/config.php'; ?>
<?php include 'library/Database.php'; ?>
<?php include 'library/Helper.php'; ?>
<?php include 'controlUser/user.php';?>
<?php include 'controlExam/controlExam.php';
      include 'ProcessExam/processExam.php';
     
  Session::init();
?>


<?php
 $db = new Database();
 $user = new User();
 $exam = new Exam();
 $process = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>

<?php 
 $db = new Database();
 $sql_injection = new helper()
?>



    <?php 
      if (isset($_GET['action']) && $_GET['action'] == 'logout'){
        session_destroy();
        echo "<script> window.location = 'index.php'; </script>";
        exit();
      }
    ?>
    
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Welcome to my site</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
		<!-- home slider-->
		<link href="css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">
		<!-- Latest compiled and minified CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        

	</head>

	 <body <body onload="timeout()">
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>Computer</span> Science & Engineering <span>-PUST</span></h1></a>
					</div>
					
				</div>
				<div class="header_bottom">
					<nav>
						<ul id="nav">
					   <?php
                          $checklogin = Session::get("login");
                          if ($checklogin == true) {
                          ?>
                          <li><a href="profile.php">Profile</a></li> 
                          <li><a href="exam.php">Exam</a></li>
                          <li><a href="?action=logout">Logout</a></li>
                         
					    <?php } else { ?>
						 <li><a href="index.php">Login</a></li>						
						 <li><a href="register.php">Register</a></li>
                         <li><a href="admin/login.php" target="_blank">Staff Login</a></li>
						<?php } ?>	
						</ul>
					</nav>
				</div>
			</div>
		</section>
		