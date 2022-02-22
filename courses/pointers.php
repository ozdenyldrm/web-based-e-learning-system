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
    <title>Pointers</title>
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
                  height:3250px; }
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
                echo '<a href="logout.php?logout" class="nav-link">Logout <i class="fas fa-sign-out-alt"></i></a>';
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
    <div class="icerik_yazi">
        <div id="body-content"><br><br>
            <h1>Pointers in C</h1>
            <p>A Pointer in C language is a variable which holds the address of another variable of same <a href="datatype.php" target="_blank">data type</a>
            <br>Pointers are used to access memory and manipulate the address.
            <br>Pointers are one of the most distinct and exciting features of C language. It provides power and flexibility to the language. Although pointers may appear a little confusing and complicated in the beginning, but trust me, once you understand the concept, you will be able to do so much more with C language.
            </p>
            <hr>
            <h2>Address in C</h2>
            <p>Whenever a <a href="variables.php" target="_blank">variable</a> is defined in C language, a memory location is assigned for it, in which it's value will be stored. We can easily check this memory address, using the <code>&amp;</code> symbol.</p>
            <p>If <code>var</code> is the name of the variable, then <code>&amp;var</code> will give it's address.</p>
            <p>Let's write a small program to see memory address of any variable that we define in our program.</p>
            <b><pre class="c language-clike"><code class=" language-clike">#include<span class="token operator">&lt;</span>stdio<span class="token punctuation">.</span>h<span class="token operator">&gt;</span><br>void <span class="token function">main</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    int var <span class="token operator">=</span> <span class="token number">7</span><span class="token punctuation">;</span>
    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"Value of the variable var is: %d\n"</span><span class="token punctuation">,</span> var<span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"Memory address of the variable var is: %x\n"</span><span class="token punctuation">,</span> <span class="token operator">&amp;</span>var<span class="token punctuation">)</span><span class="token punctuation">;</span>
                            <span class="token punctuation">}</span></code></pre></b>
            <b><u>Output= </u><br>Value of the variable var is: 7 <br>Memory address of the variable var is: bcc7a00</b><br>

            <br><p>You must have also seen in the <a href="user-defined-functions-in-c.php" target="_blank">function</a> <code>scanf()</code>, we mention <code>&amp;var</code> to take user input for any variable <code>var</code>.</p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token function">scanf</span><span class="token punctuation">(</span><span class="token string">"%d"</span><span class="token punctuation">,</span> <span class="token operator">&amp;</span>var<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
            <p>This is used to store the user inputted value to the address of the variable <code>var</code>.</p>
            <hr>
            <h2>Concept of Pointers</h2>
            <p>Whenever a <b>variable</b> is declared in a program, system allocates a location i.e an address to that variable in the memory, to hold the assigned value. This location has its own address number, which we just saw above.</p>
            <p>Let us assume that system has allocated memory location <code>80F</code> for a variable <code>a</code>.</p>
            <p><code>int a = 10;</code></p>
            <p class="center"><img src="../image/course/pointer1.png"></p>
            <p>We can access the value <code>10</code> either by using the variable name <code>a</code> or by using its address <code>80F</code>.</p>
            <p>The question is how we can access a variable using it's address? Since the memory addresses are also just numbers, they can also be assigned to some other variable. The variables which are used to hold memory addresses are called <b>Pointer variables</b>.</p>
            <p>A <b>pointer</b> variable is therefore nothing but a variable which holds an address of some other variable. And the value of a <b>pointer variable</b> gets stored in another memory location.</p>
            <p class="center"><img src="../image/course/pointer2.png"></p>
            <hr>
            <h3>Benefits of using pointers</h3>
            <p>Below we have listed a few benefits of using pointers:</p>
            <ol class="content">
                <li>Pointers are more efficient in handling <a href="arrays.php" target="_blank">Arrays</a> and <a href="structures.php" target="_blank">Structures</a>.</li>
                <li>Pointers allow references to function and thereby helps in passing of function as arguments to other functions.</li>
                <li>It reduces length of the program and its execution time as well.</li>
                <li>It allows C language to support Dynamic Memory management.</li>
            </ol>
            <h3>Declaration of C Pointer variable</h3>
            <p>General syntax of pointer declaration is,</p><b><pre class="c language-clike"><code class=" language-clike">datatype <span class="token operator">*</span>pointer_name<span class="token punctuation">;</span></code></pre></b>
            <u><b><p>Data type of a pointer must be same as the <a href="datatype.php" target="_blank">data type</a> of the <a href="variables.php" target="_blank">variable</a> to which the pointer variable is pointing. </b></u><code>void</code> type pointer works with all data types, but is not often used.</p>
            <h3>Initialization of C Pointer variable</h3>
            <p>
                <b>Pointer Initialization</b> is the process of assigning address of a variable to a <b>pointer</b> variable. Pointer variable can only contain address of a variable of the same data type. In C language <b>address operator</b> <code>&amp;</code> is used to determine the address of a variable. The <code>&amp;</code> (immediately preceding a variable name) returns the address of the variable associated with it.</p>
            <p class="center"><img src="../image/course/pointer3.png"></p><br>
            <h3>Points to remember while using pointers</h3>
            <ol class="content">
                <li>While declaring/initializing the pointer variable, <code>*</code> indicates that the variable is a pointer.</li>
                <li>The address of any variable is given by preceding the variable name with Ampersand <code>&amp;</code>.</li>
                <li>The pointer variable stores the address of a variable. The declaration <code>int *a</code> doesn't mean that <code>a</code> is going to contain an integer value. It means that <code>a</code> is going to contain the address of a variable storing integer value.</li>
                <li>To access the value of a certain address stored by a pointer variable, <code>*</code> is used. Here, the <code>*</code> can be read as <b>'value at'</b>.</li>
            </ol>
            <hr>
            <div><ul class="pager">
                    <li class="previous" id="d2">
                        <a href="structures.php">← Prev</a>
                    </li>

                </ul></div>
            <br><hr>

            <div class="center" style="min-height: 250px;overflow: auto;">

                <div data-ad="BelowContent" id="Asc-BelowContent-1XSwp942" data-sizes="[[336,280],[300,250]]" class="asc-ad" data-google-query-id="CLuqqrOXzO4CFc2aewodh38BbA"><div id="google_ads_iframe_/54243763/studytonight_belowcontent_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/54243763/studytonight_belowcontent_0" title="3rd party ad content" name="google_ads_iframe_/54243763/studytonight_belowcontent_0" width="336" height="280" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="4" data-load-complete="true"></iframe></div></div>
            </div></div>

</div>
</div>

</body>
</html>
