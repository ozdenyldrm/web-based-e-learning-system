<?php
    include_once ('database.php');
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once ('database.php');
    }
?>
<html>
    <head>
	   <title>Contact Us</title>
	   <meta charset = "utf-8">

       <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link href="css/style.css" rel="stylesheet" type="text/css" />
       <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
	   
	   <!-- font -->
	   <link rel="stylesheet" href="css/all.min.css">
	   <!-- Google font -->
	   <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	   <!-- end font -->
	   <!-- Custom CSS -->
	    <link rel="stylesheet" href="css/style.css">
		
	   <script type="text/javascript" src="js/cufon-yui.js"></script>
       <script type="text/javascript" src="js/cufon-titillium-250.js"></script>
       <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
       <script type="text/javascript" src="js/script.js"></script>
       <script type="text/javascript" src="js/coin-slider.min.js"></script>
	   
	   <style> #d1{position:relative; top:3; left:200;} </style>
    </head>
     <body>
	   <!-- javascript -->
	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/all.min.js"></script>
	  
	  <!-- start navigation -->
	  <div class="main">
       <div class="header">
        <div class="header_resize">
        <div class="logo">
         <h1><a href="index.php">WOLS<small>Learn and Implement</small></a></h1>
        </div>
        <div class="menu_nav">
         <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="courses/course.php"><span>Courses</span></a></li>
          <li><a href="exercise.php"><span>Exercises</span></a></li>
          <li><a href="student/studentProfile.php"><span>User Profile</span></a></li>
          <li class="active"><a href="contact.php"><span>Contact Us</span></a></li>
		  <li><?php echo''; ?> <a href="logout.php?q=contact.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
        </ul>
      </div>
      <div class="clr"></div>
       <div class="slider">
        <div id="coin-slider">
		<a href="#"><img src="images/slide2.png" width="935" height="307" alt="" /></a> 
		<a href="#"><img src="images/slidee.png" width="935" height="307" alt="" />
		</a> <a href="#"><img src="images/slide3.jpg" width="935" height="307" alt="" /></a>
		</div>
        <div class="clr"></div>
       </div>
     <div class="clr"></div>
    </div>
   </div>
  </div>
 </div>
</div>
       <!-- end navigation -->
		