<html>
    <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       
       <link rel="stylesheet" href="../css/bootstrap.min.css">
	   
	   <!-- font -->
	   <link rel="stylesheet" href="../css/all.min.css">
	   <!-- Google font -->
	   <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	   <!-- Custom CSS -->
	    <link rel="stylesheet" href="../css/styles.css">
	   <!-- exercise css -->
		<link rel="stylesheet" href="../css/sonuc.css">
		
	    <title>E-learning</title>
	  <style>
        body{
	        background-color: #63cdda;
		    background-size: auto; }
		.left_menu{
			background-color:#e3f2fd;
		    width:270px;
	        float:left;
		    height:auto; 
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
		.baslik{
			position: relative;
			padding: 14px 34px;
			background-color: #00b894;
			font-size:14px;
			color: white;
			float: left;
			width: 270px;
			height: 50px;
		}
		.dropbtn {
              background-color: #4fb99f;
              color: white;
              padding: 14px 36px;
              border: none;
              cursor: pointer; 
			  font-size: 18px;
			  text-align: center;
			  width:270px;
		}
        .dropdown {
             position: relative;
             display: inline-block; 
		}
        .dropdown-content {
                 display: none;
                 position: absolute;
                 background-color: #4fb99f;
                 text-align: center;
                 min-width: 270px;
                 z-index: 1;
        }
        .dropdown-content a {
               color: #fff;
               padding: 12px 16px;
               text-decoration: none;
               display: block;
        }
        .dropdown-content a:hover {
              background-color: #f2b134;
        }
        .dropdown:hover .dropdown-content {
                      display: block;
        }
        .dropdown:hover .dropbtn {
               background-color: #068587;
        }
		.banner{background-color:#63cdda;
		}
		.content{
			padding-left:130px; padding-top:110px; width:1114px; height:760px; 
		}
		#b2{position: absolute; top:640px; left: 500px;}
		#b3{position: absolute; top:640px; left: 300px;}
		#c1{position:relative; top:30; left:70;}
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
            <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item custom-nav-item"><a href="course.php" class="nav-link">Courses</a></li>
            <li class="nav-item custom-nav-item"><a href="../exercise.php" class="nav-link">Exercises</a></li>
            <li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">User Profile</a></li>
            <li class="nav-item custom-nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
    </div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <?php

            include_once('../database.php');

            echo '<a href="../logout.php?logout" class="nav-link">Logout</a>';


            ?>
        </li>
    </ul>
</nav>
<!-- end navigation -->
	
      <div class="left_menu">
		 <div class="baslik">
		  <p>Completed 0 of 100 Exercises:</p>
		 </div>
         <div class="dropdown">
          <button class="dropbtn">Variables</button>
           <div class="dropdown-content">
            <a href="exercise1.php">Exercise 1</a>
            <a href="exercise2.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Data Types</button>
           <div class="dropdown-content">
            <a href="exercise3.php">Exercise 1</a>
            <a href="exercise4.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Operators</button>
           <div class="dropdown-content">
            <a href="exercise5.php">Exercise 1</a>
            <a href="exercise6.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">If...Else</button>
           <div class="dropdown-content">
            <a href="exercise7.php">Exercise 1</a>
            <a href="exercise8.php">Exercise 2</a>
          </div>
         </div><br>
		 <div class="dropdown">
          <button class="dropbtn">Loops</button>
           <div class="dropdown-content">
            <a href="exercise9.php">Exercise 1</a>
            <a href="exercise10.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Switch</button>
           <div class="dropdown-content">
            <a href="exercise11.php">Exercise 1</a>
            <a href="exercise12.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Functions</button>
           <div class="dropdown-content">
            <a href="exercise15.php">Exercise 1</a>
            <a href="exercise16.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Input/Output</button>
           <div class="dropdown-content">
            <a href="exercise21.php">Exercise 1</a>
            <a href="exercise22.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Strings</button>
           <div class="dropdown-content">
            <a href="exercise17.php">Exercise 1</a>
            <a href="exercise18.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Arrays</button>
           <div class="dropdown-content">
            <a href="exercise19.php">Exercise 1</a>
            <a href="exercise20.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Pointer</button>
           <div class="dropdown-content">
            <a href="exercise23.php">Exercise 1</a>
            <a href="exercise24.php">Exercise 2</a>
          </div>
         </div>
		  <div class="dropdown">
          <button class="dropbtn">Random Numbers</button>
           <div class="dropdown-content">
            <a href="exercise25.php">Exercise 1</a>
            <a href="exercise26.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Typedef, Struct</button>
           <div class="dropdown-content">
            <a href="exercise27.php">Exercise 1</a>
            <a href="exercise28.php">Exercise 2</a>
          </div>
         </div>
		 <div class="dropdown">
          <button class="dropbtn">Lists</button>
           <div class="dropdown-content">
            <a href="exercise29.php">Exercise 1</a>
            <a href="exercise30.php">Exercise 2</a>
          </div>
         </div>
		  <div class="dropdown">
          <button class="dropbtn">Sequential File</button>
           <div class="dropdown-content">
            <a href="exercise31.php">Exercise 1</a>
            <a href="exercise32.php">Exercise 2</a>
          </div>
         </div>
		  <div class="dropdown">
          <button class="dropbtn">Random Access File</button>
           <div class="dropdown-content">
            <a href="exercise33.php">Exercise 1</a>
            <a href="exercise34.php">Exercise 2</a>
          </div>
         </div>
        </div>
       <div class="sag_icerik">
   	    <div class="content" id="c1">
		<b><i><p><i class="fas fa-arrow-alt-circle-right"></i> Calculate the output according to the code snippet below.</p></i></b>
        <br> <pre style="font-size:20px;">
 #include< stdio.h >
  int main()
{
int variable1 = 5;<p id='satir-1' class="duzen"><input type='text' id='16' class='cevap'> variable2 = 77.3;<input class='sonuc' style='display:none' type='text' id='y-16' readonly></p>char variable3 = 'A';

printf("%d\n",variable1);
printf("%f\n",variable2);<p id='satir-2' class="duzen">printf("<input type='text' id='17' class='cevap'> \n",variable3);<input class='sonuc' style='display:none' type='text' id='y-17' readonly></p>       
 return 0;
}
		 
       </pre>
		  <center><input class="btn btn-info" id="b3" type="submit" value='Submit Answer' onclick="kontrol()"> 
		  <a href="exercise3.php"><button type="button" class="btn btn-success" id="b2">Next Exercise <i class="fas fa-arrow-right"></i></button></a>
		  </center>
		  
        </div>
     </div>
  </body>
</html>