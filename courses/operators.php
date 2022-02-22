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
    <title>Operators</title>
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
                  height:3950px; }
		.sag_icerik{
			      position: absolute;
				  left: 400px;
                  float:left; }
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
    <h4 id="b2">C Programming Lectures</h4><br>
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
            <h1>Operators in C Language</h1><br>
            <p>C language supports a rich set of built-in operators. An operator is a symbol that tells the compiler to perform a certain mathematical or logical manipulation. Operators are used in programs to manipulate data and variables.</p>
            <p>C operators can be classified into following types:</p>
            <ul class="content">
                <li>Arithmetic operators</li>
                <li>Relational operators </li>
                <li>Logical operators</li>
                <li>Bitwise operators</li>
                <li>Assignment operators</li>
                <li>Conditional operators</li>
                <li>Special operators</li>
            </ul>
            <hr>
            <h3>Arithmetic operators</h3>
            <p>C supports all the basic arithmetic operators. The following table shows all the basic arithmetic operators.</p>
            <table class="table table-bordered table-striped">
                <tbody><tr><th>Operator</th><th>Description</th></tr>
                <tr><td>+</td><td>adds two operands</td></tr>
                <tr><td>-</td><td>subtract second operands from first</td></tr>
                <tr><td>*</td><td>multiply two operand</td></tr>
                <tr><td>/</td><td>divide numerator by denominator</td></tr>
                <tr><td>%</td><td>remainder of division</td></tr>
                <tr><td>++</td><td>Increment operator - increases integer value by one</td></tr>
                <tr><td>--</td><td>Decrement operator - decreases integer value by one</td></tr>
                </tbody></table>
            <hr>
            <h3>Relational operators</h3>
            <p>
                The following table shows all relation operators supported by C. </p>
            <table class="table table-bordered table-striped">
                <tbody><tr><th>Operator</th><th>Description</th></tr>
                <tr><td>==</td><td>Check if two operand are equal</td></tr>
                <tr><td>!=</td><td>Check if two operand are not equal.</td></tr>
                <tr><td> &gt; </td><td>Check if operand on the left is greater than operand on the right</td></tr>
                <tr><td> &lt; </td><td>Check operand on the left is smaller than right operand</td></tr>
                <tr><td> &gt;= </td><td>check left operand is greater than or equal to right operand</td></tr>
                <tr><td> &lt;= </td><td>Check if operand on left is smaller than or equal to right operand</td></tr>
                </tbody></table>
            <hr>
            <h3>Logical operators</h3>
            <p>
                C language supports following 3 logical operators. Suppose <code>a = 1</code> and <code>b = 0</code>,</p>
            <table class="table table-bordered table-striped">
                <tbody><tr><th> Operator </th><th>Description</th><th>Example</th></tr>
                <tr><td> &amp;&amp; </td><td>Logical AND</td><td>(a &amp;&amp; b) is false</td></tr>
                <tr><td> || </td><td>Logical OR</td><td>(a || b) is true</td></tr>
                <tr><td> ! </td><td>Logical NOT</td><td>(!a) is false</td></tr>
                </tbody></table>
            <hr>
            <h3>Bitwise operators</h3>
            <p>
                Bitwise operators perform manipulations of data at <b>bit level</b>. These operators also perform <b>shifting of bits</b> from right to left. Bitwise operators are not applied to <code>float</code> or <code>double</code>(These are <a href="datatypes.php" target="_blank">datatypes</a>, we will learn about them in the next tutorial). </p>
            <table class="table table-bordered table-striped">
                <tbody><tr><th> Operator </th><th>Description</th></tr>
                <tr><td> &amp; </td><td>Bitwise AND</td></tr>
                <tr><td> | </td><td>Bitwise OR</td></tr>
                <tr><td> ^ </td><td>Bitwise exclusive OR</td></tr>
                <tr><td> &lt;&lt; </td><td>left shift</td></tr>
                <tr><td> &gt;&gt; </td><td>right shift</td></tr>
                </tbody></table>
            <p>
                Now lets see truth table for bitwise <code>&amp;</code>, <code>|</code> and <code>^</code>
            </p><table class="table table-bordered table-striped">
                <tbody><tr><th> a </th><th>b</th><th>a &amp; b</th><th>a | b</th><th>a ^ b</th></tr>
                <tr><td> 0 </td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
                <tr><td> 0 </td><td>1</td><td>0</td><td>1</td><td>1</td></tr>
                <tr><td> 1 </td><td>0</td><td>0</td><td>1</td><td>1</td></tr>
                <tr><td> 1 </td><td>1</td><td>1</td><td>1</td><td>0</td></tr>
                </tbody></table>
            <p></p>
            <p>
                The bitwise <b>shift</b> operator, shifts the bit value. The left operand specifies the value to be shifted and the right operand specifies the number of positions that the bits in the value have to be shifted. Both operands have the same precedence.</p>
            <hr>
            <h3>Assignment Operators</h3>
            <p>
                Assignment operators supported by C language are as follows.</p>
            <table class="table table-bordered table-striped">
                <tbody><tr><th> Operator </th><th>Description</th><th>Example</th></tr>
                <tr><td> = </td><td>assigns values from right side operands to left side operand</td><td>a=b</td></tr>
                <tr><td> += </td><td>adds right operand to the left operand and assign the result to left</td><td>a+=b is same as a=a+b</td></tr>
                <tr><td> -= </td><td>subtracts right operand from the left operand and assign the result to left operand</td><td>a-=b is same as a=a-b</td></tr>
                <tr><td> *= </td><td>mutiply left operand with the right operand and assign the result to left operand</td><td>a*=b is same as a=a*b </td></tr>
                <tr><td> /= </td><td>divides left operand with the right operand and assign the result to left operand</td><td>a/=b is same as a=a/b </td></tr>
                <tr><td> %= </td><td>calculate modulus using two operands and assign the result to left operand</td><td>a%=b is same as a=a%b </td></tr>
                </tbody></table>
            <hr>
            <h3>Conditional operator</h3>
            <p>The conditional operators in C language are known by two more names</p>
            <ol class="content">
                <li><b>Ternary Operator</b></li>
                <li><b>? : Operator</b></li>
            </ol>
            <p>It is actually the <code>if</code> condition that we use in C language decision making, but using conditional operator, we turn the <code>if</code> condition statement into a short and simple operator.
            </p>
            <p>The syntax of a conditional operator is :</p>
            <b><pre class="c language-clike"><code class=" language-clike">expression <span class="token number">1</span> <span class="token operator">?</span> expression <span class="token number">2</span><span class="token punctuation">:</span> expression <span class="token number">3</span></code></pre></b>
            <p><b>Explanation:</b></p>
            <ul class="content">
                <li>The question mark <b>"?"</b> in the syntax represents the <b>if</b> part.</li>
                <li>The first expression (expression 1) generally returns either true or false, based on which it is decided whether (expression 2) will be executed or (expression 3)</li>
                <li>If (expression 1) returns true then the expression on the left side of <b>" : "</b> i.e (expression 2) is executed.</li>
                <li>If (expression 1) returns false then the expression on the right side of <b>" : "</b> i.e (expression 3) is executed.</li>
            </ul>
            <hr>
            <h3>Special operator</h3>
            <table class="table table-bordered table-striped">
                <tbody><tr><th> Operator </th><th>Description</th><th>Example</th></tr>
                <tr><td> sizeof </td><td>Returns the size of an variable</td><td> <b>sizeof(x)</b> return size of the variable <b>x</b></td></tr>
                <tr><td> &amp; </td><td>Returns the address of an variable</td><td><b>&amp;x ;</b> return address of the variable <b>x</b></td></tr>
                <tr><td> * </td><td>Pointer to a variable</td><td><b>*x ;</b> will be pointer to a variable <b>x</b></td></tr>
                </tbody></table>
            <hr>
            <div>
			 <ul class="pager">
              <li class="next" id="d3">
               <a href="datatypes.php">Next →</a>
              </li>
             </ul>
			 </div>
            <br><hr>
    </div>
</div>

</body>
</html>

