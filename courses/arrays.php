<html>
    <head>
	   <meta charset = "utf-8">

       <link rel="stylesheet" href="../css/bootstrap.min.css">
	   
	   <!-- font -->
	   <link rel="stylesheet" href="../css/all.min.css">
	   <!-- Google font -->
	   <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	   <!-- end font -->
	   
	   <!-- Custom CSS -->
	    <link rel="stylesheet" href="../css/styles.css">
	    <title>WOLS Home Page</title>
	  <style>
	  
        body{
	        background-color: #cffbfb;
		    background-size: auto; }
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
		.sol_menu{
                  background-color:#e3f2fd;
                  width:270px;
                  float:left;
                  height:4580px; }
		.sag_icerik{
			      position: absolute;
				  left: 400px;
                  float:left; }
        #d2{
            position:absolute;
            left:50px;
            width:100px;
        }
        #d3{
            position:absolute;
            right:5px;
            width:90px;
        }
		
	  </style>
    </head>
     <body>
	   <!-- javascript -->
	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/all.min.js"></script>
	  
	  <!-- start navigation -->
	    <nav class="navbar navbar-expand-lg navbar-light bg-light pl-5" >
         <a class="navbar-brand" href="login.php">WOLS</a>
		 <span class="navbar-text">Learn and Implement</span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
		  aria-expanded="false" aria-label="Toggle navigation">
           span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <ul class="navbar-nav custom-nav pl-5 ">
          <li class="nav-item custom-nav-item"><a href="../index.php" class="nav-link">Home</a></li>
		  <li class="nav-item custom-nav-item"><a href="course.php" class="nav-link">Courses</a></li>
		  <li class="nav-item custom-nav-item"><a href="../exercise.php" class="nav-link">Exercises</a></li>
		  <li class="nav-item custom-nav-item"><a href="../student/studentProfile.php" class="nav-link">User Profile</a></li>
		  <li class="nav-item custom-nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
         </ul>
        </div>
		<ul class="nav justify-content-end">
         <li class="nav-item">
          <?php
		  
           session_start();
           if(!isset($_SESSION['user']))
          {
	        header("location:../login.php");
	      }
		  
          else{
	            echo '<a href="../logout.php?logout" class="nav-link">Logout <i class="fas fa-sign-out-alt"></i></a>';
          }

         ?>
         </li>
        </ul>
       </nav>
		<!-- end navigation -->
		
      <div class="sol_menu">
      <br><br>
      <ul class="nav flex-column">
       <center><h5>C Programming Lectures</h5></center><br>
       <li class="nav-item">
        <center><a class="nav-link active" href="operators.php">Operators</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="datatypes.php">Data Types</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="variables.php">Variables</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="inputoutput.php">Input/Output</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="decision.php">Decision</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="switch.php">Switch</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="loops.php">Loops</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="arrays.php">Arrays</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="strings.php">Strings</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="functions.php">Functions</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="structures.php">Structures</a></center>
       </li>
       <li class="nav-item">
        <center><a class="nav-link" href="pointers.php">Pointers</a></center>
       </li>
      </ul>
	  <br><br>
    </div>

       <div class="sag_icerik">
        <br><br>
            <h1>Arrays in C</h1><br>
        <p>In C language, <code>arrays</code> are reffered to as structured <a href="datatype.php" target="_blank">data types</a>. An array is defined as <b>finite ordered collection of homogenous</b> data, stored in contiguous memory locations.</p>
        <p>Here the words,</p>
        <ul class="content">
            <li><b>finite</b> <i>means</i> data range must be defined.</li>
            <li><b>ordered</b> <i>means</i> data must be stored in continuous memory addresses.</li>
            <li><b>homogenous</b> <i>means</i> data must be of similar data type.</li>
        </ul>
        <br>
        <h3>Example where arrays are used,</h3>
        <ul class="content">
            <li>to store list of Employee or Student names,</li>
            <li>to store marks of students,</li>
            <li>or to store list of numbers or characters etc.</li>
        </ul>
        <p>Since arrays provide an easy way to represent data, it is classified amongst the data structures in C. Other data structures in c are <b>structure</b>, <b>lists</b>, <b>queues</b>, <b>trees</b> etc. Array can be used to represent not only simple list of data but also table of data in two or three dimensions.</p>
        <hr>
        <h3>Declaring an Array</h3>
        <p>Like any other variable, arrays must be declared before they are used. General form of array declaration is,</p>
            <p class="center"><img src="../image/course/kod1.png"></p>
            <p class="center"><img src="../image/course/array.jpg" alt="array declaraction in c"></p>
        <p>Here <code>int</code> is the data type, <code>arr</code> is the name of the array and 10 is the size of array. It means array <code>arr</code> can only contain 10 elements of <code>int</code> type.</p>
        <p><b>Index</b> of an array starts from <code>0</code> to <b>size-1</b> i.e first element of <code>arr</code> array will be stored at <code>arr[0]</code> address and the last element will occupy <code>arr[9]</code>.</p>

        <h3>Initialization of an Array</h3>
        <p>After an array is declared it must be initialized. Otherwise, it will contain <b>garbage</b> value(any random value). An array can be initialized at either <b>compile time</b> or at <b>runtime</b>.
        </p>
        <br>
        <h4>Compile time Array initialization</h4>
        <p>Compile time initialization of array elements is same as ordinary variable initialization. The general form of initialization of array is,</p>
            <p class="center"><img src="../image/course/kod2.png"></p>

        <p>One important thing to remember is that when you will give more initializer(array elements) than the declared array size than the <b>compiler</b> will give an error.</p>
            <p class="center"><img src="../image/course/kod3.png"></p>

        <h4>Runtime Array initialization</h4>
        <p>
            An array can also be initialized at runtime using <code>scanf()</code> function. This approach is usually used for initializing large arrays, or to initialize arrays with user specified values. Example,</p>
            <p class="center"><img src="../image/course/kod4.png"></p>

        <hr>
        <h3>Two dimensional Arrays</h3>
        <p>C language supports multidimensional arrays also. The simplest form of a multidimensional array is the two-dimensional array. Both the row's and column's index begins from <code>0</code>.</p>
        <p>
            Two-dimensional arrays are declared as follows,</p>
            <p class="center"><img src="../image/course/kod5.png"></p>
        <p class="center"><img src="../image/course/array1.jpg" alt="two dimensional array in c"></p>
        <p>An array can also be declared and initialized together. For example,</p>
            <p class="center"><img src="../image/course/kod6.png"></p>
        <p><b>Note:</b> We have not assigned any row value to our array in the above example. It means we can initialize any number of rows. But, we must always specify number of columns, else it will give a compile time error. Here, a <code>2*3</code> multi-dimensional matrix is created.</p>
        <br>
        <h4>Runtime initialization of a two dimensional Array</h4>
            <p class="center"><img src="../image/course/kod7.png"></p>
        <hr>
        <div> <ul class="pager">
                <li class="previous" id="d2">
                    <a href="loops.php">← Prev</a>
                </li>
                <li class="next" id="d3">
                    <a href="strings.php">Next →</a>
                </li>
            </ul></div>
        <br><hr>
</div>

<!-- start student login model -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
 
</body>
</html>