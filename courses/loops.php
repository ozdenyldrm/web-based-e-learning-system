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
    <title>Loops</title>
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
                  height:4680px; }
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
    <div class="card-body"

    <div class="icerik_yazi">
        <div id="body-content"><br>
            <h1>Loops in C</h1>
            <p> In any programming language including C, loops are used to execute a set of statements repeatedly until a particular condition is satisfied.</p>
            <hr>
            <h2>How it Works</h2>
            <p>The below diagram depicts a loop execution,</p>
            <p class="center"><img src="../image/course/loops1.png"></p>
            <p>As per the above diagram, if the Test Condition is true, then the loop is executed, and if it is false then the execution breaks out of the loop. After the loop is successfully executed the execution again starts from the Loop entry and again checks for the Test condition, and this keeps on repeating.</p>
            <p>The sequence of statements to be executed is kept inside the curly braces <code>{ }</code> known as the <b>Loop body</b>. After every execution of the loop body, <b>condition</b> is verified, and if it is found to be <b>true</b> the loop body is executed again. When the condition check returns <b>false</b>, the loop body is not executed, and execution breaks out of the loop.</p>
            <hr>
            <h2>Types of Loop</h2>
            <p>There are 3 types of Loop in C language, namely:</p>
            <ol class="content">
                <li><code>while</code> loop</li>
                <li><code>for</code> loop</li>
                <li><code>do while</code> loop</li>
            </ol>
            <hr>
            <h3><code>while</code> loop</h3>
            <p><code>while</code> loop can be addressed as an <b>entry control</b> loop. It is completed in 3 steps.</p>
            <ul class="content">
                <li>Variable initialization.(e.g <code>int x = 0;</code>)</li>
                <li>condition(e.g <code>while(x &lt;= 10)</code>)</li>
                <li>Variable increment or decrement ( <code>x++</code> or <code>x--</code> or <code>x = x + 2</code> )</li>
            </ul>
            <p><b>Syntax :</b></p>
            <b><pre class="c language-clike"><code class=" language-clike">variable initialization<span class="token punctuation">;</span>
<span class="token keyword">while</span><span class="token punctuation">(</span>condition<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statements<span class="token punctuation">;</span>
    variable increment or decrement<span class="token punctuation">;</span>
<span class="token punctuation">}</span></code></pre></b><br>
            <hr>
            <h3><code>for</code> loop</h3>
            <p><code>for</code> loop is used to execute a set of statements repeatedly until a particular condition is satisfied. We can say it is an <b>open ended loop.</b>. General format is,</p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">for</span><span class="token punctuation">(</span>initialization<span class="token punctuation">;</span> condition<span class="token punctuation">;</span> increment<span class="token operator">/</span>decrement<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statement<span class="token operator">-</span>block<span class="token punctuation">;</span>
<span class="token punctuation">}</span></code></pre></b>
            <p>In <code>for</code> loop we have exactly two semicolons, one after initialization and second after the condition. In this loop we can have more than one initialization or increment/decrement, separated using comma operator. But it can have only one <b>condition</b>.</p>
            <p>The <code>for</code> loop is executed as follows:</p>
            <ol class="content">
                <li>It first evaluates the initialization code.</li>
                <li>Then it checks the condition expression.</li>
                <li>If it is <b>true</b>, it executes the for-loop body.</li>
                <li>Then it evaluate the increment/decrement condition and again follows from step 2.</li>
                <li>When the condition expression becomes <b>false</b>, it exits the loop.</li>
            </ol><br>
            <h4>Example: Program to print first 10 natural numbers</h4><br>
            <p class="center"><img src="../image/course/loops2.png"></p>
            <u><p>Output= 1 2 3 4 5 6 7 8 9 10</p></u>
            <hr>
            <h3>Nested <code>for</code> loop</h3>
            <p>We can also have nested <code>for</code> loops, i.e one <code>for</code> loop inside another <code>for</code> loop. Basic syntax is,</p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">for</span><span class="token punctuation">(</span>initialization<span class="token punctuation">;</span> condition<span class="token punctuation">;</span> increment<span class="token operator">/</span>decrement<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    <span class="token keyword">for</span><span class="token punctuation">(</span>initialization<span class="token punctuation">;</span> condition<span class="token punctuation">;</span> increment<span class="token operator">/</span>decrement<span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        statement <span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></code></pre></b><br>
            <hr>
            <h3><code>do while</code> loop</h3>
            <p>In some situations it is necessary to execute body of the loop before testing the condition. Such situations can be handled with the help of <code>do-while</code> loop. <code>do</code> statement evaluates the body of the loop first and at the end, the condition is checked using <code>while</code> statement. It means that the body of the loop will be executed at least once, even though the starting condition inside <code>while</code> is initialized to be <b>false</b>. General syntax is,</p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">do</span>
<span class="token punctuation">{</span>
    <span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
    <span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
<span class="token punctuation">}</span>
<span class="token keyword">while</span><span class="token punctuation">(</span>condition<span class="token punctuation">)</span></code></pre></b><br>
            <h4>Example: Program to print first 10 multiples of 5.</h4><br>
            <p class="center"><img src="../image/course/loops3.png"></p>
            <u><p>Output= 5 10 15 20 25 30 35 40 45 50</p></u>
            <hr>
            <h3>Jumping Out of Loops</h3>
            <p>Sometimes, while executing a loop, it becomes necessary to skip a part of the loop or to leave the loop as soon as certain condition becomes <b>true</b>. This is known as jumping out of loop.
            </p>
            <h4>1) break statement </h4>
            <p>When <code>break</code> statement is encountered inside a loop, the loop is immediately exited and the program continues with the statement immediately following the loop.
            </p>
            <p class="center"><img src="../image/course/loops4.png"></p>
            <h4>2) continue statement</h4>
            <p>It causes the control to go directly to the test-condition and then continue the loop process. On encountering <code>continue</code>, cursor leave the current cycle of loop, and starts with the next cycle.
            </p>
            <p class="center"><img src="../image/course/loops5.png"></p>
            <hr>
            <div>
                <div class="container">
                <ul class="pager">
                    <li class="previous" id="d2">
                        <a href="switch.php">← Prev</a>
                    </li>
                    <li class="next" id="d3">
                        <a href="arrays.php">Next →</a>
                    </li>
                </ul>
                </div>
            </div>
            <br><hr>
</div>
</div>

</body>
</html>
