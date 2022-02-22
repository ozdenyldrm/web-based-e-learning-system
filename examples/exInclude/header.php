<?php
    include_once ('../database.php');
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once ('../database.php');
    }
?>
<html>
 
 <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="x-UA-Compatible" content="ie=edge">
	<title>profile</title>
	<!-- google font -->
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<!-- font awesome css -->
	<link rel="stylesheet" href="../css/all.min.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- custom css -->
	<link rel="stylesheet" href="../css/styles.css">
	<style>
	  body{
		  background-color: #cffbfb;
		  background-size: cover;
	  }
	  .navbar-brand {
            font-family: 'Ubuntu Condensed', sans-serif;
            font-size: 2em;
            font-weight: bold;
            colo: #000000
        }
        .custom-nav .custom-nav-item a {
            font-color: #000000 important;
        }
        .custom-nav-item: {
            background-color: #ffffff;
            border: solid #000000 1px;
            border-radius: 10px;
        }
		.sagicerik{
			position:relative;
			top:60;
			left:80;
		}
		#d1{ position: relative; padding: 0px 10px; color: blue; }
		#d2{ position: absolute; top: 200px; right: 20px; }
		#d3{ position: absolute; top: 800px; right: 20px; } 
		#d4{ position: absolute; top: 200px; right: 20px; }
		#d5{ position: absolute; top: 800px; right: 20px; }
		#d6{ position: absolute; top: 390px; right: 40px;}
		#d7{ position: absolute; top: 270px; right: 20px; }
		#d8{ position: absolute; top: 145px; right: 20px; }
		#d9{ position: absolute; top: 840px; right: 20px; }
		#e1{ position:relative; top:60; left:60; }
		#e2{ position:relative; top:60; left:60; }
		#e3{ position:relative; top:10; left:60; }
		#e4{ position:relative; left:40;}
		#e5{ position: absolute; top: 890px; right: 30px;}
		#e6{ position:relative; top:70; left:60; }		
	</style>
  </head>
  
  <body>
     <!-- javascript -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/all.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="../js/sonuc.js"></script>
	  
    <!-- start navigation -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light pl-5" >
    <a class="navbar-brand" href="login.php">WOLS</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav custom-nav pl-5 ">
            <li class="nav-item custom-nav-item"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="nav-item custom-nav-item"><a href="../course/course.php" class="nav-link">Courses</a></li>
            <li class="nav-item custom-nav-item"><a href="../exercise.php?q=1" class="nav-link">Exercises</a></li>
            <li class="nav-item custom-nav-item"><a href="../student/studentProfile.php" class="nav-link">User Profile</a></li>
            <li class="nav-item custom-nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
        </ul>
    </div>
    <ul class="nav justify-content-end">
        <li><?php echo''; ?> <a href="../logout.php?q=examples/example.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
    </ul>
</nav>
<!-- end navigation -->
	   <div class="container-fluid mb-7">
	    <div class="row">
		 <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
		  <div class="sidebar-sticky">
		   <ul class="nav flex-column">
		   <li id="d1">
		    Examples of C Programming <center>Lectures</center>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example1.php">
			<i class="fas fa-arrow-right"></i>
			Variable Concept and Basic Operators Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example2.php">
			<i class="fas fa-arrow-right"></i>
			Decision Structure Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example3.php">
			<i class="fas fa-arrow-right"></i>
			Loop Structure Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example4.php">
			<i class="fas fa-arrow-right"></i>
			Flowchart Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example5.php">
			<i class="fas fa-arrow-right"></i>
			Arrays Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example6.php">
			<i class="fas fa-arrow-right"></i>
			Multidimensional Arrays Examples
			</a>
		   </li>
		   <li class="nav-item">
	        <a class="nav-link" href="example7.php">
			<i class="fas fa-arrow-right"></i>
			Character Array Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example8.php">
			<i class="fas fa-arrow-right"></i>
			Functions Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example9.php">
			<i class="fas fa-arrow-right"></i>
			Random Number Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example10.php">
			<i class="fas fa-arrow-right"></i>
			Recursive Functions Examples
			</a>
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example11.php">
			<i class="fas fa-arrow-right"></i>
			Pointers Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example12.php">
			<i class="fas fa-arrow-right"></i>
			String Functions Examples
			</a>
		   </li>
		    <li class="nav-item">
		    <a class="nav-link" href="example13.php">
			<i class="fas fa-arrow-right"></i>
			Linked Lists Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example14.php">
			<i class="fas fa-arrow-right"></i>
			Sequential Access File Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example15.php">
			<i class="fas fa-arrow-right"></i>
			Random Access File Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example16.php">
			<i class="fas fa-arrow-right"></i>
			Bitwise Operations Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example17.php">
			<i class="fas fa-arrow-right"></i>
			Typedef, Struct Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example18.php">
			<i class="fas fa-arrow-right"></i>
			Arrays of Structures Examples
			</a>
		   </li>
		   <li class="nav-item">
		    <a class="nav-link" href="example19.php">
			<i class="fas fa-arrow-right"></i>
			Bitwise Operations Examples
			</a>
		   </li>
		  </ul> 
		 </div>
		</nav>