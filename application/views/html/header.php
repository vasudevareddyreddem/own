<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/icofont.css"> 
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/slidr.css">     
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/main.css">  
	<link id="preset" rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/presets/preset1.css">	
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/vendor/css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="<?php echo site_url(); ?>assets/vendor/images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
   </head>
  <body>
	<!-- header -->
	
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo site_url(); ?>assets/vendor/images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="job-list.html">Job list</a></li>
							<li><a href="details.html">Job Details</a></li>
							<li><a href="resume.html">Resume</a></li> 
							<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="profile.html">Profile</a></li>
									<li><a href="post-resume.html">Post Resume</a></li>
									<li><a href="post.html">Job Post</a></li>
									<li><a href="edit-resume.html">Edit Resume</a></li>
									<li><a href="profile-details.html">profile Details</a></li>
									<li><a href="bookmark.html">Bookmark</a></li>
									<li><a href="applied-job.html">Applied Job</a></li>
									<li><a href="delete-account.html">Close Account</a></li>
									<li><a href="signup.html">Job Signup</a></li>
									<li><a href="signin.html">Job Signin</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- navbar-left -->
				
				<!-- nav-right -->
				<div class="nav-right">				
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="signin.html">Sign In</a></li>
						<li><a href="signup.html">Register</a></li>
					</ul><!-- sign-in -->					

					<a href="post.html" class="btn">Post Your Job</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->