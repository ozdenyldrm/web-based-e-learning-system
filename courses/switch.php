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
    <title>Switch</title>
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
                  height:2270px; }
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
                 <h1>Switch statement in C</h1><br>
                 <p>When you want to solve multiple option type problems, for example: Menu like program, where one value is associated with each option and you need to choose only one at a time, then, <code>switch</code> statement is used.</p>
                 <p>Switch statement is a control statement that allows us to choose only one choice among the many given choices. The expression in <code>switch</code> evaluates to return an integral value, which is then compared to the values present in different cases. It executes that block of code which matches the case value. If there is no match, then <b>default</b> block is executed(if present). The general form of <code>switch</code> statement is,</p>
                 <p class="center"><img src="../image/course/switch1.png"></p><br><hr>
                 <h2>Rules for using <code>switch</code> statement</h2>
                 <ol class="content">
                     <li>The expression (after switch keyword) must yield an <b>integer</b> value i.e the expression should be an integer or a variable or an expression that evaluates to an integer.</li>
                     <li>The case <b>label</b> values must be unique.</li>
                     <li>The case label must end with a colon(:)</li>
                     <li>The next line, after the <b>case</b> statement, can be any valid C statement.</li>
                 </ol>
                 <hr>
                 <h3>Points to Remember</h3>
                 <ol class="content">
                     <li>We don't use those expressions to evaluate switch case, which may return floating point values or strings or characters.</li>
                     <li><code>break</code> statements are used to <b>exit</b> the switch block. It isn't necessary to use <code>break</code> after each block, but if you do not use it, then all the consecutive blocks of code will get executed after the matching block.</li><br>
                         <p class="center"><img src="../image/course/switch2.png"></p>
                         <u><p>Output= A B C</p></u>
                         <p>The output was supposed to be only <b>A</b> because only the first case matches, but as there is no <code>break</code> statement after that block, the next blocks are executed too, until it a <code>break</code> statement in encountered or the execution reaches the end of the <code>switch</code> block.</p></li>
                     <li><b>default</b> case is executed when none of the mentioned case matches the <code>switch</code> expression. The default case can be placed anywhere in the <code>switch</code> case. Even if we don't include the default case, <code>switch</code> statement works.</li>
                     <li>Nesting of <code>switch</code> statements are allowed, which means you can have <code>switch</code> statements inside another <code>switch</code> block. However, nested <code>switch</code> statements should be avoided as it makes the program more complex and less readable.</li>
                 </ol>
                 <hr>
                 <h3>Difference between <code>switch</code> and <code>if</code></h3>
                 <ul class="content">
                     <li><code><a href="decision.php" target="_blank">if</a></code> statements can evaluate <code>float</code> conditions. <code>switch</code> statements cannot evaluate <code>float</code> conditions.</li>
                     <li><code>if</code> statement can evaluate relational operators. <code>switch</code> statement cannot evaluate relational operators i.e they are not allowed in <code>switch</code> statement.</li>
                 </ul>
                 <hr>
                 <div><ul class="pager">
                         <li class="previous" id="d2">
                             <a href="decision.php">← Prev</a>
                         </li>
                         <li class="next" id="d3">
                             <a href="loops.php">Next →</a>
                         </li>
                     </ul></div>
                 <br><hr>

         </div>
</div>


</body>
</html>
