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
    <title>Decision</title>
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
                  height:4900px; }
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
        <div id="body-content">
            <br><h1>Decision making in C</h1><br>
            <p>Decision making is about deciding the order of execution of statements based on certain conditions or repeat a group of statements until certain specified conditions are met. C language handles decision-making by supporting the following statements,</p>
            <ul class="content">
                <li><code>if</code> statement</li>
                <li><code>switch</code> statement</li>
                <li>conditional operator statement (<code>? :</code> operator)</li>
                <li><code>goto</code> statement</li>
            </ul>
            <hr>
            <h2>Decision making with <code>if</code> statement</h2>
            <p>The <code>if</code> statement may be implemented in different forms depending on the complexity of conditions to be tested. The different forms are,</p>
            <ol class="content">
                <li>Simple <code>if</code> statement</li>
                <li><code>if....else</code> statement</li>
                <li>Nested <code>if....else </code> statement</li>
                <li>Using <code>else if</code> statement</li>
            </ol>
            <hr>
            <h3>Simple <code>if</code> statement</h3>
            <p>The general form of a simple <code>if</code> statement is, </p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">if</span><span class="token punctuation">(</span>expression<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statement inside<span class="token punctuation">;</span>
<span class="token punctuation">}</span>
    statement outside<span class="token punctuation">;</span></code></pre></b>
            <p>If the <i>expression</i> returns true, then the <b>statement-inside</b> will be executed, otherwise <b>statement-inside</b> is skipped and only the <b>statement-outside</b> is executed.</p>
            <p><b>Example:</b> </p>
            <p class="center"><img src="../image/course/decision1.png"></p>
            <p><u>Output= x is greater than y</u></p>
            <hr>
            <h3><code>if...else</code> statement</h3>
            <p>The general form of a simple <code>if...else</code> statement is,</p>
           <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">if</span><span class="token punctuation">(</span>expression<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statement block1<span class="token punctuation">;</span>
<span class="token punctuation">}</span>
<span class="token keyword">else</span>
<span class="token punctuation">{</span>
    statement block2<span class="token punctuation">;</span>
<span class="token punctuation">}</span></code></pre></b>
            <p>If the <i>expression</i> is true, the <b>statement-block1</b> is executed, else <b>statement-block1</b> is skipped and <b>statement-block2</b> is executed. </p>
            <p><b>Example:</b></p>
            <p class="center"><img src="../image/course/decision2.png"></p>
            <p><u>Output= y is greater than x</u></p>
            <hr>
            <h3>Nested <code>if....else</code> statement</h3>
            <p>The general form of a nested <code>if...else</code> statement is,</p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">if</span><span class="token punctuation">(</span> expression <span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    <span class="token keyword">if</span><span class="token punctuation">(</span> expression1 <span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        statement block1<span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
    <span class="token keyword">else</span>
    <span class="token punctuation">{</span>
        statement block2<span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
<span class="token keyword">else</span>
<span class="token punctuation">{</span>
    statement block3<span class="token punctuation">;</span>
<span class="token punctuation">}</span></code></pre></b>
            <p>if <i>expression</i> is false then <b>statement-block3</b> will be executed, otherwise the execution continues and enters inside the first <code>if</code> to perform the check for the next <code>if</code> block, where if <i>expression 1</i> is true the <b>statement-block1</b> is executed otherwise <b>statement-block2</b> is executed. </p>
            <hr>
            <h3><code>else if</code> ladder</h3>
            <p>The general form of else-if ladder is,</p>
            <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">if</span><span class="token punctuation">(</span>expression1<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statement block1<span class="token punctuation">;</span>
<span class="token punctuation">}</span>
<span class="token keyword">else</span> <span class="token keyword">if</span><span class="token punctuation">(</span>expression2<span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statement block2<span class="token punctuation">;</span>
<span class="token punctuation">}</span>
<span class="token keyword">else</span> <span class="token keyword">if</span><span class="token punctuation">(</span>expression3 <span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    statement block3<span class="token punctuation">;</span>
<span class="token punctuation">}</span>
<span class="token keyword">else</span>
    default statement<span class="token punctuation">;</span></code></pre></b>
            <p>The expression is tested from the top(of the ladder) downwards. As soon as a <b>true</b> condition is found, the statement associated with it is executed.</p>
            <p><b>Example :</b></p>
            <p class="center"><img src="../image/course/decision3.png"></p>
            <hr>
            <h3>Points to Remember</h3>
            <ol class="content">
                <li>In <code>if</code> statement, a single statement can be included without enclosing it into curly braces <code>{ ... }</code></li>
                    <br><b><pre class="c language-clike"><code class=" language-clike">int a <span class="token operator">=</span> <span class="token number">5</span><span class="token punctuation">;</span>
<span class="token keyword">if</span><span class="token punctuation">(</span>a <span class="token operator">&gt;</span> <span class="token number">4</span><span class="token punctuation">)</span>
    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"success"</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                    <p>No curly braces are required in the above case, but if we have more than one statement inside <code>if</code> condition, then we must enclose them inside curly braces.</p></li>
                <li><code>==</code> must be used for comparison in the expression of <code>if</code> condition, if you use <code>=</code> the expression will always return <b>true</b>, because it performs assignment not comparison.</li>
                <br><li>Other than <b>0(zero)</b>, all other values are considered as <b>true</b>.</li><br>
                    <b><pre class="c language-clike"><code class=" language-clike"><span class="token keyword">if</span><span class="token punctuation">(</span><span class="token number">27</span><span class="token punctuation">)</span>
    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"hello"</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                    <p>In above example, <b>hello</b> will be printed.</p>
                </li>
            </ol>
            <hr>
            <div><ul class="pager">
                    <li class="previous" id="d2">
                        <a href="inputoutput.php">← Prev</a>
                    </li>
                    <li class="next" id="d3">
                        <a href="switch.php">Next →</a>
                    </li>
                </ul></div>
            <br><hr>

            <div class="center" style="min-height: 250px;overflow: auto;">

                <div data-ad="BelowContent" id="Asc-BelowContent-U68d0868" data-sizes="[[336,280],[300,250]]" class="asc-ad" data-google-query-id="CKr_qO7LzO4CFY3quwgdZbQDKg"><div id="google_ads_iframe_/54243763/studytonight_belowcontent_0__container__" style="border: 0pt none; display: inline-block; width: 336px; height: 280px;"><iframe frameborder="0" src="https://e2d013b9f8cf535d360c8944369db18b.safeframe.googlesyndication.com/safeframe/1-0-37/html/container.html" id="google_ads_iframe_/54243763/studytonight_belowcontent_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="336" height="280" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="4" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
            </div></div>
    </div>
</div>

</body>
</html>
