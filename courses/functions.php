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
    <title>Functions</title>
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
                  height:6800px; }
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
         <div class="icerik_yazi"><br>
             <h1>Functions in C</h1>
             <p>A <b>function</b> is a block of code that performs a particular task.<br>
             There are many situations where we might need to write same line of code for more than once in a program. This may lead to unnecessary repetition of code, bugs and even becomes boring for the programmer. So, C language provides an approach in which you can declare and define a group of statements once in the form of a function and it can be called and used whenever required.<br>
             These functions defined by the user are also know as <b>User-defined Functions</b><br>
                 C functions can be classified into two categories,<br></p>
             <ol class="content">
                 <li><b>Library functions</b></li>
                 <li><b>User-defined functions</b></li>
             </ol>
             <p><b>Library functions</b> are those functions which are already defined in C library, example <code>printf()</code>, <code>scanf()</code>, <code>strcat()</code> etc. You just need to include appropriate header files to use these functions. These are already declared and defined in C libraries.</p>
             <p>A <b>User-defined functions</b> on the other hand, are those functions which are defined by the user at the time of writing program. These functions are made for code reusability and for saving time and space.</p>
             <br><h3>Benefits of Using Functions</h3>
             <ol class="content">
                 <li>It provides modularity to your program's structure.</li>
                 <li>It makes your code reusable. You just have to call the function by its name to use it, wherever required.</li>
                 <li>In case of large programs with thousands of code lines, debugging and editing becomes easier if you use functions.</li>
                 <li>It makes the program more readable and easy to understand.</li>
             </ol>
             <br><h3>Function Declaration</h3><br>
             <b><pre class="c language-clike"><code class=" language-clike">returntype <span class="token function">functionName</span><span class="token punctuation">(</span>type1 parameter1<span class="token punctuation">,</span> type2 parameter2<span class="token punctuation">,</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
             <p>
                 Like any variable or an array, a function must also be declared before its used. Function declaration informs the compiler about the function name, parameters is accept, and its return type. The actual body of the function can be defined separately. It's also called as <b>Function Prototyping</b>. Function declaration consists of 4 parts.</p>
             <ul class="content">
                 <li>returntype</li>
                 <li>function name</li>
                 <li>parameter list</li>
                 <li>terminating semicolon</li>
             </ul>
             <b><h4>returntype</h4></b>
             <p>When a function is declared to perform some sort of calculation or any operation and is expected to provide with some result at the end, in such cases, a <code>return</code> statement is added at the end of function body. Return type specifies the type of value(<code>int</code>, <code>float</code>, <code>char</code>, <code>double</code>) that function is expected to return to the program which called the function.
             <br><b>Note:</b> In case your function doesn't return any value, the return type would be <code>void</code>.</p>
             <b><h4>functionName</h4></b>
             <p>Function name is an identifier and it specifies the name of the function. The function name is any valid C identifier and therefore must follow the same naming rules like other variables in C language.</p>
             <b><h4>parameter list</h4></b>
             <p>The parameter list declares the type and number of arguments that the function expects when it is called. Also, the parameters in the parameter list receives the argument values when the function is called. They are often referred as <b>formal parameters</b>.</p>
             <br><h3>Function definition Syntax</h3>
             <p>
                 Just like in the example above, the general syntax of function definition is,</p>
             <p class="center"><img src="../image/course/functions1.png"></p><br>
             <p>The first line <i>returntype</i> <b>functionName(type1 parameter1, type2 parameter2,...)</b> is known as <b>function header</b> and the statement(s) within curly braces is called <b>function body</b>.</p>
             <p><b>Note:</b> While defining a function, there is no semicolon(<code>;</code>) after the parenthesis in the function header, unlike while declaring the function or calling the function.</p>
             <h4>functionbody</h4>
             <p>The function body contains the declarations and the statements(algorithm) necessary for performing the required task. The body is enclosed within curly braces <code>{ ... }</code> and consists of three parts.</p>
             <ul class="content">
                 <li><b>local</b> variable declaration(if required).</li>
                 <li><b>function statements</b> to perform the task inside the function.</li>
                 <li>a <b>return</b> statement to return the result evaluated by the function(if return type is <code>void</code>, then no return statement is required).</li>
             </ul>
             <hr>
             <br><h3>Calling a function</h3>
             <p>When a function is called, control of the program gets transferred to the function.</p>
             <p class="center"><img src="../image/course/functions2.png"></p><br>
             <p>In the example above, the statement <code>multiply(i, j);</code> inside the <code>main()</code> function is function call.</p>
             <h3>Passing Arguments to a function</h3>
             <p>Arguments are the values specified during the function call, for which the formal parameters are declared while defining the function.</p>
             <p>It is possible to have a function with parameters but no return type. It is not necessary, that if a function accepts parameter(s), it must return a result too.</p>
             <p class="center"><img src="../image/course/functions3.png"></p><br>
             <p>While declaring the function, we have declared two parameters <code>a</code> and <code>b</code> of type <code>int</code>. Therefore, while calling that function, we need to pass two arguments, else we will get compilation error. And the two arguments passed should be received in the function definition, which means that the function header in the function definition should have the two parameters to hold the argument values. These received arguments are also known as <b>formal parameters</b>. The name of the variables while declaring, calling and defining a function can be different.</p>
             <hr>
             <h3>Returning a value from function</h3>
             <p>A function may or may not return a result. But if it does, we must use the <code>return</code> statement to output the result. <code>return</code> statement also ends the function execution, hence it must be the last statement of any function. If you write any statement after the <code>return</code> statement, it won't be executed.</p>
             <p class="center"><img src="../image/course/functions4.png"></p><br>
             <p>The datatype of the value returned using the <code>return</code> statement should be same as the return type mentioned at function declaration and definition. If any of it mismatches, you will get compilation error.</p>
             <hr>
             <h1>Types of Function calls in C</h1><br>
             <h2>Call by Value</h2>
             <p>Calling a function by value means, we pass the values of the arguments which are stored or copied into the formal parameters of the function. Hence, the original values are unchanged only the parameters inside the function changes. </p>
             <p class="center"><img src="../image/course/functions5.png"></p><br>
             <p ><u>Output=<br></u>
                 value of x in calc function is 20<br>
                 value of x in main is 10
             </p><hr>
             <p>In this case, the actual <a href="variables-in-c.php" target="_blank">variable</a> <code>x</code> is not changed. This is because we are passing the argument by value, hence a copy of <code>x</code> is passed to the function, which is updated during function execution, and that copied value in the function is destroyed when the function ends(goes out of scope). So the variable <code>x</code> inside the <code>main()</code> function is never changed and hence, still holds a value of <code>10</code>.</p>
             <br><p>But we can change this program to let the function modify the original <code>x</code> variable, by making the function <code>calc()</code> return a value, and storing that value in x.</p>
             <p class="center"><img src="../image/course/functions6.png"></p><br>
             <u><p>output= value of x is 20</p><hr></u>
             <h2>Call by Reference</h2>
             <p>In call by reference we pass the address(reference) of a variable as argument to any function. When we pass the address of any variable as argument, then the function will have access to our variable, as it now knows where it is stored and hence can easily update its value.</p>
             <p>In this case the formal parameter can be taken as a <b>reference</b> or a <b><a href="pointers.php" target="_blank">pointers </a></b>(don't worry about pointers, we will soon learn about them), in both the cases they will change the values of the original variable. </p>
             <p class="center"><img src="../image/course/functions7.png"></p><br>
             <u><p>output= value of x is 20</p><hr></u>
             <p><b>NOTE:</b> If you do not have any prior knowledge of pointers, do study <a href="pointers.php" target="_blank">Pointers</a> first. Or just go over this topic and come back again to revise this, once you have learned about pointers.</p>


             <div><ul class="pager">
                     <li class="previous" id="d2">
                         <a href="strings.php">← Prev</a>
                     </li>
                     <li class="next" id="d3">
                         <a href="structures.php">Next →</a>
                     </li>
                 </ul></div>
             <br><hr>


</div>
</div>

</body>
</html>