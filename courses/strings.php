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
    <title>Strings</title>
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
                  height:3900px; }
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
                <h1>Strings in C</h1><br>

                    <b>String</b> is a sequence of characters that is treated as a single data item and terminated by null character <code>'\0'</code>. Remember that C language does not support strings as a data type. A <b>string</b> is actually one-dimensional array of characters in C language. These are often used to create meaningful and readable programs.</p>
                <p><b>For example:</b> The string "hello world" contains 12 characters including <code>'\0'</code> character which is automatically added by the compiler at the end of the string.</p>
                <hr>
                <h3>Declaring and Initializing a string variables</h3>
                <p>There are different ways to initialize a character array variable.</p>
                <p class="center"><img src="../image/course/s1.png"></p>
                <p>Remember that when you initialize a character array by listing all of its characters separately then you must supply the <code>'\0'</code> character explicitly.</p>
                <p>Some examples of illegal initialization of character array are,</p>
                <p class="center"><img src="../image/course/s2.png"></p>
                <hr>
                <h3>String Input and Output</h3>
                <p>
                    Input function <code>scanf()</code> can be used with <b>%s</b> format specifier to read a string input from the terminal. But there is one problem with <code>scanf()</code> function, it terminates its input on the first white space it encounters. Therefore if you try to read an input string "Hello World" using <code>scanf()</code> function, it will only read <b>Hello</b> and terminate after encountering white spaces.</p>
                <p>However, C supports a format specification known as the <b>edit set conversion code %[..]</b> that can be used to read a line containing a variety of characters, including white spaces.</p>
                <p class="center"><img src="../image/course/s3.png"></p>

                <p>Another method to read character string with white spaces from terminal is by using the <code>gets()</code> function.</p>
                <p class="center"><img src="../image/course/s4.png"></p>

                <hr>
                <h3>String Handling Functions</h3>
                <p>
                    C language supports a large number of string handling functions that can be used to carry out many of the string manipulations. These functions are packaged in <b>string.h</b> library. Hence, you must include <b>string.h</b> header file in your programs to use these functions.
                </p>
                <p>
                    The following are the most commonly used string handling functions.</p>
                <p>
                </p><table class="table table-bordered table-striped">
                    <tbody><tr><th>Method</th><th>Description</th></tr>
                    <tr><td><code>strcat()</code></td><td>It is used to concatenate(combine) two strings</td></tr>
                    <tr><td><code>strlen()</code></td><td>It is used to show length of a string</td></tr>
                    <tr><td><code><code>strrev()</code></code></td><td>It is used to show reverse of a string</td></tr>
                    <tr><td><code>strcpy()</code></td><td>Copies one string into another</td></tr>
                    <tr><td><code>strcmp()</code></td><td>It is used to compare two string</td></tr>
                    </tbody></table>
                <p></p>
                <hr>
                <h3>strcat() function</h3><br>
                <b><pre class="c language-clike"><code class=" language-clike"><span class="token function">strcat</span><span class="token punctuation">(</span><span class="token string">"hello"</span><span class="token punctuation">,</span> <span class="token string">"world"</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                <code>strcat()</code> function will add the string <b>"world"</b> to <b>"hello"</b> i.e it will ouput helloworld.
                <p></p>
                <hr>
                <h3>strlen() function</h3>
                <p>
                    <code>strlen()</code> function will return the length of the string passed to it.</p>
                <b><pre class="c language-clike"><code class=" language-clike">int j<span class="token punctuation">;</span>
j <span class="token operator">=</span> <span class="token function">strlen</span><span class="token punctuation">(</span><span class="token string">"studytonight"</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"%d"</span><span class="token punctuation">,</span>j<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                <p>Output = 12</p>
                <hr>
                <h3>strcmp() function</h3>
                <p>
                    <code>strcmp()</code> function will return the ASCII difference between first unmatching character of two strings.</p>
                    <b><pre class="c language-clike"><code class=" language-clike">int j<span class="token punctuation">;</span>
j <span class="token operator">=</span> <span class="token function">strcmp</span><span class="token punctuation">(</span><span class="token string">"study"</span><span class="token punctuation">,</span> <span class="token string">"tonight"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"%d"</span><span class="token punctuation">,</span>j<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre></b>
                    <p>Output = -1</p>
                <hr>
                <h3>strcpy() function</h3>
                <p>It copies the second string argument to the first string argument.</p>
                    <b><pre class="c language-clike"><code class=" language-clike">#include<span class="token operator">&lt;</span>stdio<span class="token punctuation">.</span>h<span class="token operator">&gt;</span>
#include<span class="token operator">&lt;</span>string<span class="token punctuation">.</span>h<span class="token operator">&gt;</span><br>int <span class="token function">main</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    char s1<span class="token punctuation">[</span><span class="token number">50</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
    char s2<span class="token punctuation">[</span><span class="token number">50</span><span class="token punctuation">]</span><span class="token punctuation">;</span>

    <span class="token function">strcpy</span><span class="token punctuation">(</span>s1<span class="token punctuation">,</span> <span class="token string">"StudyTonight"</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">//copies "studytonight" to string s1</span>
    <span class="token function">strcpy</span><span class="token punctuation">(</span>s2<span class="token punctuation">,</span> s1<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">//copies string s1 to string s2</span>

    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"%s\n"</span><span class="token punctuation">,</span> s2<span class="token punctuation">)</span><span class="token punctuation">;</span>

    <span class="token keyword">return</span><span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span></code></pre></b>
                <p>Output = StudyTonight</p>
                <hr>
                <h3>strrev() function</h3>
                <p>It is used to reverse the given string expression.</p>
                <b><pre class=" language-clike"><code class=" language-clike">#include<span class="token operator">&lt;</span>stdio<span class="token punctuation">.</span>h<span class="token operator">&gt;</span>

int <span class="token function">main</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    char s1<span class="token punctuation">[</span><span class="token number">50</span><span class="token punctuation">]</span><span class="token punctuation">;</span>

    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"Enter your string: "</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token function">gets</span><span class="token punctuation">(</span>s1<span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token function">printf</span><span class="token punctuation">(</span><span class="token string">"\nYour reverse string is: %s"</span><span class="token punctuation">,</span><span class="token function">strrev</span><span class="token punctuation">(</span>s1<span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token keyword">return</span><span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span></code></pre></b>
                <p>Output = <br>Enter your string: studytonight <br>Your reverse string is: thginotyduts
                </p>
                <hr>
                <div><ul class="pager">
                        <li class="previous" id="d2">
                            <a href="arrays.php">← Prev</a>
                        </li>
                        <li class="next" id="d3">
                            <a href="functions.php">Next →</a>
                        </li>
                    </ul></div>
                <br><hr>

                <div class="center" style="min-height: 250px;overflow: auto;">

                    <div data-ad="BelowContent" id="Asc-BelowContent-GjWkj51" data-sizes="[[336,280],[300,250]]" class="asc-ad" data-google-query-id="CInhyuD2ye4CFWjquwgdFYwBUA"><div id="google_ads_iframe_/54243763/studytonight_belowcontent_0__container__" style="border: 0pt none; display: inline-block; width: 336px; height: 280px;"><iframe frameborder="0" src="https://1f4a77464430da6117cc8b571b8f4777.safeframe.googlesyndication.com/safeframe/1-0-37/html/container.html" id="google_ads_iframe_/54243763/studytonight_belowcontent_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="336" height="280" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="4" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
                </div></div>
        </div>
</div>
</div>

</body>
</html>
