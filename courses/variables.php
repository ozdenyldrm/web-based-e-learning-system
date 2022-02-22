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
    <title>Variables</title>
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
                  height:3280px; }
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
    </li
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
                 <h1>Variables in C Language</h1><br>
                 <p>When we want to store any information(data) on our computer/laptop, we store it in the computer's memory space. Instead of remembering the complex address of that memory space where we have stored our data, our operating system provides us with an option to create folders, name them, so that it becomes easier for us to find it and access it.</p>
                 <p>Similarly, in C language, when we want to use some data value in our program, we can store it in a memory space and name the memory space so that it becomes easier to access it.</p>
                 <p>The naming of an address is known as <b>variable</b>. Variable is the name of memory location. Unlike constant, variables are changeable, we can change value of a variable during execution of a program. A programmer can choose a meaningful variable name. Example : average, height, age, total etc.</p>
                 <hr>
                 <h2>Datatype of Variable</h2>
                 <p>A <b>variable</b> in C language must be given a type, which defines what type of data the variable will hold.</p>
                 <p>It can be:</p>
                 <ul class="content">
                     <li><code>char</code>: Can hold/store a character in it.</li>
                     <li><code>int</code>: Used to hold an integer.</li>
                     <li><code>float</code>: Used to hold a float value.</li>
                     <li><code>double</code>: Used to hold a double value.</li>
                     <li><code>void</code></li>
                 </ul>
                 <hr>
                 <h3>Rules to name a Variable</h3>
                 <ol class="content">
                     <li>Variable name must not start with a digit.</li>
                     <li>Variable name can consist of alphabets, digits and special symbols like underscore <code>_</code>.</li>
                     <li>Blank or spaces are not allowed in variable name.</li>
                     <li>Keywords are not allowed as variable name.</li>
                     <li>Upper and lower case names are treated as different, as C is case-sensitive, so it is suggested to keep the variable names in lower case.</li>
                 </ol>
                 <hr>
                 <h3>Declaring, Defining and Initializing a variable</h3>
                 <p><b>Declaration</b> of variables must be done before they are used in the program. Declaration does the following things.</p>
                 <ol class="content">
                     <li>It tells the compiler what the variable name is.</li>
                     <li>It specifies what type of data the variable will hold.</li>
                     <li>Until the variable is defined the compiler doesn't have to worry about allocating memory space to the variable.</li>
                     <li>Declaration is more like informing the compiler that there exist a variable with following datatype which is used in the program.</li>
                     <li>A variable is declared using the <code>extern</code> keyword, outside the <code>main()</code> function.</li>
                 </ol>
                 <b><pre class="c language-clike"><code class=" language-clike">extern int a<span class="token punctuation">;</span>
extern float b<span class="token punctuation">;</span>
extern double c<span class="token punctuation">,</span> d<span class="token punctuation">;</span></code></pre></b>
                 <p><b>Defining</b> a variable means the compiler has to now assign a storage to the variable because it will be used in the program. It is not necessary to declare a variable using <code>extern</code> keyword, if you want to use it in your program. You can directly define a variable inside the <code>main()</code> function and use it.</p>
                 <p>To define a function we must provide the datatype and the variable name. We can even define multiple variables of same datatype in a single line by using comma to separate them.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">int a<span class="token punctuation">;</span>
float b<span class="token punctuation">,</span> c<span class="token punctuation">;</span></code></pre></b>
                 <p><b>Initializing</b> a variable means to provide it with a value. A variable can be initialized and defined in a single statement, like:</p>
                 <b><pre class="c language-clike"><code class=" language-clike">int a <span class="token operator">=</span> <span class="token number">10</span><span class="token punctuation">;</span></code></pre></b>
                 <br>
                 <p>Let's write a program in which we will use some variables.</p>
                 <p class="center"><img src="../image/course/variables1.png"></p>
                 <p><u>Output= Sum is : 21</u></p>
                 <p>You must be thinking how does this <code>printf()</code> works, right? Do not worry, we will learn about it along with other ways to input and output data in C language in the <a href="inputoutput.php" target="_blank">next course</a>.</p>
                 <hr>
                 <h3>Difference between Variable and Identifier?</h3>
                 <p>An Identifier is a name given to any variable, function, structure, pointer or any other entity in a programming language. While a variable, as we have just learned in this tutorial is a named memory location to store data which is used in the program.</p>
                 <table class="table table-bordered">
                     <tbody><tr><th>Identifier</th><th>Variable</th></tr>
                     <tr><td>Identifier is the name given to a variable, function etc.</td>
                         <td>While, variable is used to name a memory location which stores data.</td></tr>
                     <tr><td>An identifier can be a variable, but not all indentifiers are variables.</td>
                         <td>All variable names are identifiers.</td>
                     </tr>
                     <tr>
                         <td>Example:
                             <br><p class="center"><img src="../image/course/variables2.png"></p>
                         <td>Example:
                             <br><p class="center"><img src="../image/course/variables3.png"></p>
                     </tbody></table>
                 <p>Another great analogy to understand the difference between Identifier and Variable is:</p>
                 <div><blockquote>
                         <p>You can think of an Identifier <code>int x</code> to be a variable's name, but it can also be a function's name <code>int x() { }</code> and still be an identifier.</p>
                         <p>Just like <b>Obama</b> is a name of a person, but also the name of a foundation.</p>
                     </blockquote>
                 </div>
                 <hr>
                 <div><ul class="pager">
                         <li class="previous" id="d2">
                             <a href="datatypes.php">← Prev</a>
                         </li>
                         <li class="next" id="d3">
                             <a href="inputoutput.php">Next →</a>
                         </li>
                     </ul></div>
                 <br><hr>

         </div>
</div>

</body>
</html>
