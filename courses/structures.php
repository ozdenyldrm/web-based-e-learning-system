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
    <title>Structures</title>
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
                  height:5900px; }
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
                 <h1>Structures in C</h1>
                 <p>Structure is a user-defined datatype in C language which allows us to combine data of different types together. Structure helps to construct a complex data type which is more meaningful. It is somewhat similar to an Array, but an array holds data of similar type only. But structure on the other hand, can store data of any type, which is practical more useful.</p>
                 <p><b>For example:</b> If I have to write a program to store Student information, which will have Student's name, age, branch, permanent address, father's name etc, which included string values, integer values etc, how can I use arrays for this problem, I will require something which can hold data of different types together.</p>
                 <p>In structure, data is stored in form of <b>records</b>.</p>
                 <hr>
                 <h2>Defining a structure</h2>
                 <p><code>struct</code> keyword is used to define a structure. <code>struct</code> defines a new data type which is a collection of primary and derived <a href="datatype.php" target="_blank">data types</a>.</p>
                 <p><b>Syntax:</b></p>
                 <b><pre class="c language-clike"><code class=" language-clike">struct <span class="token punctuation">[</span>structure_tag<span class="token punctuation">]</span>
<span class="token punctuation">{</span>
    <span class="token comment">//member variable 1</span>
    <span class="token comment">//member variable 2</span>
    <span class="token comment">//member variable 3</span>
    <span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
<span class="token punctuation">}</span><span class="token punctuation">[</span>structure_variables<span class="token punctuation">]</span><span class="token punctuation">;</span></code></pre></b>
                 <p>As you can see in the syntax above, we start with the <code>struct</code> keyword, then it's optional to provide your structure a name, we suggest you to give it a name, then inside the curly braces, we have to mention all the member variables, which are nothing but normal C language variables of different types like <code>int</code>, <code>float</code>, <code>array</code> etc.</p>
                 <p>After the closing curly brace, we can specify one or more structure variables, again this is optional.</p>
                 <p><b>Note:</b> The closing curly brace in the structure type declaration must be followed by a semicolon(<code>;</code>).</p>
                 <h3>Example of Structure</h3>
                 <p class="center"><img src="../image/course/structures1.png"></p>
                 <p>Here <code>struct Student</code> declares a structure to hold the details of a student which consists of 4 data fields, namely <code>name</code>, <code>age</code>, <code>branch</code> and <code>gender</code>. These fields are called <b>structure elements or members</b>.</p>
                 <p>Each member can have different datatype, like in this case, <code>name</code> is an array of <code>char</code> type and <code>age</code> is of <code>int</code> type etc. <b>Student</b> is the name of the structure and is called as the <b>structure tag</b>.</p>
                 <hr>
                 <h3>Declaring Structure Variables</h3>
                 <p>It is possible to declare variables of a <b>structure</b>, either along with structure definition or after the structure is defined. <b>Structure</b> variable declaration is similar to the declaration of any normal variable of any other datatype. Structure variables can be declared in following two ways:</p>
                 <hr>
                 <h4>1) Declaring Structure variables separately</h4>
                 <p class="center"><img src="../image/course/structures2.png"></p>
                 <hr>
                 <h4>2) Declaring Structure variables with structure definition</h4>
                 <p class="center"><img src="../image/course/structures3.png"></p>
                 <p>Here <code>S1</code> and <code>S2</code> are variables of structure <code>Student</code>. However this approach is not much recommended.</p>
                 <hr>
                 <h3>Accessing Structure Members</h3>
                 <p>Structure members can be accessed and assigned values in a number of ways. Structure members have no meaning individually without the structure. In order to assign a value to any structure member, the member name must be linked with the <b>structure</b> variable using a dot <code>.</code> operator also called <b>period</b> or <b>member access</b> operator.</p>
                 <p>We can also use <code>scanf()</code> to give values to structure members through terminal.</p>
                 <b><pre class="c language-clike"><code class=" language-clike"><span class="token function">scanf</span><span class="token punctuation">(</span><span class="token string">" %s "</span><span class="token punctuation">,</span> s1<span class="token punctuation">.</span>name<span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token function">scanf</span><span class="token punctuation">(</span><span class="token string">" %d "</span><span class="token punctuation">,</span> <span class="token operator">&amp;</span>s1<span class="token punctuation">.</span>age<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                 <hr>
                 <h3>Structure Initialization</h3>
                 <p>Like a variable of any other datatype, structure variable can also be initialized at compile time.</p>
                 <p class="center"><img src="../image/course/structures4.png"></p>
                 <p>or,</p>
                 <p class="center"><img src="../image/course/structures5.png"></p>
                 <hr>
                 <h3>Array of Structure</h3>
                 <p>We can also declare an array of <b>structure</b> variables. in which each element of the <a href="arrays.php" target="_blank">array</a> will represent a <b>structure</b> variable. <b>Example :</b> <code>struct employee emp[5];</code></p>
                 <p>The below program defines an array <code>emp</code> of size 5. Each element of the array <code>emp</code> is of type <code>Employee</code>.</p>
                 <hr>
                 <h3>Nested Structures</h3>
                 <p>Nesting of structures, is also permitted in C language. Nested structures means, that one structure has another stucture as member <a href="variables-in-c.php" target="_blank">variable</a>.</p>
                 <p><b>Example:</b></p>
                 <p class="center"><img src="../image/course/structures6.png"></p>
                 <hr>
                 <h3>Structure as Function Arguments</h3>
                 <p>We can pass a structure as a function argument just like we pass any other variable or an array as a function argument.</p>
                 <hr><h1><code>typedef</code> in C</h1>
                 <code>typedef</code> is a keyword used in C language to assign alternative names to existing <a href="datatype.php" target="_blank">datatypes</a>. Its mostly used with user defined datatypes, when names of the datatypes become slightly complicated to use in programs. Following is the general syntax for using <code>typedef</code>,</p>
                 <b><pre class="c language-clike"><code class=" language-clike">typedef <span class="token operator">&lt;</span>existing_name<span class="token operator">&gt;</span> <span class="token operator">&lt;</span>alias_name<span class="token operator">&gt;</span></code></pre></b>
                 <p>Lets take an example and see how <code>typedef</code> actually works.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">typedef unsigned long ulong<span class="token punctuation">;</span></code></pre></b>
                 <p>The above statement define a term <code>ulong</code> for an <code>unsigned long</code> datatype. Now this <code>ulong</code> identifier can be used to define <code>unsigned long</code> type variables.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">ulong i<span class="token punctuation">,</span> j<span class="token punctuation">;</span></code></pre></b>
                 <hr>
                 <h3>Application of typedef</h3>
                 <p><code>typedef</code> can be used to give a name to user defined data type as well. Lets see its use with <a href="structures.php" target="_blank">structures</a></p>
                 <b><pre class="c language-clike"><code class=" language-clike">
typedef struct
<span class="token punctuation">{</span>
    type member1<span class="token punctuation">;</span>
    type member2<span class="token punctuation">;</span>
    type member3<span class="token punctuation">;</span>
<span class="token punctuation">}</span> type_name<span class="token punctuation">;</span></code></pre></b>
                 <p>Here <b>type_name</b> represents the stucture definition associated with it. Now this <b>type_name</b> can be used to declare a variable of this stucture type.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">type_name t1<span class="token punctuation">,</span> t2<span class="token punctuation">;</span></code></pre></b>
                 <hr>
                 <h3>Structure definition using typedef</h3>
                 <p>Let's take a simple code example to understand how we can define a structure in C using <code>typedef</code> keyword.</p>
                 <p class="center"><img src="../image/course/structures7.png"></p>
                 <hr>
                 <h3><code>typedef</code> and Pointers</h3>
                 <p><code>typedef</code> can be used to give an alias name to <a href="pointers.php" target="_blank">pointers</a> also. Here we have a case in which use of <code>typedef</code> is beneficial during pointer declaration.</p>
                 <p>In Pointers <code>*</code> binds to the right and not on the left.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">int<span class="token operator">*</span> x<span class="token punctuation">,</span> y<span class="token punctuation">;</span></code></pre></b>
                 <p>By this declaration statement, we are actually declaring <code>x</code> as a pointer of type <code>int</code>, whereas <code>y</code> will be declared as a plain <code>int</code> variable.</p>
                 <b><pre class="c language-clike"><code class=" language-clike">typedef int<span class="token operator">*</span> IntPtr<span class="token punctuation">;</span>
IntPtr x<span class="token punctuation">,</span> y<span class="token punctuation">,</span> z<span class="token punctuation">;</span></code></pre></b>
                 <p>But if we use <code>typedef</code> like we have used in the example above, we can declare any number of pointers in a single statement.</p>
                 <p><b>NOTE:</b> If you do not have any prior knowledge of pointers, do study <a href="pointers.php" target="_blank">Pointers</a> first.</p>

                 <hr>
                 <div><ul class="pager">
                     <li class="previous" id="d2">
                         <a href="functions.php">← Prev</a>
                     </li>
                     <li class="next" id="d3">
                         <a href="pointers.php">Next →</a>
                     </li>
                 </ul></div>
             <br><hr>

</div>
</div>

</body>
</html>