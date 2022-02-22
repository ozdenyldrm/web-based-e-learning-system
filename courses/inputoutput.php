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
    <title>Input/Output</title>
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
                  height:3660px; }
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
         <div class="icerik_yazi"><br>
             <div id="body-content">
                 <h1>C Input and Output</h1><br>
                 <p><b>Input</b> means to provide the program with some data to be used in the program and <b>Output</b> means to display data on screen or write the data to a printer or a file.</p>
                 <p>C programming language provides many built-in functions to read any given input and to display data on screen when there is a need to output the result.</p>
                 <p>In this tutorial, we will learn about such functions, which can be used in our program to take input from user and to output the result on screen.</p>
                 <p>All these built-in functions are present in C header files, we will also specify the name of header files in which a particular function is defined while discussing about it.</p>
                 <hr>
                 <h2><code>scanf()</code> and <code>printf()</code> functions</h2>
                 <p>The standard input-output header file, named <code>stdio.h</code> contains the definition of the functions <code>printf()</code> and <code>scanf()</code>, which are used to display output on screen and to take input from user respectively.</p>
                 <p class="center"><img src="../image/course/inputoutput1.png"></p>
                 <p>When you will compile the above code, it will ask you to enter a value. When you will enter the value, it will display the value you have entered on screen.</p>
                 <p>You must be wondering what is the purpose of <code>%d</code> inside the <code>scanf()</code> or <code>printf()</code> functions. It is known as <b>format string</b> and this informs the <code>scanf()</code> function, what type of input to expect and in <code>printf()</code> it is used to give a heads up to the compiler, what type of output to expect.</p>
                 <table class="table table-bordered">
                     <tbody><tr><th>Format String</th><th>Meaning</th></tr>
                     <tr><td><code>%d</code></td><td>Scan or print an integer as signed decimal number</td></tr>
                     <tr><td><code>%f</code></td><td>Scan or print a floating point number</td></tr>
                     <tr><td><code>%c</code></td><td>To scan or print a character</td></tr>
                     <tr><td><code>%s</code></td><td>To scan or print a character string. The scanning ends at whitespace.</td></tr>
                     </tbody></table>
                 <p>We can also <b>limit the number of digits or characters</b> that can be input or output, by adding a number with the format string specifier, like <code>"%1d"</code> or <code>"%3s"</code>, the first one means a single numeric digit and the second one means 3 characters, hence if you try to input <code>42</code>, while <code>scanf()</code> has <code>"%1d"</code>, it will take only <code>4</code> as input. Same is the case for output.</p>
                 <p>In C Language, computer monitor, printer etc output devices are treated as files and the same process is followed to write output to these devices as would have been followed to write the output to a file.</p>
                 <p><b>NOTE :</b> <code>printf()</code> function returns the number of characters printed by it, and <code>scanf()</code> returns the number of characters read by it.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">int i <span class="token operator">=</span> <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"studytonight"</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                 <p>In this program <code>printf("studytonight");</code> will return <code>12</code> as result, which will be stored in the variable <code>i</code>, because studytonight has 12 characters.</p>
                 <hr>
                 <h2><code>getchar()</code> &amp; <code>putchar()</code> functions</h2>
                 <p>The <code>getchar()</code> function reads a character from the terminal and returns it as an integer. This function reads only single character at a time. You can use this method in a <a href="loops.php" target="_blank">loop</a> in case you want to read more than one character. The <code>putchar()</code> function displays the character passed to it on the screen and returns the same character. This function too displays only a single character at a time. In case you want to display more than one characters, use <code>putchar()</code> method in a loop.</p>
                 <p class="center"><img src="../image/course/inputoutput2.png"></p>
                 <p>When you will compile the above code, it will ask you to enter a value. When you will enter the value, it will display the value you have entered.</p>
                 <hr>
                 <h2><code>gets()</code> &amp; <code>puts()</code> functions</h2>
                 <p>The <code>gets()</code> function reads a line from <b>stdin</b>(standard input) into the buffer pointed to by <code>str</code> <a href="pointers.php" target="_blank">pointer</a>, until either a terminating newline or EOF (end of file) occurs. The <code>puts()</code> function writes the string <code>str</code> and a trailing newline to <b>stdout</b>.</p>
                 <p><code>str</code> → This is the pointer to an array of chars where the C string is stored. (Ignore if you are not able to understand this now.)</p>
                 <p class="center"><img src="../image/course/inputoutput3.png"></p>
                 <p>
                     When you will compile the above code, it will ask you to enter a string. When you will enter the string, it will display the value you have entered.
                 </p>
                 <hr>
                 <h3>Difference between <code>scanf()</code> and <code>gets()</code></h3>
                 <p>The main difference between these two functions is that <code>scanf()</code> stops reading characters when it encounters a space, but <code>gets()</code> reads space as character too.</p>
                 <p>If you enter name as <b>Study Tonight</b> using <code>scanf()</code> it will only read and store <b>Study</b> and will leave the part after space. But <code>gets()</code> function will read it completely.</p>
                 <hr>
                 <div><ul class="pager">
                         <li class="previous" id="d2">
                             <a href="variables.php">← Prev</a>
                         </li>
                         <li class="next" id="d3">
                             <a href="decision.php">Next →</a>
                         </li>
                     </ul></div>
                 <br><hr>

         </div>
</div>

</body>
</html>