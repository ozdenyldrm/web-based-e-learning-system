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
    <title>Data Types</title>
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
                  height:2710px; }
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
            if(isset($_SESSION['user']))
            {
                echo '<a href="../logout.php?logout" class="nav-link">Logout <i class="fas fa-sign-out-alt"></i></a>';
            }

            else {

                header("location:");
            }

            ?>
        </li>
    </ul>
</nav>
<!-- end navigation -->

<div class="sol_menu"><br><br>
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
</ul><br><br>

</div>

<div class="sag_icerik">
    <div class="card-body">
         <div class="icerik_yazi">
             <div id="body-content"><br>
                 <h1>Data types in C</h1><br>
                 <p>Data types specify how we enter data into our programs and what type of data we enter. C language has some predefined set of data types to handle various kinds of data that we can use in our program. These datatypes have different storage capacities.</p>
                 <p>C language supports 2 different type of data types:</p>
                 <ol class="content">
                     <li><b>Primary data types</b>: <p>These are fundamental data types in C namely integer(<code>int</code>), floating point(<code>float</code>), character(<code>char</code>) and <code>void</code>.</p></li>
                     <li><b>Derived data types</b>: <p>Derived data types are nothing but primary datatypes but a little twisted or grouped together like <b><a href="arrays.php" target="_blank">array</a></b>, <b><a href="structures.php" target="_blank">stucture</a></b>, <b>union</b> and <b><a href="pointers.php" target="_blank">pointers</a></b>. These are discussed in details later.</p></li>
                 </ol>
                 <p>Data type determines the type of data a <a href="variables.php" target="_blank">variable</a> will hold. If a
                     variable <code>x</code> is declared as <code>int</code>. it means x can hold only integer values.
                     Every variable which is used in the program must be declared as what
                     data-type it is.</p>
                 <br>
                 <p class="center"><img src="../image/course/datatypes1.png" alt="Primary data types in c"></p>
                 <hr>
                 <h2>Integer type</h2>
                 <p>Integers are used to store whole numbers.</p>
                 <p><b>Size and range of Integer type on 16-bit machine:</b></p>
                 <table class="table table-bordered table-striped">
                     <tbody><tr><th>Type</th><th>Size(bytes)</th><th>Range</th></tr>
                     <tr><td>int or signed int</td><td>2</td><td>-32,768 to 32767</td></tr>
                     <tr><td>unsigned int</td><td>2</td><td>0 to 65535</td></tr>
                     <tr><td>short int or signed short int</td><td>1</td><td>-128 to 127</td></tr>
                     <tr><td>unsigned short int</td><td>1</td><td>0 to 255</td></tr>
                     <tr><td>long int or signed long int</td><td>4</td><td>-2,147,483,648 to 2,147,483,647</td></tr>
                     <tr><td>unsigned long int</td><td>4</td><td>0 to 4,294,967,295</td></tr>
                     </tbody></table>
                 <hr>
                 <h2>Floating point type</h2>
                 <p>Floating types are used to store real numbers.</p>
                 <p><b>Size and range of Integer type on 16-bit machine</b></p>
                 <table class="table table-bordered table-striped">
                     <tbody><tr><th>Type</th><th>Size(bytes)</th><th>Range</th></tr>
                     <tr><td>Float</td><td>4</td><td>3.4E-38 to 3.4E+38</td></tr>
                     <tr><td>double</td><td>8</td><td>1.7E-308 to 1.7E+308</td></tr>
                     <tr><td>long double</td><td>10</td><td>3.4E-4932 to 1.1E+4932</td></tr>
                     </tbody></table>
                 <hr>
                 <h2>Character type</h2>
                 <p>Character types are used to store characters value.</p>
                 <p><b>Size and range of Integer type on 16-bit machine</b></p>
                 <table class="table table-bordered table-striped">
                     <tbody><tr><th>Type</th><th>Size(bytes)</th><th>Range</th></tr>
                     <tr><td>char or signed char</td><td>1</td><td>-128 to 127</td></tr>
                     <tr><td>unsigned char</td><td>1</td><td>0 to 255</td></tr>
                     </tbody></table>
                 <hr>
                 <h2>void type</h2>
                 <p><code>void</code> type means no value. This is usually used to specify the type of functions which returns nothing. We will get acquainted to this datatype as we start learning more advanced topics in C language, like <a href="functions.php" target="_blank">functions</a>, pointers etc.</p>
                 <hr>
                 <div><ul class="pager">
                         <li class="previous" id="d2">
                             <a href="operators.php">← Prev</a>
                         </li>
                         <li class="next" id="d3">
                             <a href="variables.php">Next →</a>
                         </li>
                     </ul></div>
                 <br><hr>

                 <div class="center" style="min-height: 250px;overflow: auto;">

                     <div data-ad="BelowContent" id="Asc-BelowContent-DideP644" data-sizes="[[336,280],[300,250]]" class="asc-ad" data-google-query-id="CPPYltfmze4CFZlf4Aod3CcACg"><div id="google_ads_iframe_/54243763/studytonight_belowcontent_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/54243763/studytonight_belowcontent_0" title="3rd party ad content" name="google_ads_iframe_/54243763/studytonight_belowcontent_0" width="336" height="280" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="4" data-load-complete="true"></iframe></div></div>
                 </div></div>



         </div>
</div>

</body>
</html>
